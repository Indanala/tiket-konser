<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tiket;
class PesanController extends Controller
{
    public function index(){
        return view('form-pendaftaran');
    }

    public function prosesForm(Request $request, Tiket $tiket){
        $validateData = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
        ]);
        Tiket::create($validateData);
        return view('detail-form', compact('request'));
    }


    public function daftarTiket(){
        return view('daftar-tiket',['tikets' => Tiket::OrderBy('id')->paginate(10)]);
    }

    public function cekid(Request $request, Tiket $tiket){
        if($request->id === $tiket->id){
            return view('showdata', compact('tiket'));
        }
        else{
            return back()->withInput()->with('pesan', "ID tidak valid");
        }
    }
    public function checkIn(){
        return view('checkin');
    }



    public function laporan(){
        return view('halaman',['judul' => 'Detail Check-in']);
    }

    public function login(){
        return view('form-login');
    }

    public function prosesLogin(Request $request){
        $request -> validate([
            'username' => 'required',
        ]);

        $validUsername = ['admin'];
        //jika input username ada di array, buar session 'username
        if (in_array($request ->username, $validUsername))
        {
            session(['username' => $request->username]);
            return redirect('/daftar-tiket');
        }
        else {
            //username tidak ada di daftar
      return back()->withInput()->with('pesan', "username tidak valid");
        }
    }





}
