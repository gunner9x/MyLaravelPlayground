<?php
/**
 * Created by PhpStorm.
 * User: PC-191231
 * Date: 12/06/2020
 * Time: 2:30 CH
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginTestController extends Controller
{
    public function login()
    {
        return view('logintest');
    }

    public function check(Request $request)
    {
        $data = [
        'username'  => $request->input('username'),
        'password'  => $request->input('password'),
        ];
        if (Auth::attempt($data)){
            return view('hello-world')->with(['hello_str' => '\'s BEEG Dashboard']);
        }else {
            return view('logintest')->with(['failure' => 'Wrong username or password!']);
        }
    }
}
