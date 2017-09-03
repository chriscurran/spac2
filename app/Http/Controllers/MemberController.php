<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Member;
use \Carbon\Carbon;

class MemberController extends Controller
{

    public function members() {

        $members = User::where('membership_type', "!=", "x")
               ->orderBy('name', 'asc')
               ->get();

        return view('member.list')->with("members", $members);
    }

    public function resources() {
    	return view('resources');
    }


    public function membershipInfo() {
    	return view('member.membership');
    }
    

    public function joinRenew() {
    	$user = Auth::user();
    	if ($user === null)
    		$user = new User;
    	return view('member.joinRenew')->with("user", $user);
    }


    public function edit() {

        $user = Auth::user();
        if ($user === null)
            $user = new User;

    	// return view('placeholder')->with("msg","");
        return view('member.edit')->with("user", $user);
    }

    public function save(Request $request) {

        $data = $request->all();
        // dd($data);

        $user = Auth::user();

        if ($data['minor1_age']!==null) 
            $data['minor1_age'] = Carbon::createFromFormat('m-d-Y', $data['minor1_age'])->format("Y-m-d");
        if ($data['minor2_age']!==null) 
            $data['minor2_age'] = Carbon::createFromFormat('m-d-Y', $data['minor2_age'])->format("Y-m-d");
        if ($data['minor3_age']!==null) 
            $data['minor3_age'] = Carbon::createFromFormat('m-d-Y', $data['minor3_age'])->format("Y-m-d");
        if ($data['minor4_age']!==null) 
            $data['minor4_age'] = Carbon::createFromFormat('m-d-Y', $data['minor4_age'])->format("Y-m-d");
        if ($data['minor5_age']!==null) 
            $data['minor5_age'] = Carbon::createFromFormat('m-d-Y', $data['minor5_age'])->format("Y-m-d");
        // dd($data);

        // $data['minor1_age'] = Carbon::createFromFormat('m-d-Y', $data['minor1_age'])->toDateTimeString();

        $user->fill($data);
        $user->save();

        return redirect('/member/edit')->with("user", $user);
    }



/*
    public function setUserPasswords() {
        foreach(Member::all() as $member) {
            $user = User::where('email', $member->email)->first();
            $user->setPasswordAttribute($member->pw);
            $user->update();
        }
        return view('placeholder')->with("msg","woop2");
    }



    public function copyMemberTableToUsers() {
        foreach(Member::all() as $member) {
            $user = new User;

            if ($member->email === 'chris@planetcurran.com') {
                $user = User::find(1);
            }
            
            $user->name = $member->name;
            $user->email = $member->email;
            $user->addr = $member->addr;
            $user->city = $member->city;
            $user->state = $member->state;
            $user->zip = $member->zip;

            $user->phone1 = $member->phone1;
            $user->phone2 = $member->phone2;
            $user->cell = $member->cell;

            $user->joined = $member->joined;
            $user->renew = $member->renew;

            $user->newsletter_delivery = $member->newsletter_delivery;
            $user->membership_type = $member->membership_type;

            $user->office1 = $member->office1;
            $user->office2 = $member->office2;
            $user->office3 = $member->office3;
            $user->office1sort = $member->office1sort;
            $user->office2sort = $member->office2sort;
            $user->office3sort = $member->office3sort;

            $user->auth = $member->auth;
            $user->flgs = $member->flgs;

            $user->password = "";
            if ($member->email === 'chris@planetcurran.com') {
                $user->update();
            }
            else {
                $user->save();
            }

        }
        return view('placeholder')->with("msg","woop");
    }
*/


}
