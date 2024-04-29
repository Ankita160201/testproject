<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {

        return view('admin.registration');
    }

    public function registrationAction(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);


        $validated['password'] = Hash::make($request->password);
        Admin::create($validated);
        return redirect()->route('login')->with('success', 'Admin has been Added successfully.');
    }

    public function login()
    {
        return view('admin.login');
    }

    public function loginAction(Request $request)
    {
        $adminData = Admin::where('email', $request->email)->first();
        // print_r($adminData->email);
        // exit;
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (!empty($adminData->email)) {
            // dd($adminData->password);
            if (Hash::check($request->password, $adminData->password) == 'true') {
                // $request->session()->set('user.teams', 'developers
                // Session::push('user', [
                //     'id' => $adminData->id,
                //     'name' => $adminData->name,
                //     'username' => $adminData->username,
                //     'email' => $adminData->email
                // ]);
                return redirect()->route('dashboard')->with('success', 'Admin has been Logged-In successfully.');
            } else {
                return redirect()->route('login')->with('danger', 'password not match')->withInput();
            }
        } else {
            return redirect()->route('login')->with('danger', 'Email not registred')->withInput();
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
