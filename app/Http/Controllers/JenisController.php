<?php

namespace App\Http\Controllers;
use App\Models\Jenis;
use Illuminate\Http\Request;
use DataTables;

class JenisController extends Controller
{
    public function home(){
        return view('home.index');
    }
    public function index(){
        $data = Jenis::all();
        return view('jenis.index', ['dataSampah' => $data]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_sampah' => 'required',
            'nama' => 'required',
            'jenis' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required',
            'file' => 'required',

        ]);
        $file = "";
        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('file')->storeAs('public', $filenameSimpan);

            $file = $filenameSimpan;
        }
        // if ($request->file('file')) {
        //     $dokumen_file = $validatedData['file'];
        //     $dokumen_name =  time() . "-" . $dokumen_file->getClientOriginalName() . "." . $dokumen_file->getClientOriginalExtension();
        //     $path = public_path('storage/');
        //     $dokumen_file->move($path, $dokumen_name);
        //     $arsip_dokumen= 'storage/' . $dokumen_name;
        // }
        Jenis::create([
            'id_sampah' => $request->id_sampah,
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            'file' => $file,
        ]);

        return redirect('/jenis');
    }
    public function create()
    {
        return view('jenis.create');
    }
    public function edit($id_sampah)
    {
        $data = Jenis::find($id_sampah);
        return view('jenis.edit', compact('data'));
    }
    public function update(Request $request, $id_sampah){

        $data= Jenis::find($id_sampah);
        $data->nama = $request->nama;
        $data->jenis = $request->jenis;
        $data->harga = $request->harga;
        $data->deskripsi = $request->deskripsi;
        $data->update();
        return redirect('/jenis')->with('sucess','Data Berhasil Diperbarui');
    }
    public function destroy($id_sampah)
    {
        $data = Jenis::find($id_sampah);
        $data->delete();
        return redirect('/jenis')->with('sucess','Data Berhasil Dihapus');    
    }
}
