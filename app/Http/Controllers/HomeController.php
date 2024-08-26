<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class HomeController extends Controller
{
    public function index()
    {
        if (Gate::allows('admin'))
        {
        }
        elseif(Gate::allows('avalia'))
        {
            // dd('avalia');
            return view('auth.index');
        }
        return view('home');
    }
}
