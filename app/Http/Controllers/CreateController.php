<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index() {
        $title = 'This is my Title';
        $name = 'Ram';
        return view('create', compact('title', 'name'));
    }
}
