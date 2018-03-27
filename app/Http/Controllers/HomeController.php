<?php

namespace App\Http\Controllers;

use App\Stadium;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        return view('home.index');
    }

    public function data() {
        $stadium = Stadium::with(['pictures', 'dishes'])->find(1);
        return response()->json($stadium);
    }
}
