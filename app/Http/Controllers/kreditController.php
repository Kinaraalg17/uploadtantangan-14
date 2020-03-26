<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kreditController extends Controller
{


    public function tambah3(){
        $pembayaran = DB::table('pembayaran')->get();
        $kredit = DB::table('kredit')->get();
        $reservasi = DB::table('reservasi')->get();
        return view('/blog/kredit',['pembayaran' => $pembayaran ],['kredit' => $kredit],['reservasi' => $reservasi]);

 
    }
    
    public function tambah(){
        $pembayaran = DB::table('pembayaran')->latest("ID_PEMBAYARAN")->first();
        $kredit = DB::table('kredit')->get();
        $reservasi = DB::table('reservasi')->latest("ID_RESERVASI")->first();
        return view('/blog/tambahkredit',['pembayaran' => $pembayaran, 'kredit' => $kredit, 'reservasi' => $reservasi]);
    }
    public function store(Request $request)
{
	DB::table('kredit')->insert([
        'ID_PEMBAYARAN'=> $request->ID,
        'NO_REKENING' => $request->REKENING,
        'ID_RESERVASI' => $request->ID_RESERVASI,
        'TANGGAL_PEMBAYARAN' => $request->TANGGAL,
        'STATUS_PEMBAYARAN'=> $request->STATUS,
        'TOTAL_PEMBAYARAN'=> $request->TOTAL
	]);
    return redirect('/detailreservasi/tambah');
    
 
}
public function edit($ID)
{
	
	$kredit = DB::table('kredit')->where('ID_PEMBAYARAN',$ID)->get();
	return view('/blog/editkredit',['kredit' => $kredit]);
 
}

public function update(Request $request)
{

	DB::table('kredit')->where('ID_PEMBAYARAN',$request->ID)->update([        
        'ID_PEMBAYARAN'=> $request->ID,
        'NO_REKENING' => $request->REKENING,
        'ID_RESERVASI' => $request->ID_RESERVASI,
        'TANGGAL_PEMBAYARAN' => $request->TANGGAL,
        'STATUS_PEMBAYARAN'=> $request->STATUS,
        'TOTAL_PEMBAYARAN'=> $request->TOTAL
	]);

	return redirect('/kredit');
}


public function hapus($ID)
{
	
	DB::table('kredit')->where('ID_PEMBAYARAN',$ID)->delete();
	return redirect('/kredit');
}




}
