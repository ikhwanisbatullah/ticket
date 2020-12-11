<?php

namespace App\Http\Controllers;
use App\Models\KategoriKonten;
use JD\Cloudder\Facades\Cloudder;
use App\Models\Majalah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;



class KontenWebController extends Controller
{
    public function kategori_konten(){

        $kategori_konten = KategoriKonten::all();
        $i = 0;

        if(!Session::get('loginAdmin')){
            return redirect('/admin/login')->with('alert', 'Anda harus login terlebih dahulu');
        }else{
            return view('Admin/kelolaKategoriKonten', compact('kategori_konten', 'i'));
        }


    }

    public function tambah_kategori_konten(Request $request){

        $this->validate($request, [
            'kd_kategori_konten' => '|unique:kategori_konten|numeric|regex:/^([1-9][0-9]+)/',
            'kategori_konten' => '|unique:kategori_konten|max:30',
        ]);

        $kategori_konten = new KategoriKonten();
        $kategori_konten->kd_kategori_konten = $request->kd_kategori_konten;
        $kategori_konten->kategori_konten = $request->kategori_konten;
        $kategori_konten->save();

        return redirect('/admin/dataKonten/kategoriKonten')->with('alert success', 'Kategori berhasil ditambahkan!');
    }

    public function ubah_kategori_konten(Request $request){

        $this->validate($request, [
            'kode_kategori_konten' => '|numeric|regex:/^([1-9][0-9]+)/',
            'kategori_konten' => '|max:30',
        ]);

        $kategori_konten = KategoriKonten::findOrFail($request->kd_kategori_konten);
        $kategori_konten->kd_kategori_konten = $request->kd_kategori_konten;
        $kategori_konten->kategori_konten = $request->kategori_konten;
        $kategori_konten->save();

        return redirect('/admin/dataKonten/kategoriKonten')->with('alert success', 'Kategori berhasil diubah!');
    }

    public function hapus_kategori_konten($kd_kategori_konten){
        $kategori_konten = KategoriKonten::findOrFail($kd_kategori_konten);
        $kategori_konten->delete($kategori_konten);

        return redirect('/admin/dataKonten/kategoriKonten')->with('alert danger', 'Kategori berhasil dihapus!');
    }

    public function konten(){

        $majalah = Majalah::orderBy('created_at', 'desc')->get();
        $kategori_konten = KategoriKonten::all();
        $i = 0;

        if(!Session::get('loginAdmin')){
            return redirect('/admin/login')->with('alert', 'Anda harus login terlebih dahulu');
        }else{
            return view('Admin/kelolaKonten', compact('majalah','kategori_konten', 'i'));
        }
    }

    public function tambah_konten(Request $request){
        $this->validate($request, [
            'judul_konten' => '|unique:konten',
        ]);
    
        $majalah = new Majalah();

        if($request->hasFile('foto')){
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $majalah->foto = $request->file('foto')->getClientOriginalName();
            $majalah->judul_majalah = $request->judul_majalah;
            $majalah->isi_majalah = $request->isi_majalah;
            $majalah->kd_kategori = $request->kd_kategori_konten;
            $majalah->tgl_rilis = $request->tgl_rilis;
	        $majalah->save();
         }

        return redirect('/admin/dataKonten/konten')->with('alert success', 'Konten berhasil ditambahkan!');
    }

    public function hapus_majalah($kd_konten){
        $majalah = Majalah::findOrFail($kd_majalah);
        $foto = Majalah::where('kd_majalah', kd_majalah)->value('foto');
        Cloudder::destroy($foto);
        $majalah->delete($majalah);

        return redirect('/admin/dataKonten/konten')->with('alert danger', 'Konten berhasil dihapus!');
    }

}
