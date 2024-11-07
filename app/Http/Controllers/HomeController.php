<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('adminDashboard', ['title' => 'home']); // pastikan ada view 'home.blade.php' di resources/views
    }
}
