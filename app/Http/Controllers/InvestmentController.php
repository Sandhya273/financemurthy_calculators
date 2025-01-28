<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestmentController extends Controller
{
    public function index()
    {
        return view('investment');
    }

    public function calculate(Request $request)
    {
        $request->validate([
            'investment' => 'required|numeric|min:0',
            'rate' => 'required|numeric|min:0|max:100',
            'time' => 'required|numeric|min:1',
        ]);

        $investment = $request->input('investment');
        $rate = $request->input('rate');
        $time = $request->input('time');

        $simpleInterest = ($investment * $rate * $time) / 100;
        $totalAmount = $investment + $simpleInterest;

        return view('investment', compact('simpleInterest', 'totalAmount', 'investment', 'rate', 'time'));
    }

}
