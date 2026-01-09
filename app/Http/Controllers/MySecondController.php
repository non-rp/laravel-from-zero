<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MySecondController extends Controller
{
    public function index(): string
    {
        return 'My Second Controller';
    }
}
