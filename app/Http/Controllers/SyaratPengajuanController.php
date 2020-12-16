<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Syarat;

class SyaratPengajuanController extends Controller
{
    public function upload() {
        $syarat_pengajuan = Syarat::get();
        return view('syarat', ['syarat_pengajuan' => $syarat_pengajuan]);
    }

    public function uploadProcess(Request $request) {
        // dd($request);
        $this->validate($request, [
            'jns_pengajuan' => 'required',
            'file'          => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'status'        => 'required',
        ]);
        $file = $request->file('file');

        
        $file_name = time()."_".$file->getClientOriginalName();
        $destination_file = 'files_storage';
        $file->move($destination_file, $file_name);

        Syarat::create([
            'jns_pengajuan' => $request->jns_pengajuan,
            'file'          => $file_name,
            'status'        => $request->status,
        ]);
        return redirect()->back();
    }
}
