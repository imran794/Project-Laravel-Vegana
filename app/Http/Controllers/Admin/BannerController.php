<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use Auth;
use Carbon\Carbon;
use Image;
use Str;

class BannerController extends Controller
{
    public function index()
    {
    	return view('backend.banner.index',[
    		'banners'		=> Banner::latest()->get()
    	]);
    }

   public function bannerpost(Request $request)

   {

     $request->validate([
   		'banner_title'		=> 'required',
   		'banner_des'		=> 'required',
   		'banner_btn'		=> 'required',
   		'banner_image'		=> 'required',

   	]); 


    $slug = Str::slug( $request->banner_title.'-'.carbon::now()->timestamp);

   	$banner_image = $request->file('banner_image');
   	$new_name 	  = hexdec(uniqid()).'.'.$banner_image->extension();
   	Image::make($banner_image)->resize(2000,700)->save('upload/banner_image/'.$new_name);
   	$save_url = 'upload/banner_image/'.$new_name;

   	Banner::insert([
   		'banner_title'		=> $request->banner_title,
   		'banner_des'		=> $request->banner_des,
   		'banner_btn'		=> $request->banner_btn,
   		'banner_title'		=> $request->banner_title,
   		'banner_image'		=> $save_url,
   		'banner_slug'		=> $slug,
   		'laft_contect'		=> $request->laft_contect,
   		'right_contect'		=> $request->right_contect,
   		'middle_contect'    => $request->middle_contect,
   		'created_at'		=> Carbon::now()		

   	]);

   		$notification=array(
            'message'=>'Banner Insert Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);



   }


}
