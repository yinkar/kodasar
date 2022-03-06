<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

/**
 * Users
 */
class UserController extends Controller
{
    /**
     * Login
     *
     * @return \Illuminate\Http\Response
     */
    public function login() {
        return response()
            ->view('users.login');
    }

    /**
     * Register
     *
     * @return \Illuminate\Http\Response
     */
    public function register() {
        $users = User::all();

        return response()
            ->view('users.register');
    }

    /**
     * Save user
     *
     * @param Request $request
     * @return void
     */
    public function save(Request $request) {
        $userValidation = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:50|unique:users,username',
            'email' => 'email|required|max:255|unique:users,email',
            'password' => 'required|min:6|max:255',
            'gender' => 'required',
        ]);

        User::create($userValidation);

        return redirect(url('register'));
    }
}
