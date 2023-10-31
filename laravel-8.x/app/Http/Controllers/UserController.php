<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('create_form');
    }

    public function landing()
    {
        return view('landing',['users'=> User::all()]);
    }
    
    public function store(Request $request)
    {
        User::create([
            'first_name'    => $request->first_name,
            'last_name'     => $request->last_name,
            'email_address' => $request->email
        ]); 

        return redirect()->back();
    }

    public function updateForm($id)
    {
        // Fetch the user based on the given ID
        $user = User::findOrFail($id);

        // Pass the user data to the update_form view
        return view('update_form');
    }

    public function update(Request $request, $id)
    {
        // Validate the request data
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'
        ]);

        // Find the user by ID
        $user = User::findOrFail($id);

        // Update the user with the request data
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email
        ]);
        // Redirect back with a success message
       // return redirect()->route('user.index')->with('success', 'User updated successfully');
    }

}