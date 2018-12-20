<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UrController extends Controller
{
    /**
     * Точка входа в приложение
     *
     * @param  Request $request экземпляр текущего HTTP-запроса
     * @return View             представление
     */
    public function index(Request $request)
    {
        $a = $request['a'];
        $b = $request['b'];
        $c = $request['c'];
        $operation = $request['operation'];
        $result = null;
        switch ($operation) {
            case 'UrController':
                $result = $this->UrController($a, $b, $c, $d, $solutions_count);
                break;
        }

        if (isset($request['a']) && isset($request['b']) && isset($request['c']))
        {
            $d = ($b * $b) - (4 * $a * $c);
            if ($d > 0)
            {
                $solutions_count = 2;
                $x1 = ((-1 * $b) + sqrt($d))/(2 * $a);
                $x2 = ((-1 * $b) - sqrt($d))/(2 * $a);
            }
            else
            {
                if ($d == 0)
                {
                    $solutions_count = 1;
                    $x = ((-1) * ($b))/($a * 2);
                }
                if ($d < 0)
                {
                    $solutions_count = 0;
                }
            }
        }
        return view('index', compact('a', 'b', 'c', 'solutions_count', 'x1', 'x2', 'x'));
    }
}
