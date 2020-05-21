<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class uploadController extends Controller
{
	public function upload(){
		return view('blog/uploadlte');
	}
	public function downloadtampilan(){
		return view('blog/download');
	}
 
 
	public function proses(Request $request){
		$this->validate($request, [
			'file' => 'required',
			'keterangan' => 'required',
        ]);
      
 

		$file = $request->file('file');
 
		echo 'File Name: '.$file->getClientOriginalName();
		echo '<br>';
 

		echo 'File Extension: '.$file->getClientOriginalExtension();
		echo '<br>';
 
		echo 'File Real Path: '.$file->getRealPath();
		echo '<br>';
 
     
		echo 'File Size: '.$file->getSize();
		echo '<br>';

		echo 'File Mime Type: '.$file->getMimeType();
 
		$tujuan_upload = 'File';
 

        $file->move($tujuan_upload,$file->getClientOriginalName());
        
        return redirect('/upload');
    }
    public function download($file_name) {
        $file_path = public_path('files/'.$file_name);
        return response()->download($file_path);
      }
    
}