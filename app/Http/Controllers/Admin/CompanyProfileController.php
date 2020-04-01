<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\CompanyProfile;
use Illuminate\Http\File;
use Illuminate\Support\Str;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $companyProfile = CompanyProfile::findOrFail(1);
        return view('admin.company-profile.index', compact('companyProfile'));
    }

    public function edit()
    {
        $companyProfile = CompanyProfile::findOrFail(1);
        return view('admin.company-profile.edit', compact('companyProfile'));
    }

    public function uploadImage($image, $uploadPath)
    {
        $imageName = Str::random(10).'.'.$image->getClientOriginalExtension();
        $image->move($uploadPath, $imageName);
        return $imageName;
    }

    public function update(Request $request)
    {
        $companyProfile = CompanyProfile::findOrFail(1);
        $requestData              = array();
        $requestData['name']      = $request->name;
        $requestData['moto']      = $request->moto;
        $requestData['email']     = $request->email;
        $requestData['phone']     = $request->phone;
        $requestData['intro']     = $request->intro;
        $requestData['location']  = $request->location;
        $requestData['address']   = $request->address;
        $requestData['copyright'] = $request->copyright;
        $requestData['fb_link']   = $request->fb_link;
        $requestData['tw_link']   = $request->tw_link;
        $requestData['ln_link']   = $request->ln_link;
        $requestData['vb_link']   = $request->vb_link;
        $requestData['wa_link']   = $request->wa_link;
        $requestData['sk_link']   = $request->sk_link;
        
        if ($request->hasfile('logo')) {
            if ($companyProfile->logo) {
                $delete_logo = 'storage/company-profile/'.$companyProfile->logo;
                unlink($delete_logo);
            }
            $image               = $request->file('logo');
            $uploadPath          = 'storage/company-profile/';
            $requestData['logo'] = $this->uploadImage($image, $uploadPath);
        }
        if ($request->hasfile('pro_pic')) {
            if ($companyProfile->pro_pic) {
                $delete_img = 'storage/company-profile/'.$companyProfile->pro_pic;
                unlink($delete_img);
            }
            $image              = $request->file('pro_pic');
            $uploadPath         = 'storage/company-profile/';
            $requestData['pro_pic'] = $this->uploadImage($image, $uploadPath);
        }
        $companyProfile->update($requestData);

        return redirect('/admin/company-profile')->with('flash_message', 'Company Profile Updated Successfully');
    }
}
