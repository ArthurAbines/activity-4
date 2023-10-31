<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UpdateUserController extends Controller
{
    public function index()
    {
        return view('update_form');
    }
   
    public function updateForm($id)
    {
  
        $user = User::findOrFail($id);

        return view('update_form', ['user' => $user]); 
    }

    public function update(Request $request, $id)
    {
       
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email'
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email_address' => $request->email
        ]);
        return redirect()->back();
   }
}
