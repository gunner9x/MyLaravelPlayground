<?php
/**
 * Created by PhpStorm.
 * User: PC-191231
 * Date: 11/06/2020
 * Time: 2:24 SA
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function uriTest(Request $request){

        $uri = $request->path();

        echo $uri;

        if ($request->is('admin/*')) {

            echo '<br>Admin path';
        }
        if ($request->is('category/laravel-nang-cao')) {
            echo '<br>Đường dẫn bạn vừa truy nhập đúng là mysite-dev.com/' . $request->path();
        }


        $url = $request->url();

        echo '<br>Đường dẫn đầy đủ: ' . $url;


        $full_url = $request->fullurl();

        echo '<br>Đường dẫn đầy đủ cả query string: ' . $full_url;

        if ($request->isMethod('post')) {
            echo '<br>POST request';
        } else {
            echo '<br>GET request';
        }
    }

    public function getUserInfo(Request $request){
        $ip_address = $request->ip();
        echo '<br>Địa chỉ IP người dùng: ' . $ip_address;

        $server_address = $request->server('SERVER_ADDR');
        echo '<br>Địa chỉ IP máy chủ: ' . $server_address;

        $url_referer = $request->server('URL_REFERER');
        echo '<br>Đường dẫn xuất phát: ' . $url_referer;

        $user_agent = $request->header('User-Agent');
        echo '<br> Thông tin về trình duyệt:' . $user_agent;
    }
}
