<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;


class APIController extends Controller
{

    public function getMembers() {

    	$request = request();    	
    	$key = $request->input('key');
    	if ($key !== env("API_KEY","123")) {
    		return response()->json("Invalid access");
    	}

        $members = User::where('membership_type', "!=", "x")
               ->orderBy('name', 'asc')
               ->get();

        return response()->json($members);
    }

}
