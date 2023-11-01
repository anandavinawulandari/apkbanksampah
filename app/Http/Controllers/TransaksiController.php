<?php

namespace App\Http\Controllers;
use App\Models\Jenis;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DataTables;

class TransaksiController extends Controller
{
    public function home(){
        return view('home.index');
    }
    public function index(Request $request){
        $data = DB::table('transaksi')
        ->join('jenis', 'transaksi.id_sampah', '=', 'jenis.id_sampah')
        ->select(
                'transaksi.*',
                'jenis.id_sampah',
                'jenis.nama',
                'jenis.jenis',
                'jenis.harga',
                'jenis.file',
                )
        ->get();
        foreach ($data as $key) {
            $hasil = ($key->jumlah * $key->harga);
            $cek = DB::select("SELECT * FROM transaksi WHERE id_sampah='$key->id_sampah' AND id='$key->id'");
            // echo $hasil.'<br>';
            if(empty($cek)){
                $insert = new Transaksi;
                $insert->total = $hasil;
                $insert->id = $key->id;
                $insert->id_sampah = $key->id_sampah;
                $insert->save();
            }else{
                if($cek[0]->total != $hasil){
                    $update = Transaksi::find($cek[0]->id);
                    $update->total = $hasil;
                    $update->update();
                }

        }
    }
        $result = DB::table('transaksi')
        ->join('jenis', 'transaksi.id_sampah', '=', 'jenis.id_sampah')
        ->select(
                'transaksi.*',
                'jenis.id_sampah',
                'jenis.nama',
                'jenis.jenis',
                'jenis.harga',
                'jenis.file',
                )
        ->get();

        return view('transaksi.index', ['dataTransaksi' => $result, 'hasil' => $hasil]);
    }

    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'jumlah' => 'required|integer',

        ]);

       
        Transaksi::create([
            'id' => $request->id,
            'id_sampah' => $request->id_sampah,
            'nama_p' => $request->nama_p,
            'jumlah' => $request->jumlah,
            'jenis_1' => $request->jenis_1,
            'harga' => $request->harga,
        ]);

        return redirect('/transaksi');
    }
    public function create()
    {
        $ref_jenis = DB::select('SELECT * FROM jenis');
        return view('transaksi.create', compact('ref_jenis'));
    }
    public function show($id)
    {
        $data  = Transaksi::find($id);
        return view('transaksi.view', compact('data'));
    }

    public function getdetail(Request $request)
    {
        $id_sampah = $request->input('id_sampah');
        $detail = DB::select("SELECT * FROM jenis WHERE id_sampah ='$id_sampah'");
        $ref_jenis = DB::select('SELECT * FROM jenis');
        $status = "0";
        if (!empty($detail)) {
            $status = "1";
        }
        header('Content-Type: application/json');
        echo json_encode(array('status' => $status, 'detail' => $detail, 'ref_jenis' => $ref_jenis));
    }

    
}
