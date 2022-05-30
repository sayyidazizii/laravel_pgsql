<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function index()
    {
        // $m = DB::table('siswas')
        //         ->orderBy('updated_at')
        //         ->get();
        $DATA =  DB::select('select * from public.getdata()');
        //dd($m);
        return view('siswa.index', ['data' => $DATA]);
    }
    public function vtambah()
    {
        return view('siswa.tambah');
    }
    public function store(Request $request)
    {
        // DB::table('siswas')->insert([
        //     'nis' => $request->nis,
        //     'nama' => $request->nama,
        //     'kelas' => $request->kelas
        // ]);

        DB::select("select public.insertdata(
            '$request->nis', 
            '$request->nama', 
            '$request->kelas'
        )");
        return redirect('/index')->with('succes','Data Berhasil di Input');
        // return redirect('/index');
    }

    public function vedit($id)
    {
        $DATA = DB::select("select * from public.getbyid('$id')");
        //dd($m);
        return view('siswa.edit', ['data' => $DATA]);
    }
    public function save(Request $request)
    {
        //    DB::table('siswas')->where('id',$request->id)->update([
        //        'id'=> $request->id,
        //         'nis' => $request->nis,
        //         'nama' => $request->nama,
        //         'kelas' => $request->kelas
        //     ]);

        DB::select("select public.updatedata(
        '$request->id', 
        '$request->nis', 
        '$request->nama', 
        '$request->kelas'
    )");

        // dd($data);
        return redirect('/index')->with('update','Data Berhasil di Update');
    }
    public function delete($id)
    {
        // DB::table('siswas')
        //     ->where('id', $id)
        //     ->delete();

        DB::select("select public.deletedata('$id')");
        return redirect('/index')->with('delete','Data Berhasil di hapus');
    }
}
