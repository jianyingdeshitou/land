<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteAuthTest extends TestCase
{
    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegister()
    {
        $this->registerAUser('Taylor', '123456', '123456');
        $this->registerAUser('Taylor2', '123456', '123456');

    }

    private function registerAUser($name, $password, $password_confirmation)
    {
        $this->visit(route('auth.register'))
            ->see('Register')
            ->type($name, 'name')
            ->type($password, 'password')
            ->type($password_confirmation, 'password_confirmation')
            ->press('Register')
            ->seePageIs('/');
    }
}
