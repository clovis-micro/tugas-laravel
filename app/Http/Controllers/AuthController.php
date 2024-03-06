<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function signup() {
        return view('register');
    }

    public function register(Request $request) {
        $namaDepan = $request['first'];
        $namaBelakang = $request['last'];

        return view('signup', ['depan' => $namaDepan, 'belakang' => $namaBelakang]);

    }
}
