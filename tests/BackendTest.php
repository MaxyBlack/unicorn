<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BackendTest extends TestCase
{
    /**
     * @return void
     */
    public function testAdminLoginPage()
    {
        $this->visit('/admin')
            ->see('Admin Control Panel');
    }
}
