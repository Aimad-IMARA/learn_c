<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class UserController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function register(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
        return "Thank you!!";
    }
}
