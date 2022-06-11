<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('https://ya.ru/')
                     ->pause(3000)
                    ->type('.mini-suggest__input', 'ололо')
                    ->pause(1000)
                    ->clickAndWaitForReload('.search2__button')
                    ->pause(1000)
                    // ->assertSee('Laravel')
                    ->scrollIntoView('.pager__items')
                    ->pause(1000)
                    ->screenshot('test');
        });
    }
}
