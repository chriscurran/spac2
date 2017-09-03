<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Mail\ContactUs;

class ContactUsController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $mode = "new";
        $user = Auth::user();
        if ($user === null)
            $user = new User;

        return view('contactUs', compact('mode','user'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required',
        ]);

        //
        // $data = (object)request()->all();
        $data = (object)$request->all();

        \Mail::to($data)->send(new ContactUs($data));

        return redirect('contacted')->with(["mode" => "complete"]);
    }


    /**
     * Contact Us is complete
     *
     * @return \Illuminate\Http\Response
     */
    public function contacted()
    {   
        $mode = \Session::get('mode');
        if ($mode === null) {
            return redirect('contact')->with(["mode" => "new"]);       
        }

        $mode = "complete";
        $user = Auth::user();
        if ($user === null)
            $user = new User;

        return view('contactUs', compact('mode','user'));

    }


}
