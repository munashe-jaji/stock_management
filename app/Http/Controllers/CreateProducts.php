<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateProducts extends Controller
{
    public function index()
    {
        return view("pages.createproducts");
    }
}
