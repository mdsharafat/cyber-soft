<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function changeMyPassword()
    {
        return view('admin.users.change-password');
    }

    public function changePasswordSubmit(Request $request)
    {
        $request->validate([
            'old_password' => 'required|min:8',
            'new_password' => 'required_with:confirm_new_password|same:confirm_new_password|min:6',
            'confirm_new_password' => 'min:8',
        ]);

        if(Auth::user()->id){
            if (Hash::check($request->old_password, Auth::user()->password)) {
                DB::table('users')
                ->where('id', Auth::user()->id)
                ->update([
                    'password'  => Hash::make($request->new_password)
                ]);
                return redirect()->back()->with('flash_message', 'Password Changed Successfully');
            }else{
                return redirect()->back()->with('flash_message', 'Old Password Not Matched');
            }
        }else{
            return redirect()->back()->with('flash_message', 'User not found');
        }
    }
}
