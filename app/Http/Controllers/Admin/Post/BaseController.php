<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Services\Post\Service;

abstract class BaseController extends Controller
{
    public function __construct(
        protected Service $service)
    {}
}
