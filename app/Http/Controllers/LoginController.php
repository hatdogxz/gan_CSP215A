<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(): View{
        return view('auth.login');
    }
    public function auth (Request $request): void{
        echo "login logic";
    }
}