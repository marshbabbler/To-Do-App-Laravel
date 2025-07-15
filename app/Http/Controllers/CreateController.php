<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\validator;

use App\Models\Task;

class CreateController extends Controller
{
    public function index() {
        return view('create');
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:300',
        ]);

        Task::create([

            'title' => $validateData['title'],
            'description' => $validateData['description']
        ]);

        return redirect()->back()->with('success', 'Your Task has been created...');
    }
}
