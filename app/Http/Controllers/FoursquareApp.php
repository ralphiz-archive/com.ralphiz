<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FoursquareApp extends Controller
{
    public function index()
    {
        return view('projects.4sq.index');
    }
}
