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
             ->seeLink('Register')
             ->click('Register')
             ->seePageIs('/register');

        $this->visit('/')
             ->seeLink('Login');
    }
}
