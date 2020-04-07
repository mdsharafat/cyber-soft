<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commenter;
use App\Comment;
use App\Post;
use App\Helpers\UserSystemInfoHelper;
use DB;
use Validator;

class CommentsController extends Controller
{
    public function comment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:60',
            'email' => 'required|email|max:60',
            'comment' => 'required',
            'post' => 'required'
        ]);
        if ($validator->fails()) {
    	    return response()->json(['msg'=>$validator->errors()->all()]);
        }else{
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
            return response()->json(['msg'=>'comment-success', 'text'=>'Thank You for comment. Comment is pending under review']);
        }
    }

    public function pendingComments()
    {
        $comments = Comment::where('is_pending', 1)->latest()->get();
        return view('admin.comments.pending-comments', compact('comments'));
    }

    public function approvedComments()
    {
        $comments = Comment::where('is_pending', 0)->latest()->get();
        return view('admin.comments.approved-comments', compact('comments'));
    }

    public function approveComment($id)
    {
        DB::table('comments')
            ->where('id', $id)
            ->update(['is_pending' => 0]);
        return redirect()->back()->with('flash_message', 'Comment Approved');
    }

    public function pendingComment($id)
    {
        DB::table('comments')
            ->where('id', $id)
            ->update(['is_pending' => 1]);
        return redirect()->back()->with('flash_message', 'Comment Approved');
    }

    public function destroy($id)
    {
        Comment::destroy($id);
        return redirect()->back()->with('flash_message', 'Comment deleted!');
    }
}
