<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;

class FrontentController extends Controller
{
    public function index()
    {
    	return view('frontend.index',[
    		'laft_contect'		=> Banner::where('laft_contect',1)->where('status', 1)->first(),
    		'right_contect'		=> Banner::where('right_contect',1)->where('status', 1)->first(),
    		'middle_contect'	=> Banner::where('middle_contect',1)->where('status', 1)->first()
    	]);
    }
}