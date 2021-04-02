<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{


    public function calculate(Request $request) {
        $numberOne = $request->get('numberOne');
        $numberTwo = $request->get('numberTwo');
        $action = $request->get('action');

        if ($action == 'multiply') {
            $result =  $numberOne * $numberTwo;
        }
        elseif ($action == 'add') {
            $result =  $numberOne + $numberTwo;
        }
        elseif ($action == 'divide') {
            $result =  $numberOne/ $numberTwo;
        }
        elseif ($action == 'subtract') {
            $result =  $numberOne - $numberTwo;
        }

        return view('calculate',compact('result'));
    }


}
