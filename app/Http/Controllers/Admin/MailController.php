<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Subscribe;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailToSubscriber;

class MailController extends Controller
{
    public function sendMail($id)
    {
        $subscribers = Subscribe::where('status', 1)->get();
        $post        = Post::where('id', $id)->first();

        foreach($subscribers as $subscriber){
            Mail::to($subscriber->email)->send(new SendMailToSubscriber($post));
        }

        DB::table('posts')
              ->where('id', $id)
              ->update(['is_email_sent' => 1]);
        return redirect()->back()->with('flash_message', 'Email Sent');
    }
}
