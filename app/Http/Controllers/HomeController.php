<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show()
    {
        return to_route('hm');
    }

    public function user()
    {
        return to_route('user',['name'=>'Arnab']);
    }
}
