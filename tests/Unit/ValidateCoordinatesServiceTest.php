<?php

namespace Tests\Unit;

use App\Services\ValidateCoordinatesService;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ValidateCoordinatesServiceTest extends TestCase
{
    private $validateCoordinatesService;

    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->validateCoordinatesService = new ValidateCoordinatesService();
    }

    /**
     * Tests valid positive latitude data
     *
     * @return void
     */
    public function testValidPositiveLatitudeData()
    {
        $latitude = 10;
        $result = $this->validateCoordinatesService->isLatitudeValid($latitude);
        $this->assertTrue($result);
    }

    /**
     * Tests invalid positive latitude data
     *
     * @return void
     */
    public function testInvalidPositiveLatitudeData()
    {
        $latitude = 1000;
        $result = $this->validateCoordinatesService->isLatitudeValid($latitude);
        $this->assertFalse($result);
    }

    /**
     * Tests valid negative latitude data
     *
     * @return void
     */
    public function testValidNegativeLatitudeData()
    {
        $latitude = -10;
        $result = $this->validateCoordinatesService->isLatitudeValid($latitude);
        $this->assertTrue($result);
    }

    /**
     * Tests invalid negative latitude data
     *
     * @return void
     */
    public function testInvalidNegativeLatitudeData()
    {
        $latitude = -1000;
        $result = $this->validateCoordinatesService->isLatitudeValid($latitude);
        $this->assertFalse($result);
    }

    /**
     * Tests valid positive longitude data
     *
     * @return void
     */
    public function testValidPositiveLongitudeData()
    {
        $latitude = 10;
        $result = $this->validateCoordinatesService->isLongitudeValid($latitude);
        $this->assertTrue($result);
    }

    /**
     * Tests invalid positive longitude data
     *
     * @return void
     */
    public function testInvalidPositiveLongitudeData()
    {
        $latitude = 1000;
        $result = $this->validateCoordinatesService->isLongitudeValid($latitude);
        $this->assertFalse($result);
    }

    /**
     * Tests valid negative longitude data
     *
     * @return void
     */
    public function testValidNegativeLongitudeData()
    {
        $latitude = -10;
        $result = $this->validateCoordinatesService->isLongitudeValid($latitude);
        $this->assertTrue($result);
    }

    /**
     * Tests invalid negative longitude data
     *
     * @return void
     */
    public function testInvalidNegativeLongitudeData()
    {
        $latitude = -1000;
        $result = $this->validateCoordinatesService->isLongitudeValid($latitude);
        $this->assertFalse($result);
    }
}
