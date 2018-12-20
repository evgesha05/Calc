<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UrTest extends DuskTestCase
{
    /**
     * Тестирование открытия приложения
     *
     * @return void
     */
    public function testIndex()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Калькулятор');
        });
    }

    /**
     * Тестирование операции контроллера $d<0
     *
     * @return void
     */
    public function testOne()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('a', '1')
                    ->type('b', '2')
                    ->type('c', '3')
                    ->press('#addition')
                    ->assertSee('Решений нет');
        });
    }

    /**
     * Тестирование операции контроллера $d=0
     *
     * @return void
     */
    public function testTho()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('a', '2')
                    ->type('b', '4')
                    ->type('c', '2')
                    ->press('#addition')
                    ->assertSee('Решение одно: -1');
        });
    }/**
     * Тестирование операции контроллера $d>0
     *
     * @return void
     */
    public function testFree()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->type('a', '-1')
                    ->type('b', '2')
                    ->type('c', '3')
                    ->press('#addition')
                    ->assertSee('Два решения: -1, 3');
        });
    }



}
