<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost(){
        $response= Http::get('http://jsonplaceholder.typicode.com/posts');
        return $response->json();
    }
}
