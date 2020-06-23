<?php
/**
 * Created by PhpStorm.
 * User: PC-191231
 * Date: 10/06/2020
 * Time: 5:18 CH
 */

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
      // TODO something
        $a = 'Test';
        return view('welcome');
    }


    public function hello($year,$name=null){
        $hello_string = '';
        if($name == null){
            $hello_string = 'Hello world' .$year;
        }elseif ($name == 'Vadim'){
            $hello_string = 'Hello world, Vadim Blyat!';
        }else{
            $hello_string = 'Hello world, ' .$year  ."And hello to you too," .$name;

        }
        return view('hello-world')->with('hello_str',$hello_string);
    }

    public function welcome(){
        return view('hello-world')->with('hello_str','Hello world');
    }
}
