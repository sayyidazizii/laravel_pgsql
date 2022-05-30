<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index()
    {
        $user = DB::table('users')
                ->orderBy('updated_at')
                ->get();
        //dd($user);
        return view('user.index', ['user' => $user]);
    }
    public function vtambah()
    {
        return view('user.tambah');
    }
    public function store(Request $request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        return redirect('/index');
    }

    public function vedit($id)
    {
        $user = DB::table('users')
                ->where('id',$id)
                ->get();
                //dd($user);
       return view('user.edit',['users'=> $user]);
       
    }
    public function save(Request $request)
    {
       DB::table('users')->where('id',$request->id)->update([
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at,
            'remember_token'=>$request->remember_token,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        // dd($d);
       // return redirect('/index');
    }
    public function delete($id)
    {
        DB::table('users')
        ->where('id',$id)
        ->delete();

        return redirect('/index');
    }

}
