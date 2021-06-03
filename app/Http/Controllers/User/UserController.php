<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Carbon\carbon;
use Image;
use Hash;

class UserController extends Controller
{
    public function index(){
        return view('user.home');
    }

    public function updateDataprofile(Request $request)
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

    public function imageupdate()
    {
    	return view('user.imageupdate');
    		
    	
    }

    public function updateimagepost(Request $request)
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

    public function changepasswprd()
    {
    	return view('user.changepasswprd');
    }

    public function updatepasswordpost(Request $request)
    {
    	 $request->validate([
            'old_password'               => 'required',
            // 'password'                   => 'required|min:8',
            // 'password_confirmation'      => 'required|min:8'
        ]);

    	if ($request->old_password == $request->password) {
    		 $notification=array(
            'message'=>'The Old Password can not ba a new password',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    	}

    	else{
    		$old_password = $request->old_password;
    		$db_password  = Auth::user()->password;
    		if (Hash::check($old_password,$db_password)) {
    			User::findOrFail(Auth::id())->update([
    				'password'	=> Hash::make($request->password)
    			]);
    			 Auth::logout();
    			 $notification=array(
		            'message'=>'Your Password Change Success. Now Login With New Password',
		            'alert-type'=>'success'
		        );
		        return Redirect()->back()->with($notification);
    		}
    		else{
    			 $notification=array(
		            'message'=>'The Old Password is not Right',
		            'alert-type'=>'success'
		        );
		        return Redirect()->back()->with($notification);
    		}
    	}
    }
}
