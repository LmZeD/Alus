<?php

namespace App\Http\Controllers;

use App\Exceptions\NoBreweriesFoundException;
use function App\Http\getCurrentTime;
use function App\Http\getTotalRunTime;
use App\Http\Requests\CoordinatesRequest;
use App\Services\OutputDataFetchingService;
use App\Services\TripMakingService;

class TripController extends Controller
{
    private $tripMakingService;
    private $outputDataFetchingService;

    public function __construct(TripMakingService $tripMakingService, OutputDataFetchingService $outputFetchingService)
    {
        $this->tripMakingService = $tripMakingService;
        $this->outputDataFetchingService = $outputFetchingService;
    }

    /**
     * Get input screen
     *
     * @return view
     */
    public function getIndex()
    {
        return view('inputScreen');
    }

    /**
     * Initiate calculations
     *
     * @param $request
     *
     * @return view
     */
    public function makeATrip(CoordinatesRequest $request)
    {
        //used when traveling around the world (travel distance 200000)
        //execution time increases for very big distance
        ini_set('max_execution_time', 600);
        $startTime = getCurrentTime();//time tracking
        //no need to validate here, it was validated in CoordinatesRequest
        $startLongitude = $request['longitude'];
        $startLatitude = $request['latitude'];
        $tripDistance = 2000;//km
        try {
            $resultArray = $this->tripMakingService->calculateWholeTrip($startLongitude, $startLatitude, $tripDistance);
        } catch (NoBreweriesFoundException $ex) {//if there are no breweries in range results array will be empty
            return $ex->render();
        }

        $results = $this->outputDataFetchingService->fetchDataForOutput(
            $resultArray['usedIndexes'],
            $resultArray['breweriesData'],
            $resultArray['distanceLeft'],
            $resultArray['startLatitude'],
            $resultArray['startLongitude'],
            $resultArray['tripDistance']
        );

        $runTime = getTotalRunTime($startTime);
        return view('outputScreen', ['results' => $results, 'startLatitude' => $startLatitude,
            'startLongitude' => $startLongitude, 'runTime' => $runTime]);
    }
}
