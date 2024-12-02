<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepatuController extends Controller
{
    public function index()
    {
    	// mengambil data dari table sepatu
    	// $sepatu = DB::table('sepatu')->get();
        $sepatu = DB::table('sepatu')->paginate(10);
    	// mengirim data sepatu ke view index
    	return view('indexSepatu',['sepatu' => $sepatu]);
    }

	public function tambah()
	{
		return view('tambahSepatu');
	}

	public function store(Request $request)
	{
        $tersedia = $request->has('tersedia') ? 'Y' : 'N';
		DB::table('sepatu')->insert([
			'kodesepatu' => $request->kode,
			'merksepatu' => $request->merk,
			'stocksepatu' => $request->stock,
			'tersedia' => $tersedia
		]);
		return redirect('/sepatu');

	}

	public function edit($id)
	{
		$sepatu = DB::table('sepatu')->where('kodesepatu',$id)->get();
		return view('editSepatu',['sepatu' => $sepatu]);

	}

	public function update(Request $request)
	{
		$tersedia = $request->has('tersedia') ? 'Y' : 'N';
        DB::table('sepatu')->where('kodesepatu',$request->id)->update([
			'kodesepatu' => $request->kode,
			'merksepatu' => $request->merk,
			'stocksepatu' => $request->stock,
			'tersedia' => $tersedia
		]);
		return redirect('/sepatu');
	}


	public function hapus($id)
	{
		DB::table('sepatu')->where('kodesepatu',$id)->delete();
		return redirect('/sepatu');
	}

    public function cari(Request $request)
	{
		$cari = $request->cari;
		$sepatu = DB::table('sepatu')
		                ->where('merksepatu','like',"%".$cari."%")
		                ->paginate();

		return view('indexSepatu',['sepatu' => $sepatu]);
	}
}
