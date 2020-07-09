<?php

namespace App\Http\Controllers;

use Request;

class CookingController extends Controller
{
    function foods(){
        $foods = array();

        $food = new \stdClass();
        $food->id = 0;
        $food->name = 'Borsh';
        array_push($foods, $food);

        $food = new \stdClass();
        $food->id = 1;
        $food->name = 'Gulyash';
        array_push($foods, $food);

        $food = new \stdClass();
        $food->id = 2;
        $food->name = 'Salat';
        array_push($foods, $food);

        return view('foods')->with('foods', $foods);
    }

    function ingridients(Request $request){
        $ingridients = array();

        $ingridient = new \stdClass();
        $ingridient->id = 0;
        $ingridient->name = 'Kartoshka';
        array_push($ingridients, $ingridient);

        $ingridient = new \stdClass();
        $ingridient->id = 1;
        $ingridient->name = 'Kapusta';
        array_push($ingridients, $ingridient);

        $ingridient = new \stdClass();
        $ingridient->id = 2;
        $ingridient->name = 'Zapravka';
        array_push($ingridients, $ingridient);

        return view('ingridients')->with('ingridients', $ingridients);
    }
}