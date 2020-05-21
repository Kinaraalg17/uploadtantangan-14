<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class tamuController extends Controller
{

    public function show()
    {
        $tamu = DB::table('tamu')->paginate(15);
        return view('/blog/datatamu',['tamu' => $tamu]) ;

    }
    public function tambah(){
        return view('/blog/tambahtamu');
    }

    public function store(Request $request)
{
	DB::table('tamu')->insert([
		'ID_TAMU' => $request->ID,
		'NAMA_TAMU' => $request->NAMA,
		'TANGGAL_LAHIR' => $request->TANGGAL,
        'JENIS_KELAMIN_TAMU' => $request->JENISKELAMIN,
        'NO_TLP_TAMU' => $request->TELP,
        'ALAMAT_TAMU' => $request->ALAMAT,
        'KEWARGANEGARAAN' => $request->KEWARGANEGARAAN
	]);
    return redirect('/kamar/tambah');
    
 
}
public function edit($ID)
{
	
	$tamu = DB::table('tamu')->where('ID_TAMU',$ID)->get();
	return view('/blog/edittamu',['tamu' => $tamu]);
 
}

public function update(Request $request)
{

	DB::table('tamu')->where('ID_TAMU',$request->ID)->update([
		'ID_TAMU' => $request->ID,
		'NAMA_TAMU' => $request->NAMA,
		'TANGGAL_LAHIR' => $request->TANGGAL,
        'JENIS_KELAMIN_TAMU' => $request->JENISKELAMIN,
        'NO_TLP_TAMU' => $request->TELP,
        'ALAMAT_TAMU' => $request->ALAMAT,
        'KEWARGANEGARAAN' => $request->KEWARGANEGARAAN
	]);

	return redirect('/datatamu');
}
public function cari(Request $request)
	{
		$cari = $request->cari;
		$tamu = DB::table('tamu')
		->where('NAMA_TAMU','like',"%".$cari."%")
		->paginate(15);
		return view('/blog/datatamu',['tamu' => $tamu]);

	}

public function hapus($ID)
{
	
	DB::table('tamu')->where('ID_TAMU',$ID)->delete();
	return redirect('/datatamu');
}

}