<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Redirect;
use DB;

class danhsachsanpham extends Controller
{
    public function danhsach(Request $req)
    {
    	$code=$req->id;
    	$data=DB::table('sanpham')->where('code',$code)->paginate(15);
    	$loaisp = DB::table("codeloai")->get();
    	return view("danhsachsanpham.danhsachsanpham")->with('data',$data)->with('loaisp',$loaisp);
    }
}
