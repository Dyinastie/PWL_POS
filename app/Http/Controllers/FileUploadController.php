<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload()
    {
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request)
    {
        // dump($request->berkas);
        // return "Pemrosesan file upload di sini";

        $request->validate([
            'berkas' => 'required|file|image|max:500'
        ]);
        $extfile = $request->berkas->getClientOriginalName();
        $namaFile = 'web-'.time().".".$extfile;

        $path = $request->berkas->move('gambar', $namaFile);
        $path = str_replace("\\","//", $path);
        echo "Variabel path berisi : $path <br><br>";

        $pathBaru = asset('gambar/'.$namaFile);
        echo "Proses upload berhasil, file berada di: $path";
        echo "<br><br>";
        echo "Tampilkan link : <a href='$pathBaru'>$pathBaru</a>";
    }
    
    public function fileUpload_Rename()
    {
        return view('file-upload-rename');
    }

    public function prosesFileUpload_Rename(Request $request) 
    {
        $request->validate([
            'rename' => 'required|min:3',
            'berkas' => 'required|file|image|max:500'
        ]);

        $extFile = $request->berkas->getClientOriginalExtension();
        $namaFile = $request->rename.".$extFile";
        $path = $request->berkas->storeAs('public/gambar',$namaFile);
        $pathBaru = asset('storage/gambar/'.$namaFile);

        echo "Gambar berhasil di upload ke <a href='$pathBaru'>$namaFile</a>";
        echo "<br><br>";
        echo "<img src='$pathBaru'>";
    }
}