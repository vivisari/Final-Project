<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin1;
class admin1Controller extends Controller
{
    public function show(){
        $admin = admin1::all();
        return view('welcome', compact('admin'));
    }
    public function login(){
        return view('admin');
    }
    public function store(Request $request){
        $request->validate([
            'namaadmin'=>'required|between:5,20',
            'umuradmin'=>'required|numeric|gt:20',
            'alamatadmin'=>'required|between:10,40',
            'no_telp'=>'required|starts_with:08|digits_between:9,12|regex:/^08\d{7,10}$/'
        ]);
        admin1::create([
            'namaadmin'=>$request->namaadmin,
            'umuradmin'=>$request->umuradmin,
            'alamatadmin'=>$request->alamatadmin,
            'no_telp'=>$request->no_telp
        ]);
        return redirect(route('show'));
    }
    public function edit($id){
        $admin=admin1::findOrFail($id);
        return view('adminedit', compact('admin'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'namaadmin'=>'required|between:5,20',
            'umuradmin'=>'required|numeric|gt:20',
            'alamatadmin'=>'required|between:10,40',
            'no_telp'=>'required|starts_with:08|digits_between:9,12|regex:/^08\d{7,10}$/',
        ]);
        $admin=admin1::findOrFail($id);
        $admin->update([
            'namaadmin'=>$request->namaadmin,
            'umuradmin'=>$request->umuradmin,
            'alamatadmin'=>$request->alamatadmin,
            'no_telp'=>$request->no_telp
        ]);
        return redirect(route('show'));
    }
    public function delete($id){
        admin1::destroy($id);
        return redirect(route('show'));
    }
}
