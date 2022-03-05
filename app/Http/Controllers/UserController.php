<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

/**
 * Users
 */
class UserController extends Controller
{
    /**
     * Login
     *
     * @return void
     */
    public function login() {
        return view('users.login');
    }
    
    /**
     * Register
     *
     * @return void
     */
    public function register() {
        $users = User::all();

        return view('users.register');
    }

    /**
     * Save user
     *
     * @param Request $request
     * @return void
     */
    public function save(Request $request) {
        $user = User::create([
            'name' => $request->input('name'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'gender' => $request->input('gender')
        ]);

        if (!!$user->save()) {
            return redirect(url('register'));
        }
    }
}
