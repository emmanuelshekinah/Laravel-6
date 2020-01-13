<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Shops;
class emmanuel extends Controller
{
    public function index()
    {

        $user = User::all();
        $shops = Shops::all();
        dd($shops[0]->name);
        echo 'hello';
    }
}
