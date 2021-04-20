<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yoeunes\Toastr\ToastrServiceProvider;
use DB;


/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function saveContact(Request $request){
    	$contactName = $request->input('contactName');
    	$contactPhone = $request->input('contactPhone');
    	$contactEmail = $request->input('contactEmail');
    	$contactMessage = $request->input('contactMessage');

    	DB::table('contact_data')->insert([
    		'contactName' => $contactName, 'contactPhone' => $contactPhone, 'contactEmail' => $contactEmail, 'contactMessage' => $contactMessage
    	]);

    	toastr()->success('data submited');
       	return redirect('/');
    }

}
