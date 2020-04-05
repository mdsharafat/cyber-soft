<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\Helpers\UserSystemInfoHelper;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        $request->validate([
            'name' => 'required|max:60',
            'email' => 'required|email|max:60',
            'message' => 'required'
        ]);

        $userSystemInfoHelper   = new UserSystemInfoHelper();
        $userSystemInfo         =$userSystemInfoHelper->getBrowser();

        $contact = new Contact;
        $contact->name        = $request->name;
        $contact->email       = $request->email;
        $contact->message     = $request->message;
        $contact->platform    = $userSystemInfo['platform'];
        $contact->browser     = $userSystemInfo['name']." Version : ".$userSystemInfo['version'];
        $contact->user_agent  = $userSystemInfo['userAgent'];
        $contact->ip          = $request->ip();
        $contact->country     = geoip()->getLocation($request->ip())->country;
        $contact->city        = geoip()->getLocation($request->ip())->city;
        $contact->state       = geoip()->getLocation($request->ip())->state_name;
        $contact->postal_code = geoip()->getLocation($request->ip())->postal_code;
        $contact->lat         = geoip()->getLocation($request->ip())->lat;
        $contact->lon         = geoip()->getLocation($request->ip())->lon;
        $contact->save();
        
        return redirect()->back()->with('flash_message', 'Thank You. Message submitted.');
    }
}
