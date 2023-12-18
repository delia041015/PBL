<?php

namespace App\Http\Controllers;

use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Surat::paginate(5);
        return view('mahasiswa.surat',['dataSurat'=> $data]);
    }
    public function index_adm()
    {
        $data = Surat::paginate(5);
        return view('admin.surat',['dataSurat'=> $data]);
    }

    public function store(Request $request)
{
    $message= [
        'required' => ':attribute tidak boleh kosong',
        'unique' => ':attribute sudah digunakan',
        'numeric' => ':attribute harus berupa angka',
    ];

    $this->validate($request, [
        'id_surat' => 'required|unique:surats|numeric',
        'nama_surat' => 'required|file|mimes:pdf,doc,docx'
    ], $message);

    // Simpan file ke storage
    $file_path = $request->file('nama_surat')->store('public/surat');


    $data = new Surat();
    $data->id_surat = $request->id_surat;
    $data->nama_surat = $file_path;
    $data->status = 'diajukan';
    $data->save();

    return redirect('/surat-mhs')->with('success', 'Surat berhasil diajukan!');
}


public function download($id)
{
    $surat = Surat::find($id);

    if (!$surat) {
        abort(404, 'Surat not found');
    }

    // Dapatkan path file dari database
    $file_path = $surat->nama_surat;

    // Pastikan file benar-benar ada di storage
    $file_path = str_replace('public/', '', $file_path); // Remove 'public/' from the path
    $full_path = storage_path("app/public/{$file_path}");

    if (!file_exists($full_path)) {
        
        abort(404, 'File not found');
    }

    // Dapatkan nama file untuk memberikan nama pada file yang diunduh
    $file_name = pathinfo($full_path, PATHINFO_BASENAME);

    // Sajikan file menggunakan response()->file()
    return response()->file($full_path, ['Content-Disposition' => 'inline; filename="'.$file_name.'"']);
}
// public function downloads($id)
// {
//     $surat = Surat::find($id);

//     if (!$surat) {
//         abort(404, 'Surat not found');
//     }

//     // Dapatkan path file dari database
//     $file_path = $surat->nama_surat;

//     // Pastikan file benar-benar ada di storage
//     $file_path = str_replace('public/', '', $file_path); // Remove 'public/' from the path
//     $full_path = storage_path("app/public/{$file_path}");

//     if (!file_exists($full_path)) {

//         abort(404, 'File not found');
//     }

//     // Dapatkan nama file untuk memberikan nama pada file yang diunduh
//     $file_name = pathinfo($full_path, PATHINFO_BASENAME);

//     // Sajikan file menggunakan response()->file()
//     return response()->file($full_path, ['Content-Disposition' => 'inline; filename="'.$file_name.'"']);
// }


public function validasi(Request $request, $id)
{
    $surat = Surat::find($id);

    if (!$surat) {
        abort(404, 'Surat not found');
    }
    $surat->status = 'diterima';
    $surat->save();

    return redirect('/surat-adm')->with('success', 'Surat berhasil divalidasi!');
}




    
}
