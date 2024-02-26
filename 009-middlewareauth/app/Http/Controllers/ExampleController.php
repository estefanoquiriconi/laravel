<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{

    //Middleware en controlador -> Cuidado con las peticiones circulares
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index()
    {
        return response()->json("Hello World", 200);
    }

    public function noAccess()
    {
        return response()->json("No access", 200);
    }
}
