<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class Register extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->type('name','ovin')
                    ->type('email','ovin@ovin.com')
                    ->type('password','12345678')
                    ->type('password_confirmation','12345678')
                    ->press('Register')
                    ->assertPathIs('/home');
        });
    }
}
