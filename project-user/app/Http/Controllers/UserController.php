<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.add');
    }

    public function addAction(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required',
            'hobbies' => 'required'
        ]);
        // dd($request);

        $validated['hobbies'] = json_encode($request->hobbies);
        User::create($validated);
        return redirect()->route('userAdd')->with('success', 'User has been Added successfully.');
    }

    public function list()
    {
        $userData = user::all();
        return view('user.list', compact('userData'));
    }
}
