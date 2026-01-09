<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyFirstController extends Controller
{
    public function index(): string
    {
        return 'My First Controller';
    }
}
