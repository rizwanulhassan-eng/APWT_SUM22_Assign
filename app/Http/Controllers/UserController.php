<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function viewRegister()
    {
        return view('register');
    }

    function registerUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|alpha|max:255',
            'email' => 'required|max:255|email',
            'password' => 'required|min:8|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,30}$/',
            'password_confirmation' => 'required|same:password',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('welcome');
    }

    function viewLogin()
    {
        return view('login');
    }

    function loginUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|max:255|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->password == $request->password) {
                if($user->type == 'User') {
                    return redirect()->route('dashboard.view');
                } else {
                    return redirect()->route('admin.dashboard.view');
                }
            }
            else{
                return 'Email or Password is incorrect';
            }
        }
        else{
            return 'Email or Password is incorrect';
        }
    }

    function viewDashboard()
    {
        $users = User::all();
        return view('dashboard')->with('users', $users);
    }

    function viewAdminDashboard()
    {
        $users = User::all();
        return view('admindashboard')->with('users', $users);
    }

    function viewUserDetails($id)
    {
        $user = User::find($id);
        return view('user_details')->with('user', $user);
    }
}
