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
}
