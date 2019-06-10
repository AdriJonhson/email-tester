<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakeMenuController extends Controller
{
    public function menu1()
    {
        return view('admin.fakemenu.menu1');
    }

    public function menu2()
    {
        return view('admin.fakemenu.menu2');
    }

    public function menu3()
    {
        return view('admin.fakemenu.menu3');
    }
}
