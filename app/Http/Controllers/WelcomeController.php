<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        return view('welcome')->with([
            'files' => File::all(),
        ]);
    }
}
