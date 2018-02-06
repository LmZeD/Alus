<?php

namespace App\Console\Commands;

use function App\Http\getCurrentTime;
use function App\Http\getTotalRunTime;
use function App\Http\validateLatitude;
use function App\Http\validateLongitude;
use App\Services\OutputDataFetchingService;
use App\Services\TripMakingService;
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

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->tripMakingService = new TripMakingService();
        $this->outputDataFetchingService = new OutputDataFetchingService();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        ini_set('max_execution_time', 600);
        $startTime = getCurrentTime();//time tracking
        //no need to validate here? Normally it is validated in Coordinates request.
        //validation here is overkill?
        $startLongitude = $this->argument('longitude');
        $startLatitude = $this->argument('latitude');
        if (!validateLatitude($startLatitude) || !validateLongitude($startLongitude)) {
            echo("\nPlease enter valid values.\n");
            echo("How to use: php artisan runShell {longitude} {latitude}\n");
            echo("Where: -180 < longitude < 180 AND -85 < latitude < 85\n");
            exit(0);
        }
        $tripDistance = 2000;//km
        //services

        $resultArray = $this->tripMakingService->calculateWholeTrip($startLongitude, $startLatitude, $tripDistance);
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

        $runTime = getTotalRunTime($startTime);
        echo("\nRun time: " . $runTime . " s");
    }
}
