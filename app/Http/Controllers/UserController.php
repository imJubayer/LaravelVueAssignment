<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUser(User $user)
    {
        $user = User::all();
        return $user;
    }

    public function postUser(Request $request, User $user)
    {
        // print_r($request->all());
        $data = $request->all();
        // User::create($data);
        return $data;
        // return $request;
    }
}
