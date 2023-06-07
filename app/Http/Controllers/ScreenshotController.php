<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ScreenshotController extends Controller
{
    public function capture()
    {
        $html = File::get(public_path('screenshot.html'));
        return response($html)->header('Content-Type', 'text/html');
    }

    public function errorScreen()
    {
        return view('error_page');
    }

    public function formScreen()
    {
        return view('form_page');
    }
}


