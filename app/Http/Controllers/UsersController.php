<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function create()
    {
        return view('infos');
    }

    public function store(Request $request)
    {
        return 'Ton nom est ' . $request->input('nom').' et ton adresse mail est ' .$request->input('email');
    }
}
