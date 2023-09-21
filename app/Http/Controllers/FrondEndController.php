<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrondEndController extends Controller
{
    public function userspage()
    {
        $user=\App\Models\User::where('status',1)->get();
        
        return view('frondend/userpage',compact('user'));
    }
}
