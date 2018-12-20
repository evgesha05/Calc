<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Http\Controllers\UrController;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UrControllerTest extends TestCase
{
    /**
     * Базовый тест
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
    * Объект класса UrController
    * @var UrController
    */
    private $calc;

    /**
    * Метод который вызывается перед каждым тестом
    * @return void
    */
    public function setUp()
    {
        // создание нового экземпляра класса UrController
        $this->calc = new UrController;
    }

    /**
    * Метод который вызывается после каждого теста
    * @return void
    */
    public function tearDown()
    {
        // удаление экземпляра класса CalcController
        $this->calc = null;
    }

     /**
     * Тестирование UrController
     *
     * @dataProvider UrControllerProvider
     *
     * @param double|integer $a первый операнд
     * @param double|integer $b второй операнд
     * @param double|integer $c третий операнд
     * @param double|integer $expected ожидаемый результат
     * @return void
     */
    public function testUrController($a, $b, $c, $d, $solutions_count, $expected)
    {
        $this->assertEquals($expected, $this->calc->UrController($a, $b, $c, $d, $solutions_count));
    }

    /**
     * Провайдер данных для testUrController
     *
     * @return array набор данных для теста
     */
    public function UrControllerProvider()
    {
        return [
            'x^2 + 2x + 3' => [1, 2, 3, -8, 0],
            '2x^2 + 4x + 2' => [2, 4, 2, 0, 1, -1],
            '-x^2 + 2x + 3' => [-1, 2, 3, 16, 2, -1, 3]
        ];
    }
}
