<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function showId(Request $request)
    {
        $testId = $request->id;
        $produits = ['TV','PC','PS5','Téle','Laptop'];
        // $produits = [];
        return view('welcome', compact("testId",'produits'));
    }
}
