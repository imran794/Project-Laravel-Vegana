<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Image;
use Carbon\carbon;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }


    public function adminprofile()
    {
    	return view('admin.profile.index');
    }

    // public function profiledelete($id)
    // {
    // 	User::findOrFail($id)->delete();
    // 		 $notification=array(
    //          'message'=>'User Delete Successfully',
    //          'alert-type'=>'success'
    //     );
    //     return Redirect()->route('admin.dashboard')->with($notification);

    // }

    public function profileedit($id)
    {
    	return view('admin.profile.eidt',[
    		'edit_data'		=> User::findOrFail($id)
    	]);
    }

    public function admineditpost(Request $request)
    {
    	$request->validate([
    		'name'		=> 'required',
    		'email'		=> 'required',
    		'number'		=> 'required'
    	]);

    	User::findOrFail(Auth::id())->update([
    		'name'			=> $request->name,
    		'email'			=> $request->email,
    		'number'		=> $request->number,
    		'updated_at'	=> carbon::now()
    		
    	]);

    	$notification=array(
            'message'=>'Profile Update Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

       
     }

     public function imgupdate()
    {
    	return view('admin.profile.imageupdate');
    		
    	
    }

    public function imgupdatepost(Request $request)
    {
    	$old_image = $request->old_image;

    	if (User::findOrFail(Auth::id())->image == 'upload/media/imran.jpg') {
    		$image 		= $request->file('image');
    		$new_name   = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    		Image::make($image)->resize(300,300)->save('upload/media/'.$new_name);
    		$save_url = 'upload/media/'.$new_name;

    		User::findOrFail(Auth::id())->update([
    		     'image'  => $save_url
    		]);


    		   $notification=array(
            'message'=>'Your Image successfully Updated',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);

    		
    	}

    	else{
    		unlink($old_image);
    		$image 		= $request->file('image');
    		$new_name   = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
    		Image::make($image)->resize(300,300)->save('upload/media/'.$new_name);
    		$save_url = 'upload/media/'.$new_name;

    		User::findOrFail(Auth::id())->update([
    		     'image'  => $save_url
    		]);


    		   $notification=array(
            'message'=>'Your Image successfully Updated',
            'alert-type'=>'success'
        );
        return Redirect()->route('user.dashboard')->with($notification);
    	}

    }

    public function changepasswprdadmin()
    {
         return view('admin.profile.changepasswprd');
    }


}
