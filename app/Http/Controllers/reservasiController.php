<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class reservasiController extends Controller
{


    public function tambah3(){
        $reservasi = DB::table('reservasi')->paginate(15);
        $admin = DB::table('admin')->get();
        $tamu = DB::table('tamu')->get();
        return view('/blog/reservasi',['reservasi' => $reservasi ],['admin' => $admin],['tamu'=> $tamu]);

 
    }
    
    public function tambah(){
        $admin = DB::table('admin')->latest("ID_ADMIN")->first();
        $tamu = DB::table('tamu')->latest("ID_TAMU")->first();
        return view('/blog/tambahreservasi',['admin' => $admin, 'tamu'=> $tamu]);
    }
    public function store(Request $request)
{
	DB::table('reservasi')->insert([
        'ID_RESERVASI'=> $request->ID,
        'ID_TAMU' => $request->JENIS2,
        'ID_ADMIN' => $request->JENIS,
        'TANGGAL_RESERVASI'=> $request->TANGGAL_RESERVASI,
        'JUMLAH_RESERVASI'=> $request->JUMLAH_RESERVASI,
        'TANGGAL_CHECKIN' => $request->CHECKIN,
        'TANGGAL_CHECKOUT' => $request->CHECKOUT
	]);
    return redirect('/pembayaran/tambah');
    
 
}
public function edit($ID)
{
	
	$reservasi = DB::table('reservasi')->where('ID_RESERVASI',$ID)->get();
	return view('/blog/editreservasi',['reservasi' => $reservasi]);
 
}

public function update(Request $request)
{

	DB::table('reservasi')->where('ID_RESERVASI',$request->ID)->update([        
		'ID_RESERVASI'=> $request->ID,
        'ID_TAMU' => $request->JENIS2,
        'ID_ADMIN' => $request->JENIS,
        'TANGGAL_RESERVASI'=> $request->TANGGAL_RESERVASI,
        'JUMLAH_RESERVASI'=> $request->JUMLAH_RESERVASI,
        'TANGGAL_CHECKIN' => $request->CHECKIN,
        'TANGGAL_CHECKOUT' => $request->CHECKOUT
	]);

	return redirect('/reservasi');
}
public function cari(Request $request)
	{
		$cari = $request->cari;
		$reservasi = DB::table('reservasi')
		->where('TANGGAL_CHECKIN','like',"%".$cari."%")
		->paginate();
		return view('/blog/reservasi',['reservasi' => $reservasi]);

	}

public function hapus($ID)
{
	
	DB::table('reservasi')->where('ID_RESERVASI',$ID)->delete();
	return redirect('/reservasi');
}



}
