<?php

namespace App\Http\Controllers;

use App\Models\pegunungan;
use Illuminate\Http\Request;

class pegununganController extends Controller
{
    //
    public function index()
    {
        //
        return view('admin.pegunungan_setting');
    }
    //lihat
    public function lihatPegunungan()
    {
        $pegunungan = pegunungan::all();
        return view('admin.pegunungan_setting')->with([
            'pegunungan' => $pegunungan
        ]);
    }
    public function insertPegunungan()
    {
        return view('admin.pegunungan_setting_insert');
    }
    //insert data
    public function store(Request $request)
    {
        $request->validate([
            'nama_gunung' => 'required',
            'letak_gunung' => 'required',
            'ketinggian_gunung' => 'required',
            'jenis_gunung' => 'required',
            'ketinggian_gunung' => 'required',
            'foto_gunung' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
            'jalur_pendakian' => 'required',
            'level_pendakian' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('foto_gunung')) {
            $destinationPath = 'images/';
            $pegununganImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $pegununganImage);
            $input['foto_gunung'] = "$pegununganImage";
        }
    
        pegunungan::create($input);

        return redirect()->route('pegunungan_setting')
                        ->with('success','Product created successfully.');
    }
    //lihat edit
    public function edit($id)
    {
        $pegunungan = pegunungan::findOrFail($id);
        return view('pegunungan_setting_edit')->with([
            'pegunungan' => $pegunungan
        ]);
    }
    //edit data
    public function update(Request $request, $id)
    {
        $pegunungan = pegunungan::findOrFail($id);

        $request->validate([
            'nama_gunung' => 'required',
            'letak_gunung' => 'required',
            'ketinggian_gunung' => 'required',
            'jenis_gunung' => 'required',
            'ketinggian_gunung' => 'required',
            'foto_gunung' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'deskripsi' => 'required',
            'jalur_pendakian' => 'required',
            'level_pendakian' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('foto_gunung')) {
            $destinationPath = 'images/';
            $pegununganImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $pegununganImage);
            $input['foto_gunung'] = "$pegununganImage";
        } else {
            unset($input['foto_gunung']);
        }
    
        $pegunungan->update($input);

        return redirect()->route('admin.pegunungan_setting')
                        ->with('success','Product created successfully.');
    }
    //menghapus data
    public function destroy($id)
    {
        $item = pegunungan::findOrFail($id);
        $item->delete();
        return redirect('pegunungan_setting');
    }

}
