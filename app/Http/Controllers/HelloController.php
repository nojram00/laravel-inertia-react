<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\User;

class HelloController extends Controller
{

    public function index(){
        $user = User::find(1);

        // dd($user->name);
        return Inertia::render('Hello', [
            'name' => $user->name
        ]);
    }
}
