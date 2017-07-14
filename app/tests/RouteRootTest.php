<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteRootTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRouteRoot()
    {
        $this->visit('/')
             ->see('guest')
             ->seeLink('Login')
             ->seeLink('Register');
    }
}
