<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrondEndController extends Controller
{
    public function userspage()
    {
        $user=\App\Models\User::all();
        return $user;
        //return view('frondend/userpage',compact('user'));
    }
}
