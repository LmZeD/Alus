<?php

namespace App\Console\Commands;

use App\Exceptions\NoBreweriesFoundException;
use function App\Http\getCurrentTime;
use function App\Http\getTotalRunTime;
use function App\Http\validateLatitude;
use function App\Http\validateLongitude;
use App\Services\OutputDataFetchingService;
use App\Services\TripMakingService;
use App\Services\ValidateCoordinatesService;
use Illuminate\Console\Command;

class ShellRun extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'runShell {longitude} {latitude}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Calculates trip with given coordinates';

    protected $tripMakingService;
    protected $outputDataFetchingService;
    protected $validateCoordinatesService;

    /**
     * Create a new command instance.
     * @param $tripMakingService
     * @param $outputDataFetchingService
     * @param $validateCoordinatesService
     *
     * @return void
     */
    public function __construct(
        TripMakingService $tripMakingService,
        OutputDataFetchingService $outputDataFetchingService,
        ValidateCoordinatesService $validateCoordinatesService
    ) {
        parent::__construct();
        $this->tripMakingService = $tripMakingService;
        $this->outputDataFetchingService = $outputDataFetchingService;
        $this->validateCoordinatesService = $validateCoordinatesService;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        ini_set('max_execution_time', 600);
        $startTime = getCurrentTime();//time tracking

        $startLongitude = $this->argument('longitude');
        $startLatitude = $this->argument('latitude');
        $this->validateCoordinates($startLongitude, $startLatitude);
        $tripDistance = 2000;//km

        try {
            $resultArray = $this->tripMakingService->calculateWholeTrip($startLongitude, $startLatitude, $tripDistance);
        } catch (NoBreweriesFoundException $ex) {
            echo('No breweries are close enough...');
            exit(0);
        }
        $results = $this->outputDataFetchingService->fetchDataForOutput(
            $resultArray['usedIndexes'],
            $resultArray['breweriesData'],
            $resultArray['distanceLeft'],
            $resultArray['startLatitude'],
            $resultArray['startLongitude'],
            $resultArray['tripDistance']
        );

        if ($results === 'failed' || $results == null) {
            echo('No breweries are close enough...');
            exit(0);
        }

        $this->outputResults($results, $startLongitude, $startLatitude);

        $runTime = getTotalRunTime($startTime);
        echo("\nRun time: " . $runTime . " s");
    }

    private function validateCoordinates($startLongitude, $startLatitude)
    {
        if (!$this->validateCoordinatesService->isLatitudeValid($startLatitude) ||
            !$this->validateCoordinatesService->isLongitudeValid($startLongitude)) {
            echo("\nPlease enter valid values.\n");
            echo("How to use: php artisan runShell {longitude} {latitude}\n");
            echo("Where: -180 < longitude < 180 AND -85 < latitude < 85\n");
            exit(0);
        }
    }

    private function outputResults($results, $startLongitude, $startLatitude)
    {
        $i = 1;
        echo("Coordinates format: longitude,latitude \n");
        echo("Found " . (count($results) - 5) . " breweries \n");//4 non brewery data holding fields, 1 return home
        echo("->[HOME] " . $startLongitude . "," . $startLatitude . "\n");
        foreach ($results as $result) {
            if ($result['brewery']['id'] === '0') {
                echo("<-[HOME] " . $startLongitude . "," . $startLatitude . "\n");
                break;
            }
            echo($i . ". ->[" . $result['brewery']['id'] . "] " . $result['brewery']['name'] . ": " .
                $result['longitude'] . "," . $result['latitude'] . " distance: " . $result['distance'] . " km" . "\n");
            $i++;
        }
        echo("Distance traveled: " . ($results['maxTripDistance'] - $results['distanceLeft']) .
            "km of " . $results['maxTripDistance'] . "km (left: " . $results['distanceLeft'] . "km)" . "\n");

        $i = 1;
        echo("\n\nTotal beer found: " . $results['beerCount'] . "\n");
        echo("Unique beer found: " . count($results['uniqueBeer']) . "\n");
        foreach ($results['uniqueBeer'] as $beer) {
            echo($i . ". " . $beer . "\n");
            $i++;
        }
    }
}
