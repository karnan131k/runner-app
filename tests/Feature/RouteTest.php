<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_runner_get_formdata()
    {
        $response = $this->get('http://localhost/api/v1/runner/1/form-data');
        $response->assertStatus(200);
    }
}
