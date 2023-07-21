<?php

namespace App\Http\Controllers;

use Illuminate\http\Request;


class firstController extends Controller
{
    public function firstFunction(){
        $name = 'Calling';
        $age = 25;

        return view('firstPage', compact('name','age'));
    }
    public function store(Request $request) {
        return 'success';
    }
}
