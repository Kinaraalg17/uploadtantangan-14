<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;
use Auth;
use PDF;

use App\Http\Requests;

class BlogController extends Controller
{
    public function login(){
        return view('blog/login');
    }
    
        public function loginadmin(){
            return view('blog/loginlte');
        }


    public function admin2(request $request){
        $ID_ADMIN = $request->ID_ADMIN;
        $PASSWORD = $request->PASSWORD;
        
        $Check=DB::table("admin")->where(["ID_ADMIN"=>$ID_ADMIN,"PASSWORD"=>$PASSWORD])->get();
        if(count($Check)>0){
            session::put('test',TRUE);
            return redirect('operator');

        }
        else{
            return redirect('login');
        }
    }

    public function tambah(){
        return view('/blog/tambahadmin2');
    }
    public function store(Request $request)
    {
        DB::table('admin')->insert([
            'ID_ADMIN' => $request->ID,
            'NAMA_ADMIN' => $request->NAMA,
            'ALAMAT_ADMIN' => $request->ALAMAT,
            'NO_TELP_ADMIN' => $request->TELP,
            'PASSWORD' => $request->PASSWORD,
    
        ]);
        return redirect('/login');
        
     
    }
public function halamanutama(){
    return view('blog/inpedia');
}
public function halamanoperator(){
    if (Session::has('test')){
    return view('blog/adminlte');
    }
    else{
        return redirect('login');
    }
}

public function halamanPOS(){
    return view('blog/pointofsales');
}
public function report(){
    $pembayaran = DB::table('pembayaran')->get();
    return view('/blog/report',['pembayaran'=> $pembayaran]);
}
public function report_pdf()
{
    $pembayaran = DB::table('pembayaran')->get();
	$pdf = PDF::loadview('/blog/report_pdf',['pembayaran'=> $pembayaran]);
    return $pdf->download('report_pdf');
}
public function roomlist(){
    return view('blog/roomlist');
}
public function logout(Request $request) {
    session::forget('test');
    return redirect('/');
  } 
public function halamanpelanggan(){
    return view('blog/operator');
}
public function halamanmetode(){
    return view('blog/metodepembayaran');
}

   
}