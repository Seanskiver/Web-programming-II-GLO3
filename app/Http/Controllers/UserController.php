<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    // Gets one user.
    // Used to show profile information
    public function __construct() {
        $this->middleware('auth', ['except' => ['register']]);
    }
    
    public function getOne($id) {
        $user = new User;
        $user = $user->find($id);
        
        return view('profile', compact('user'));
    }
    
    
    
}
