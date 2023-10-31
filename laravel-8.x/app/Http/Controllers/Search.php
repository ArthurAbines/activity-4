<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;
use App\Models\User;

class Search extends Controller
{
    public function displayUser($id){
        $fetchuser = user::find($id);
        if (!$fetchuser) {
            return "User not found";
        }
        return view('retrived_form', ['user' => $fetchuser]);
    }

}
