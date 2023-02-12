<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function root()
    {
        return redirect()->route('dasboard.index');
    }

    public function masterLayout()
    {
        return view("layouts.master");
    }
}
