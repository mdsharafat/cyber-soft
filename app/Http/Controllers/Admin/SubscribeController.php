<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Subscribe;
use App\Helpers\UserSystemInfoHelper;
use Validator;

class SubscribeController extends Controller
{
    public function subscribeHelper($request)
    {
        $userSystemInfoHelper   = new UserSystemInfoHelper();
        $userSystemInfo         =$userSystemInfoHelper->getBrowser();

        $subscribe              = new Subscribe;
        $subscribe->email       = $request->email;
        $subscribe->platform    = $userSystemInfo['platform'];
        $subscribe->browser     = $userSystemInfo['name']." Version : ".$userSystemInfo['version'];
        $subscribe->user_agent  = $userSystemInfo['userAgent'];
        $subscribe->ip          = $request->ip();
        $subscribe->country     = geoip()->getLocation($request->ip())->country;
        $subscribe->city        = geoip()->getLocation($request->ip())->city;
        $subscribe->state       = geoip()->getLocation($request->ip())->state_name;
        $subscribe->postal_code = geoip()->getLocation($request->ip())->postal_code;
        $subscribe->lat         = geoip()->getLocation($request->ip())->lat;
        $subscribe->lon         = geoip()->getLocation($request->ip())->lon;
        $subscribe->save();

    }

    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:60|unique:subscribes',
        ]);
        if ($validator->fails()) {
    	    return response()->json(['msg'=>$validator->errors()->all()]);
        }else{
            $this->subscribeHelper($request);
            return response()->json(['msg'=>'success', 'text'=>'Successfully subscribed']);
        }
		
    }

    public function subscriberLists()
    {
        $subscribers = Subscribe::latest()->get();
        return view('admin.subscribers.index', compact('subscribers'));
    }
}
