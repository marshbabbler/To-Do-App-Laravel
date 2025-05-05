<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index() {
        $title = 'This is my Title';
        $name = 'Ram';
        // $isAdmin = True;
        $collection = [
            [
                'title' => 'First Post',
                'body' => 'This is the body of the first post.',
            ],
            [
                'title' => 'Second Post',
                'body' => 'This is the body of the second post.',
            ],
            [
                'title' => 'Third Post',
                'body' => 'This is the body of the third post.',
            ],
            [
                'title' => 'Fourth Post',
                'body' => 'This is the body of the fourth post.',
            ],
        ];
        return view('create', compact('title', 'name', 'collection'));
    }
}
