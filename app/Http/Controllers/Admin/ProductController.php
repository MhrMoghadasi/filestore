<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function list ()
    {
        return view('Admin.Users.index');
    }

    public function add ()
    {
        return view('Admin.Users.index');
    }

    public function update()
    {
        return view('Admin.Users.index');
    }
}
