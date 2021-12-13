<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function calculate(Request $request)
    {
        $distance = $request->distance;
        $price_one = 100;
        $price_two = 80;
        $price_three = 70;

        $distance_one = 100;
        $distance_two = 300;

        if ($distance <= $distance_one) {

            $total = $price_one * $distance;

        } elseif ($distance > $distance_one && $distance <= $distance_two) {

            $total = ($price_one * $price_one) + (($distance - $distance_one) * $price_two);

        } elseif ($distance > $distance_two) {

            $total = ($price_one * $distance_one) +
                (($distance_two - $distance_one) * $price_two) +
                (($distance - $distance_two) * $price_three);

        }

        return view('welcome', compact('total'));

    }
}
