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
    		'banners'		=> Banner::latest()->get(),
    		'trashed'		=> Banner::onlyTrashed()->latest()->get()
    		
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


   public function bannersoft($id)
   {
   	Banner::findOrFail($id)->delete();
   	$notification=array(
            'message'=>'Banner Soft Delete Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->route('banner')->with($notification);
   }

   public function bannerrestore($id)
   {
   	Banner::withTrashed()->where('id','=',$id)->restore();
   	 	$notification=array(
            'message'=>'Banner Restore Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->route('banner')->with($notification);
   }

    public function bannerdelete($id)
   {
   	Banner::withTrashed()->where('id','=',$id)->forceDelete();
   	 	$notification=array(
            'message'=>'Banner Delete Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->route('banner')->with($notification);
   }

   public function banneredit($id)
   {

        return view('backend.banner.edit',[
          'edit_data'   => Banner::findOrFail($id)
        ]);

   }

   public function Bannereditpost(Request $request)
   {
     
          $id        = $request->id;
          $old_image = $request->old_image;

          $request->validate([
            'banner_title'    => 'required',
            'banner_des'      => 'required',
            'banner_btn'      => 'required',
          ]);


          if ($request->file('banner_image')) {
              unlink($old_image);
              $banner_image = $request->file('banner_image');
              $new_name     = hexdec(uniqid()).'.'.$banner_image->extension();
              Image::make($banner_image)->resize(2000,700)->save('upload/banner_image/'.$new_name);
              $save_url_up = 'upload/banner_image/'.$new_name;

             Banner::findOrFail($id)->update([
            'banner_title'    => $request->banner_title,
            'banner_des'    => $request->banner_des,
            'banner_btn'    => $request->banner_btn,
            'banner_image'    => $save_url_up,
            'laft_contect'    => $request->laft_contect,
            'right_contect'   => $request->right_contect,
            'middle_contect'    => $request->middle_contect,
            'updated_at'    => Carbon::now()  

          ]);
          }

          else{
             $banner_image = $request->file('banner_image');
              $new_name     = hexdec(uniqid()).'.'.$banner_image->extension();
              Image::make($banner_image)->resize(2000,700)->save('upload/banner_image/'.$new_name);
              $save_url_up = 'upload/banner_image/'.$new_name;

             Banner::findOrFail($id)->update([
            'banner_title'    => $request->banner_title,
            'banner_des'    => $request->banner_des,
            'banner_btn'    => $request->banner_btn,
            'banner_image'    => $save_url_up,
            'laft_contect'    => $request->laft_contect,
            'right_contect'   => $request->right_contect,
            'middle_contect'    => $request->middle_contect,
            'updated_at'    => Carbon::now()  

          ]);

          }

            $notification=array(
            'message'=>'Banner Update Successfully',
            'alert-type'=>'success'
        );
        return Redirect()->route('banner')->with($notification);

   }

     public function bannerinactive($id)
       {
        Banner::findOrFail($id)->update(['status' => 0]);
        $notification=array(
                'message'=>'Banner Deactive Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->route('banner')->with($notification);
       }

        public function banneractive($id)
       {
        Banner::findOrFail($id)->update(['status' => 1]);
        $notification=array(
                'message'=>'Banner Active Successfully',
                'alert-type'=>'success'
            );
            return Redirect()->route('banner')->with($notification);
       }


}
