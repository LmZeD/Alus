<?php

namespace Tests\Unit;

use App\Services\OutputDataFetchingService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OutputDataFetchingTest extends TestCase
{
    /**
     * Testing fetchDataForOutput with null parameters
     *
     * Result must be null
     *
     * @return void
     */
    public function testAllNull()
    {
        $outputDataFetchingService = new OutputDataFetchingService();
        $result = $outputDataFetchingService->fetchDataForOutput(
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
     * Result must be NOT empty (must be data selected using indexes from usedIndexes array)
     *
     * @return void
     */
    public function testAllNullExceptUsedIndexes()
    {
        $outputDataFetchingService = new OutputDataFetchingService();
        $usedIndexes=[0, 1, 2];
        $result = $outputDataFetchingService->fetchDataForOutput(
            $usedIndexes,
            null,
            null,
            null,
            null,
            null
        );
        $this->assertNotEmpty($result);
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
        $outputDataFetchingService = new OutputDataFetchingService();
        $usedIndexes=[0, 1, 2];
        $breweriesData = [];
        for ($i = 0; $i < 3; $i++) {
            $breweriesData[$i]['beersCount'] = $i + 5;
            $breweriesData[$i]['breweryId'] = $i;
            $breweriesData[$i]['latitude'] = 15.05489 * 7 / ($i + 1);
            $breweriesData[$i]['longitude'] = 75.05489 * 3 / ($i + 1);
            $breweriesData[$i]['distance'] = 10 * $i;
            $breweriesData[$i]['distanceFromHome'] = 150 * $i;
        }

        $result = $outputDataFetchingService->fetchDataForOutput(
            $usedIndexes,
            $breweriesData,
            null,
            null,
            null,
            null
        );

        $this->assertEquals(
            $result[count($usedIndexes)]['distance'],
            $breweriesData[end($usedIndexes)]['distanceFromHome']
        );
    }
}
