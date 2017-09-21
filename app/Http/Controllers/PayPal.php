<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\User;


class PayPal extends Controller
{

    public function get(Request $request) {

		return view('members');
    }


    public function paypal_post(Request $request) {

	   	// First we fetch the Request instance
		$instance = $request->instance();
    	// dd($instance);
		
		// Now we can get the content from it
		$content = $instance->getContent();


  //       $user = Auth::user();
  //       if ($user === null)
  //           $user = new User;
		// Log::info('USER: '.$user->toJson());

		$post_array = explode('&', $content);

		$myPost = array();
		foreach ($post_array as $keyval) {
			$keyval = explode ('=', $keyval);
			if (count($keyval) == 2)
				$myPost[$keyval[0]] = urldecode($keyval[1]);
		}

		Log::info('POST: '.json_encode($myPost));

		// Log::info('POST: '.$content);
		// dd($content);
    }


}
