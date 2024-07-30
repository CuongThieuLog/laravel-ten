<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    public function index() {
        $data = [
            'name' => 'John KKK',
            'email' => 'johndoe@example.com',
            'role' => 'admin'
        ];

        return response()->json($data);
    }
}