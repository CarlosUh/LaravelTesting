<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MathTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }
	
	/**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
         $response = $this->get('/');

        $response->assertStatus(200);
    }
	
	/**
     * A basic test example.
     *
     * @return void
     */
    public function testSumaR()
    {
         $response = $this->get('/');

        $response->assertStatus(200);
    }
	
	/**
     * A basic test example.
     *
     * @return void
     */
    public function testSuma()
    {
        $response = $this->withHeaders([
        //    'X-Header' => 'Value',
        ])->json('GET', '/math/suma', ['a' => 1,'b'=>1]);

        $response
            ->assertJson([
                'resultado' => 2,
            ]);
    }
}
