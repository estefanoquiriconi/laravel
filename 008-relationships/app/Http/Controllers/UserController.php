<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $user = User::find(1);
        return view('index', compact('user'));
    }

    public function show(User $user) : UserResource
    {
        return new UserResource($user);
    }

}
