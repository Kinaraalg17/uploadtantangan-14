<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class tunaiController extends Controller
{


    public function tambah3(){
        $pembayaran = DB::table('pembayaran')->get();
        $tunai = DB::table('tunai')->get();
        $reservasi = DB::table('reservasi')->get();
        return view('/blog/tunai',['pembayaran' => $pembayaran ],['tunai' => $tunai],['reservasi' => $reservasi]);

 
    }
    
    public function tambah(){
        $pembayaran = DB::table('pembayaran')->latest("ID_PEMBAYARAN")->first();
        $tunai = DB::table('tunai')->get();
        $reservasi = DB::table('reservasi')->latest("ID_RESERVASI")->first();
        return view('/blog/tambahtunai',['pembayaran' => $pembayaran, 'tunai' => $tunai, 'reservasi' => $reservasi]);
    }
    public function store(Request $request)
{
	DB::table('tunai')->insert([
        'ID_PEMBAYARAN'=> $request->ID,
        'NO_KTP' => $request->KTP,
        'ID_RESERVASI' => $request->ID_RESERVASI,
        'TANGGAL_PEMBAYARAN' => $request->TANGGAL,
        'STATUS_PEMBAYARAN'=> $request->STATUS,
        'TOTAL_PEMBAYARAN'=> $request->TOTAL
	]);
    return redirect('/detailreservasi/tambah');
    
 
}
public function edit($ID)
{
	
	$tunai = DB::table('tunai')->where('ID_PEMBAYARAN',$ID)->get();
	return view('/blog/edittunai',['tunai' => $tunai]);
 
}
public function update(Request $request)
{

	DB::table('tunai')->where('ID_PEMBAYARAN',$request->ID)->update([        
        'ID_PEMBAYARAN'=> $request->ID,
        'NO_KTP' => $request->KTP,
        'ID_RESERVASI' => $request->ID_RESERVASI,
        'TANGGAL_PEMBAYARAN' => $request->TANGGAL,
        'STATUS_PEMBAYARAN'=> $request->STATUS,
        'TOTAL_PEMBAYARAN'=> $request->TOTAL
	]);

	return redirect('/tunai');
}

public function hapus($ID)
{
	
	DB::table('tunai')->where('ID_PEMBAYARAN',$ID)->delete();
	return redirect('/tunai');
}


}
