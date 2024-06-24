<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    public function index($id)
    {
        // variables with values
        $name = "Donald Trump";
        $age = "75";

        // Associative array for data
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // Set cookie parameters
        $name = 'access_token';
        $value = '123-XYZ';
        $minutes = 1;
        $path = '/';
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httpOnly = true;

        // Create the cookie
        $cookieInfo = cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);

        // Return response with data and cookie
        return response()->json($data)->cookie($cookieInfo);
    }
}
