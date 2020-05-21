<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\detailreservasi;
 
use PDF;


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
        $tamu = DB::table('tamu')->latest("ID_TAMU")->first();
        $reservasi = DB::table('reservasi')->latest("ID_RESERVASI")->first();
        $kamar = DB::table('kamar')->latest("ID_KAMAR")->first();
        $pembayaran = DB::table('pembayaran')->latest("ID_PEMBAYARAN")->first();
        

       
        return view('/blog/tambahdetail',['detail_reservasi' => $detail_reservasi, 'reservasi' => $reservasi, 'kamar'=> $kamar, 'pembayaran'=> $pembayaran, 'tamu'=> $tamu]);
    }
    public function edittamu($ID)
    {
        
        $tamu = DB::table('tamu')->where('ID_TAMU',$ID)->get();
        return view('/blog/tambahdetailtamu',['tamu' => $tamu]);
     
    }
    
    public function update(Request $request)
    {
    
        DB::table('tamu')->where('ID_TAMU',$request->ID)->update([
            'ID_TAMU' => $request->ID,
            'NAMA_TAMU' => $request->NAMA,
            'TANGGAL_LAHIR' => $request->TANGGAL,
            'ALAMAT_TAMU' => $request->ALAMAT,
            'KEWARGANEGARAAN' => $request->KEWARGANEGARAAN
        ]);
    
        return redirect('/detailreservasi/tambah');
    }
    public function editreservasi($ID)
{
	
	$reservasi = DB::table('reservasi')->where('ID_RESERVASI',$ID)->get();
	return view('/blog/tambahdetailreservasi',['reservasi' => $reservasi]);
 
}

public function updatereservasi(Request $request)
{

	DB::table('reservasi')->where('ID_RESERVASI',$request->ID)->update([        
		'ID_RESERVASI'=> $request->ID,
        'TANGGAL_RESERVASI'=> $request->TANGGAL_RESERVASI,
        'TANGGAL_CHECKIN' => $request->CHECKIN,
        'TANGGAL_CHECKOUT' => $request->CHECKOUT
	]);

	return redirect('/detailreservasi/tambah');
}
public function editkamar($ID)
{
	
	$kamar = DB::table('kamar')->where('ID_KAMAR',$ID)->get();
	return view('/blog/tambahdetailkamar',['kamar' => $kamar]);
 
}

public function updatekamar(Request $request)
{

	DB::table('kamar')->where('ID_KAMAR',$request->ID)->update([        
		'ID_KAMAR' => $request->ID,
		'STATUS_KAMAR' => $request->STATUS,
        'JENIS_KAMAR' => $request->JENIS,
        'HARGA_KAMAR' => $request->HARGA
	]);

	return redirect('/detailreservasi/tambah');
}
public function editpembayaran($ID)
{
	
	$pembayaran = DB::table('pembayaran')->where('ID_PEMBAYARAN',$ID)->get();
	return view('/blog/tambahdetailpembayaran',['pembayaran' => $pembayaran]);
 
}

public function updatepembayaran(Request $request)
{

	DB::table('pembayaran')->where('ID_PEMBAYARAN',$request->ID)->update([        
		'ID_PEMBAYARAN'=> $request->ID,
        'TANGGAL_PEMBAYARAN' => $request->TANGGAL,
        'STATUS_PEMBAYARAN'=> $request->STATUS,
        'TOTAL_PEMBAYARAN'=> $request->TOTAL
	]);

	return redirect('/detailreservasi/tambah');
}

    public function cetak_pdf()
{
    $detail_reservasi = DB::table('detail_reservasi')->get();
    $tamu = DB::table('tamu')->latest("ID_TAMU")->first();
    $reservasi = DB::table('reservasi')->latest("ID_RESERVASI")->first();
    $kamar = DB::table('kamar')->latest("ID_KAMAR")->first();
    $pembayaran = DB::table('pembayaran')->latest("ID_PEMBAYARAN")->first();

 
	$pdf = PDF::loadview('/blog/invoice_pdf',['detail_reservasi' => $detail_reservasi, 'reservasi' => $reservasi, 'kamar'=> $kamar, 'pembayaran'=> $pembayaran, 'tamu'=> $tamu]);
    return $pdf->stream();
}
    public function store(Request $request)
{
	DB::table('detail_reservasi')->insert([
        'ID_RESERVASI' => $request->ID,
        'ID_KAMAR' => $request->ID_KAMAR 
	]);
    return redirect('/pointofsales');
    
 
}

public function hapus($ID)
{
	
	DB::table('ID_RESERVASI')->where('ID_RESERVASI',$ID)->delete();
	return redirect('/detailreservasi');
}

}
