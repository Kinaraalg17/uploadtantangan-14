<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;
use Auth;

use App\Http\Requests;

class BlogController extends Controller
{
    public function login(){
        return view('blog/login');
    }

    public function admin2(request $request){
        $ID_ADMIN = $request->ID_ADMIN;
        
        $Check=DB::table("admin")->where(["ID_ADMIN"=>$ID_ADMIN])->get();
        if(count($Check)>0){
            session::put('test',TRUE);
            return redirect('operator');

        }
        else{
            return redirect('login');
        }
    }

public function halamanutama(){
    return view('blog/inpedia');
}
public function halamanoperator(){
    if (Session::has('test')){
    return view('blog/operator');
    }
    else{
        return redirect('login');
    }
}
public function logout(Request $request) {
    session::forget('test');
    return redirect('/blog');
  }
public function halamanpelanggan(){
    return view('blog/customer');
}
public function halamanmetode(){
    return view('blog/metodepembayaran');
}

   
}