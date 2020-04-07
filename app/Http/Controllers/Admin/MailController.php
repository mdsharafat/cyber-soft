<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use App\Subscribe;
use Mail;
use DB;
use App\Notifications\NewPostNotification;
use Illuminate\Support\Facades\Notification;


class MailController extends Controller
{
    public function sendMail($id)
    {
        $subscribers = Subscribe::where('status', 1)->get();
        $post        = Post::where('id', $id)->first();
        foreach($subscribers as $subscriber){
            Notification::route('mail', $subscriber->email)
                ->notify(new NewPostNotification($post));
        }
        DB::table('posts')
              ->where('id', $id)
              ->update(['is_email_sent' => 1]);
        return redirect()->back()->with('flash_message', 'Email Sent');
    }
}
