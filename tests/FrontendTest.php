<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FrontendTest extends TestCase
{
    /**
     * @return void
     */
    public function testWelcomePage()
    {
        $this->visit('/')
             ->see('Unicorn');
    }
}
