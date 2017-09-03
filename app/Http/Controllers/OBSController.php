<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;


class OBSController extends Controller
{

    public function obs() {

        $user = Auth::user();
        if ($user === null)
            $user = new User;

        return view('obs.show')->with("user", $user);
    }


}
