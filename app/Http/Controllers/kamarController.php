<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kamarController extends Controller
{

    public function show()
    {
        $kamar = DB::table('kamar')->paginate(15);
        return view('/blog/kamar',['kamar' => $kamar]) ;

    }
    public function tambah(){
        return view('/blog/tambahkamar');
    }

    public function store(Request $request)
{
	DB::table('kamar')->insert([
		'ID_KAMAR' => $request->ID,
		'STATUS_KAMAR' => $request->STATUS,
		'KAPASITAS_KAMAR' => $request->KAPASITAS,
        'JENIS_KAMAR' => $request->JENIS,
        'HARGA_KAMAR' => $request->HARGA
	]);
    return redirect('/reservasi/tambah');
    
 
}
public function edit($ID)
{
	
	$kamar = DB::table('kamar')->where('ID_KAMAR',$ID)->get();
	return view('/blog/editkamar',['kamar' => $kamar]);
 
}

public function update(Request $request)
{

	DB::table('kamar')->where('ID_KAMAR',$request->ID)->update([        
		'ID_KAMAR' => $request->ID,
		'STATUS_KAMAR' => $request->STATUS,
		'KAPASITAS_KAMAR' => $request->KAPASITAS,
        'JENIS_KAMAR' => $request->JENIS,
        'HARGA_KAMAR' => $request->HARGA
	]);

	return redirect('/kamar');
}

public function hapus($ID)
{
	
	DB::table('kamar')->where('ID_KAMAR',$ID)->delete();
	return redirect('/kamar');
}

}
