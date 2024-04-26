<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function show() {
        return view('pages.main');
    }

    public function oil() {
        return view('pages.oil');
    }

    public function accum() {
        return view('pages.accum');
    }

    public function filters() {
        return view('pages.filters');
    }

    public function chemistry() {
        return view('pages.chemistry');
    }
    public function about() {
        return view('pages.about');
    }
}
