<?php

namespace Tests\Unit;

use Illuminate\Http\Request;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Controllers\TripController;

class MakeATripTest extends TestCase
{

    public function testNullRequest()
    {
        $trip=new TripController();
        $this->assertNotNull($trip);
    }
}
