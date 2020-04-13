<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('guru', ['guru' => $guru]);
    }

    public function hapus($id)
    {
        $pegawai = Guru::find($id);
        $pegawai->delete();
        return redirect('/guru');
    }

    // menampilkan data guru yang sudah dihapus
    public function trash()
    {
        // mengampil data guru yang sudah dihapus
        $guru = Guru::onlyTrashed()->get();
        return view('guru_trash', ['guru' => $guru]);
    }

    // restore data guru yang dihapus
    public function kembalikan($id)
    {
        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->restore();
        return redirect('/guru/trash');
    }

    public function kembalikan_semua()
    {
        $guru = Guru::onlyTrashed();
        $guru->restore();

        return redirect('/guru/trash');
    }
    public function hapus_permanen($id)
    {

        $guru = Guru::onlyTrashed()->where('id', $id);
        $guru->forceDelete();

        return redirect('/guru/trash');
    }
    public function hapus_permanen_semua()
    {
        $guru = Guru::onlyTrashed();
        $guru->forceDelete();

        return redirect('/guru/trash');
    }
}
