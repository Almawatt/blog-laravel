<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {

        $credentials = [
            'username' => $request['nome'],
            'password' => $request['senha'],
        ];


        if (Auth::attempt($credentials)) {
           return view('dashboard');
        } else {
            dd('Error');
        }
    }
}
