<?php

namespace Tests\Unit;

use App\Services\OutputDataFetchingService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UnsetSameBeerTest extends TestCase
{
    /**
     * Testing unsetSameBeer. Parameter given: null
     *
     * Result must be null
     *
     * @return void
     */
    public function testNullAsArgument()
    {
        $outputDataFetchingService = new OutputDataFetchingService();
        $result = $outputDataFetchingService->unsetSameBeer(null);
        $this->assertNull($result);
    }

    /**
     * Testing unsetSameBeer. Parameter given: Array of same elements
     *
     * Result must be array with one element: 'beer1'
     *
     * @return void
     */
    public function testAllSameInArray()
    {
        $outputDataFetchingService = new OutputDataFetchingService();
        $beer = ['name' => 'beer1'];
        $element['beer'] = [$beer, $beer, $beer];
        $array[0] = $element;
        $array[1] = $element;
        $array = $outputDataFetchingService->unsetSameBeer($array);
        $this->assertEquals($array['uniqueBeer'], ['beer1']);
    }

    /**
     * Testing unsetSameBeer. Parameter given: Array of different elements
     *
     * Result must be array (all elements): ['beer1','beer2','beer3','beer4','beer5']
     *
     * @return void
     */
    public function testAllDifferentInArray()
    {
        $outputDataFetchingService = new OutputDataFetchingService();
        $beer1 = ['name' => 'beer1'];
        $beer2 = ['name' => 'beer2'];
        $beer3 = ['name' => 'beer3'];
        $beer4 = ['name' => 'beer4'];
        $beer5 = ['name' => 'beer5'];
        $element1['beer'] = [$beer1, $beer2, $beer3];
        $element2['beer'] = [$beer4, $beer5];
        $array[0] = $element1;
        $array[1] = $element2;
        $array = $outputDataFetchingService->unsetSameBeer($array);
        $this->assertEquals($array['uniqueBeer'], ['beer1', 'beer2', 'beer3', 'beer4', 'beer5']);
    }

    /**
     * Testing unsetSameBeer. Parameter given: Array with some duplicates
     *
     * Result must be array: ['beer1','beer2','beer3','beer4','beer5']
     *
     * @return void
     */
    public function testMixedElementsInArray()
    {
        $outputDataFetchingService = new OutputDataFetchingService();
        $beer1 = ['name' => 'beer1'];
        $beer2 = ['name' => 'beer2'];
        $beer3 = ['name' => 'beer3'];
        $beer4 = ['name' => 'beer4'];
        $beer5 = ['name' => 'beer5'];
        $element1['beer'] = [$beer1, $beer2, $beer3];
        $element2['beer'] = [$beer4, $beer5];
        $element3['beer'] = [$beer2, $beer5];
        $array[0] = $element1;
        $array[1] = $element2;
        $array[2] = $element3;
        $array = $outputDataFetchingService->unsetSameBeer($array);
        $this->assertEquals($array['uniqueBeer'], ['beer1', 'beer2', 'beer3', 'beer4', 'beer5']);
    }
}
