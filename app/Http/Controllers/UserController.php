<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

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
     * Start user session
     *
     * @return void
     */
    public function session(Request $request) {
        if (auth()->attempt([
            'username' => $request->username,
            'password' => $request->password
        ])) {
            return redirect(url('/'));
        }

        throw ValidationException::withMessages([
            'username' => 'Login error.'
        ]);
    }

    /**
     * Register
     *
     * @return \Illuminate\Http\Response
     */
    public function register() {
        return response()
            ->view('users.register');
    }

    /**
     * Save user
     *
     * @return void
     */
    public function save() {
        $userValidation = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|min:3|max:50|unique:users,username',
            'email' => 'email|required|max:255|unique:users,email',
            'password' => 'required|min:6|max:255',
            'gender' => 'required',
        ]);

        $user = User::create($userValidation);
        $user->markEmailAsVerified();

        session()->flash('success', 'Registration successful.');

        auth()->login($user);

        return redirect(url('/'));
    }

    /**
     * Logout
     *
     * @return void
     */
    public function logout() {
        auth()->logout();

        return redirect(url('/'));
    }

    /**
     * List users
     *
     * @return void
     */
    public function list() {
        $users = cache()
            ->remember(
                'users',
                now()->addMinutes(1),
                fn () => User::all()
            );

       return response()
           ->view('users.list', compact('users'));
    }

    /**
     * User profile
     *
     * @param User $user
     * @return void
     */
    public function profile(User $user) {
        return response()
                ->view('users.profile', compact('user'));
    }
}
