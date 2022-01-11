<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.admin-index');
    }
    
    public function bills()
    {
        return view('admin.admin-bills');
    }

    public function tours()
    {
        return view('admin.admin-tours');
    }

    public function types()
    {
        return view('admin.admin-types');
    }
}
