<?php

namespace Tests\Unit;

use function App\Http\dataFactory;
use App\Services\OutputDataFetchingService;
use Tests\TestCase;

class OutputDataFetchingServiceTest extends TestCase
{
    private $outputDataFetchingService;

    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->outputDataFetchingService = new OutputDataFetchingService();
    }

    /**
     * Testing fetchDataForOutput with null parameters
     *
     * Result must be null
     *
     * @return void
     */
    public function testAllNull()
    {
        $result = $this->outputDataFetchingService->fetchDataForOutput(
            null,
            null,
            null,
            null,
            null,
            null
        );

        $this->assertNull($result);
    }

    /**
     * Testing fetchDataForOutput with null parameters (except usedIndexes)
     * Idea: first error handle block is at usedIndexes, now let it pass and provide null in other parts
     *
     * Result must be null (no breweriesData provided)
     *
     * @return void
     */
    public function testAllNullExceptUsedIndexes()
    {
        $usedIndexes = [1, 2, 3];
        $result = $this->outputDataFetchingService->fetchDataForOutput(
            $usedIndexes,
            null,
            null,
            null,
            null,
            null
        );
        $this->assertNull($result);
    }

    /**
     * Testing fetchDataForOutput with null parameters (except usedIndexes)
     * Idea: first error handle block is at usedIndexes, now let it pass and provide null in other parts
     *       second error handle is at breweryData, let it pass and provide null to other parts
     *
     * Results last element must be filled with data from breweriesData. It means: results last element distance
     * must be breweriesData last elements distance.
     *
     * @return void
     */
    public function testAllNullExceptUsedIndexesAndBreweriesData()
    {
        $usedIndexes = [0, 1, 2];
        $breweriesData = dataFactory(3, 0);
        $distanceLeft = null;
        $long = null;
        $lat = null;
        $tripDistance = null;
        $result = $this->outputDataFetchingService->fetchDataForOutput(
            $usedIndexes,
            $breweriesData,
            $distanceLeft,
            $long,
            $lat,
            $tripDistance
        );
        $this->assertEquals(
            $breweriesData[end($usedIndexes)]['distanceFromHome'],
            $result[count($usedIndexes)]['distance']
        );
    }

    /**
     * Testing fetchDataForOutput with distanceLeft as invalid parameter
     * Idea: first error handle block is at usedIndexes, now let it pass and provide null in other parts
     *       second error handle is at breweryData, let it pass
     *       now, since other tests passed, test distanceLeft
     *
     * Results last element must be filled with data from distanceLeft.
     * It means: results array distanceLeft element must be like provided as long as it is valid value
     *
     * In this case result must be 'undefined'
     *
     * @return void
     */
    public function testDistanceLeftInvalidValue()
    {
        $usedIndexes = [0, 1, 2];
        $breweriesData = dataFactory(3, 0);
        $distanceLeft = 'invalidValue'; //'123.123a'
        $long = null;
        $lat = null;
        $tripDistance = null;

        $result = $this->outputDataFetchingService->fetchDataForOutput(
            $usedIndexes,
            $breweriesData,
            $distanceLeft,
            $long,
            $lat,
            $tripDistance
        );

        $this->assertEquals('undefined', $result['distanceLeft']);
    }

    /**
     * Testing fetchDataForOutput with distanceLeft as invalid parameter
     * Idea: first error handle block is at usedIndexes, now let it pass and provide null in other parts
     *       second error handle is at breweryData, let it pass
     *       now, since other tests passed, test distanceLeft
     *
     * Results last element must be filled with data from distanceLeft.
     * It means: results array distanceLeft element must be like provided as long as it is valid value
     *
     * In this case result must be equal to (distanceFromHome - providedArgument)
     *
     * @return void
     */
    public function testDistanceLeftValidValue()
    {
        $usedIndexes = [0, 1, 2];
        $breweriesData = dataFactory(3, 0);
        $distanceLeft = '363.11';
        $long = null;
        $lat = null;
        $tripDistance = null;

        $result = $this->outputDataFetchingService->fetchDataForOutput(
            $usedIndexes,
            $breweriesData,
            $distanceLeft,
            $long,
            $lat,
            $tripDistance
        );

        $this->assertEquals(
            $distanceLeft - $breweriesData[count($usedIndexes) - 1]['distanceFromHome'],
            $result['distanceLeft']
        );
    }

    /**
     * Testing fetchDataForOutput with distanceLeft as invalid parameter
     * Idea: first error handle block is at usedIndexes, now let it pass and provide null in other parts
     *       second error handle is at breweryData, let it pass
     *       next error handle is at distanceLeft, let it pass
     *       now, since other tests passed and longitude/latitude values were validated in previous methods,
     *       and it doesn't affect calculations (just output data) test tripDistance
     *
     * Results last element must be filled with data from distanceLeft.
     * It means: results array distanceLeft element must be like provided as long as it is valid value
     *
     * In this case result must be equal to (distanceFromHome - providedArgument)
     *
     * @return void
     */
    public function testTripDistanceInvalidValue()
    {
        $usedIndexes = [0, 1, 2];
        $breweriesData = dataFactory(3, 0);
        $distanceLeft = '363.11';
        $tripDistance = 'invalidValue';//'123.123a'
        $long = null;
        $lat = null;

        $result = $this->outputDataFetchingService->fetchDataForOutput(
            $usedIndexes,
            $breweriesData,
            $distanceLeft,
            $long,
            $lat,
            $tripDistance
        );

        $this->assertEquals('undefined', $result['maxTripDistance']);
    }

    /**
     * Testing fetchDataForOutput with distanceLeft as invalid parameter
     * Idea: first error handle block is at usedIndexes, now let it pass and provide null in other parts
     *       second error handle is at breweryData, let it pass
     *       next error handle is at distanceLeft, let it pass
     *       now, since other tests passed and longitude/latitude values were validated in previous methods,
     *       and it doesn't affect calculations (just output data) test tripDistance
     *
     * Results last element must be filled with data from distanceLeft.
     * It means: results array distanceLeft element must be like provided as long as it is valid value
     *
     * In this case result must be equal to (distanceFromHome - providedArgument)
     *
     * @return void
     */
    public function testTripDistanceValidValue()
    {
        $usedIndexes = [0, 1, 2];
        $breweriesData = dataFactory(3, 0);
        $distanceLeft = '363.11';
        $tripDistance = '2000';//'2000.11'
        $long = 10.1000;
        $lat = 11.1111;

        $result = $this->outputDataFetchingService->fetchDataForOutput(
            $usedIndexes,
            $breweriesData,
            $distanceLeft,
            $long,
            $lat,
            $tripDistance
        );

        $this->assertEquals($tripDistance, $result['maxTripDistance']);
    }

//    private function dataFactory($count)
//    {
//        $breweriesData = [];
//        for ($i = 0; $i < $count; $i++) {
//            $breweriesData[$i]['beersCount'] = $i + 5;
//            $breweriesData[$i]['brewery'] = Brewery::find($i);
//            $breweriesData[$i]['latitude'] = 15.15489 * 7 / ($i + 1);
//            $breweriesData[$i]['longitude'] = 75.05489 * 3 / ($i + 1);
//            $breweriesData[$i]['distance'] = 10 * $i;
//            $breweriesData[$i]['distanceFromHome'] = 150 * $i;
//        }
//        return $breweriesData;
//    }
}
