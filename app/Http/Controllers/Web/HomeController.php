<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        return View('pre-login.pages.Home');
    }
}
