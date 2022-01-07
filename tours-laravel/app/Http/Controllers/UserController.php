<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RuleRegister;
use App\Http\Requests\RuleLogin;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('users.login');
    }

    public function register(){
        return view('users.register');
    }

    public function postRegister(RuleRegister $request) {
        $user = new User;
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        echo '
            <script>
                alert("Register successful!");
                window.location.assign("/login");
            </script>
        ';
    }


    public function postLogin(RuleLogin $request) {
        $login = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if (Auth::attempt($login)) {
            $user = Auth::user();
            Session::put('user', $user);
            echo '
                <script>
                    alert("Login successful!");
                    window.location.assign("/index");
                </script>
            ';
        } else {
            echo '
                <script>
                    alert("Login failed! Please check your account credentials again");
                    window.location.assign("/login");
                </script>
            ';
        }
    }

    public function logout() {
        echo '
                <script>
                    alert("Logged out!");
                </script>
            ';
        Session::forget('user');
        return redirect('/index');
    }
}
