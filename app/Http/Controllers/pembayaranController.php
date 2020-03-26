<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class pembayaranController extends Controller
{


    public function tambah3(){
        $pembayaran = DB::table('pembayaran')->get();
        $reservasi = DB::table('reservasi')->get();
        return view('/blog/pembayaran',['pembayaran' => $pembayaran ],['reservasi' => $reservasi]);

 
    }
    
    public function tambah(){
        $pembayaran = DB::table('pembayaran')->get();
        $reservasi = DB::table('reservasi')->latest("ID_RESERVASI")->first();
        return view('/blog/tambahpembayaran',['pembayaran' => $pembayaran, 'reservasi'=> $reservasi]);
    }
    public function store(Request $request)
{
	DB::table('pembayaran')->insert([
        'ID_PEMBAYARAN'=> $request->ID,
        'ID_RESERVASI' => $request->ID_RESERVASI,
        'TANGGAL_PEMBAYARAN' => $request->TANGGAL,
        'STATUS_PEMBAYARAN'=> $request->STATUS,
        'TOTAL_PEMBAYARAN'=> $request->TOTAL
	]);
    return redirect('/metode');
    
 
}
public function edit($ID)
{
	
	$pembayaran = DB::table('pembayaran')->where('ID_PEMBAYARAN',$ID)->get();
	return view('/blog/editpembayaran',['pembayaran' => $pembayaran]);
 
}

public function update(Request $request)
{

	DB::table('pembayaran')->where('ID_PEMBAYARAN',$request->ID)->update([        
		'ID_PEMBAYARAN'=> $request->ID,
        'ID_RESERVASI' => $request->ID_RESERVASI,
        'TANGGAL_PEMBAYARAN' => $request->TANGGAL,
        'STATUS_PEMBAYARAN'=> $request->STATUS,
        'TOTAL_PEMBAYARAN'=> $request->TOTAL
	]);

	return redirect('/pembayaran');
}

public function hapus($ID)
{
	
	DB::table('pembayaran')->where('ID_PEMBAYARAN',$ID)->delete();
	return redirect('/pembayaran');
}

}
