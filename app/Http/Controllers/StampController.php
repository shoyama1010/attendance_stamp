<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests\StampRequest;

class StampController extends Controller
{

    // public function index()
    // {
    //     return view('index');
    // }

    public function index()
    {
        $name = '福場凛太郎';
        return view('index', compact('name'));
    }
}
