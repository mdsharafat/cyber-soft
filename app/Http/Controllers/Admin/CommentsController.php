<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commenter;
use App\Comment;
use App\Post;
use App\Helpers\UserSystemInfoHelper;
use DB;

class CommentsController extends Controller
{
    public function comment(Request $request)
    {
        $request->validate([
            'name' => 'required|max:60',
            'email' => 'required|email|max:60',
            'comment' => 'required',
            'post' => 'required'
        ]);
        
        $post      = Post::where('slug', $request->post)->first();
        $commenter = Commenter::where('email', $request->email)->first();

        if($commenter != null){
            if($request->name != $commenter->name){
                DB::table('commenters')
                    ->where('id', $commenter->id)
                    ->update(['name' => $request->name]);
            }
        }else{
            $commenter = new Commenter();
            $commenter->name  = $request->name;
            $commenter->email = $request->email;
            $commenter->save();
        }

        if($post != null){
            $userSystemInfoHelper   = new UserSystemInfoHelper();
            $userSystemInfo         = $userSystemInfoHelper->getBrowser();
            $comment                = new Comment();
            $comment->commenter_id  = $commenter->id;
            $comment->post_id       = $post->id;
            $comment->comment       = $request->comment;
            $comment->platform      = $userSystemInfo['platform'];
            $comment->browser       = $userSystemInfo['name']." Version : ".$userSystemInfo['version'];
            $comment->user_agent    = $userSystemInfo['userAgent'];
            $comment->ip            = $request->ip();
            $comment->country       = geoip()->getLocation($request->ip())->country;
            $comment->city          = geoip()->getLocation($request->ip())->city;
            $comment->state         = geoip()->getLocation($request->ip())->state_name;
            $comment->postal_code   = geoip()->getLocation($request->ip())->postal_code;
            $comment->lat           = geoip()->getLocation($request->ip())->lat;
            $comment->lon           = geoip()->getLocation($request->ip())->lon;
            $comment->save();
        }

        return redirect()->back()->with('commentMessage', 'Your comment is under review.');
    }
}
