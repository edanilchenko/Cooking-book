<?php

namespace App\Http\Controllers;

use App\Food;
use App\Ingridient;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;


class CookingController extends Controller
{
    function foods(){
        $foods = Food::all();

        return view('foods')->with('foods', $foods);
    }

    function ingridients(Request $request){
        $request_foods = $request->input('foods');
        if(!empty($request_foods)){
            $ingridients = new Collection();
            foreach($request_foods as $food_id => $value){         
                $food = Food::find($food_id);
                $ingridients = $ingridients->merge($food->ingridients);
            }
        }
        else{
            $ingridients = new Collection();
        }

        return view('ingridients')->with('ingridients', $ingridients);
    }
}