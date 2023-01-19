<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function show()
    {
        if(!auth()->check()) {
            return view('welcome');
        } else {
            
         

          /*   $products = Product::latest()
            ->take(5)
            ->get(); */

            $user= Auth::user();

            return view('dashboard',
        [
            //'products' => $products,
            'user' => $user,
        ]);
        }
    }
}
