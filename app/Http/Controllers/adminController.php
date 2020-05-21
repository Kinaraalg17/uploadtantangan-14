<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




class adminController extends Controller
{

    public function show()
    {
        $admin = DB::table('admin')->paginate(15);
        return view('/blog/admin1',['admin' => $admin]) ;

    }

    public function tambah(){
        return view('/blog/tambah');
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
    return redirect('/admin1');
    
 
}
public function edit($ID)
{
	
	$admin = DB::table('admin')->where('ID_ADMIN',$ID)->get();
	return view('/blog/edit',['admin' => $admin]);
 
}
// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('admin')->where('ID_ADMIN',$request->ID)->update([
		'NAMA_ADMIN' => $request->NAMA,
		'ALAMAT_ADMIN' => $request->ALAMAT,
        'NO_TELP_ADMIN' => $request->TELP,
		'PASSWORD' => $request->PASSWORD,

	]);
	return redirect('/admin1');
}

public function cari(Request $request)
	{
		$cari = $request->cari;
		$admin = DB::table('admin')
		->where('NAMA_ADMIN','like',"%".$cari."%")
		->paginate();
		return view('/blog/admin1',['admin' => $admin]);

	}
public function hapus($ID)
{
	
	DB::table('admin')->where('ID_ADMIN',$ID)->delete();
	return redirect('/admin1');
}

}
