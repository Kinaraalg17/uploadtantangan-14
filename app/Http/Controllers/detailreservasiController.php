<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class detailreservasiController extends Controller
{


    public function tambah3(){
        $detail_reservasi = DB::table('detail_reservasi')->get();
        $reservasi = DB::table('reservasi')->get();
        $kamar = DB::table('kamar')->get();
        return view('/blog/detailreservasi',['detail_reservasi' => $detail_reservasi ],['reservasi' => $reservasi ],['kamar' => $kamar]);

 
    }
    
    public function tambah(){
        $detail_reservasi = DB::table('detail_reservasi')->get();
        $reservasi = DB::table('reservasi')->latest("ID_RESERVASI")->first();
        $kamar = DB::table('kamar')->latest("ID_KAMAR")->first();
        return view('/blog/tambahdetail',['detail_reservasi' => $detail_reservasi, 'reservasi' => $reservasi, 'kamar'=> $kamar]);
    }
    public function store(Request $request)
{
	DB::table('detail_reservasi')->insert([
        'ID_RESERVASI' => $request->ID,
        'ID_KAMAR' => $request->ID_KAMAR 
	]);
    return redirect('/blog');
    
 
}

public function hapus($ID)
{
	
	DB::table('ID_RESERVASI')->where('ID_RESERVASI',$ID)->delete();
	return redirect('/detailreservasi');
}

}
