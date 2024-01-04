<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function welcomeMessage($name = "World") {
        $message = '<p>Hello, ' . $name . '</p>';
        return view ('hello.welcome', [
            'message' => $message,
        ]);

    }
}
