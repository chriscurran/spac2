<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;


class AdminController extends Controller
{

    public function main() {

        $members = User::where('membership_type', "!=", "x")
               ->orderBy('name', 'asc')
               ->get();

		return view('admin.main')->with("members", $members);
    }


}
