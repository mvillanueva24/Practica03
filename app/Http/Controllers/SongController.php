<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(Request $request)
    {

    }

    public function create(Request $request)
    {

    }

    public function delete(Request $request)
    {

    }

    public function update(Request $request)
    {

    }
}
