<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // $users = User::where('age', '>=', 30)->get();
        // $users = User::where('age', '>=', 30)->orderBy('age', 'asc')->get();
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function create()
    { 
        // $user = new User();
        // $user->name = "Estéfano";
        // $user->email = "demo@example.com";
        // $user->password = Hash::make(123);
        // $user->age = 25;
        // $user->address = "Calle demostración 12";
        // $user->zip_code = 2909090;
        // $user->save();

        User::create([
            "name" => "Marcelo",
            "email" => "marcel@example.com",
            "password" => Hash::make(123),
            "age" => 45,
            "address" => "Avenida prueba",
            "zip_code" => 92939291,
        ]);

        
        User::create([
            "name" => "Alejandro",
            "email" => "aleja@example.com",
            "password" => Hash::make(123),
            "age" => 16,
            "address" => "Calle 123",
            "zip_code" => 7645612,
        ]);

        return redirect()->route('user.index');

    }
}
