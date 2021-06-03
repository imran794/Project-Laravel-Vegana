<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }


    public function adminprofile()
    {
    	return view('admin.profile.index',[
    		'users'		=> User::OrderBy('id','desc')->where('id','!=',Auth::id())->get(),
    	]);
    }

    public function profiledelete($id)
    {
    	User::findOrFail($id)->delete();
    			$notification=array(
            'message'=>'User Delete Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->route('admin.dashboard')->with($notification);

    }

    public function profileedit($id)
    {
    	return view('admin.profile.eidt',[
    		'edit_data'		=> User::findOrFail($id)
    	]);
    }
}
