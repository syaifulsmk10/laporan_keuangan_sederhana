<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keuangan;

class KeuanganController extends Controller
{
    public function index(Request $request){

        if ($request->has('search')) {
            $data = keuangan::where('kategori', 'LIKE', '%' .$request->search. '%')->paginate(5);
        }else {
            $data = keuangan::paginate(5);
        }

        return view('datakeuangan', compact('data'));
    }


    public function tambahdata(){
        return view('tambahdata');
    }

    public function about()
    {
        return view('about');
    }


    public function insertdata(Request $request)
    {
        $data = keuangan::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotopegawai/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('uang')->with('success','Data Berhasil Ditambahkan');
    }


     public function tampilkandata($id){
        $data = keuangan::find($id);

        return view('tampildata', compact('data'));

     }


     public function updatedata(Request $request, $id){
        $data = keuangan::find($id);
        $data->update($request->all());
        return redirect()->route('uang')->with('success', 'Data Berhasil Diupdate');

     }

     public function delete($id){

        $data = keuangan::find($id);
        $data->delete();
        return redirect()-> route('uang')->with('success', 'Data Berhasil DiHapus');

     }


     public function count(){
        $jumlahpemasukan = Keuangan::sum('pemasukan');
        $jumlahmodal = Keuangan::sum('modal');
        $jumlahkeuntungan = $jumlahpemasukan- $jumlahmodal;
        



        // $keuntungan = keuanganDB::select("CAST(SUM(total_harga) as int) as total_harga")

        return view('welcome', compact('jumlahkeuntungan', 'jumlahpemasukan', 'jumlahmodal'));


     }



    public function aksi()
    {

        $jumlahaksi = Keuangan::count();
        $jumlahjualapk = Keuangan::where('kategori', 'JUAL APK')->count();
        $jumlahjualpc = Keuangan::where('kategori', 'JUAL PC',)->count();
        $lainnya = Keuangan::where('kategori', 'LAINNYA')->count();

        return view('aksi', compact('jumlahaksi', 'jumlahjualpc', 'jumlahjualapk', 'lainnya'));
    }


   
     
     

}
