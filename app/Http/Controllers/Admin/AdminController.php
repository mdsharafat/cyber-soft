<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Subscribe;
use App\Comment;
use App\Contact;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalSubscription = Subscribe::all()->count();
        $totalUnreadContactMessage = Contact::where('is_archived', 0)->get()->count();
        $totalReadContactMessage = Contact::where('is_archived', 1)->get()->count();
        $totalPendingComment = Comment::where('is_pending', 1)->get()->count();
        return view('admin.dashboard', compact('totalSubscription', 'totalUnreadContactMessage', 'totalReadContactMessage', 'totalPendingComment'));
    }
}
