<?php

namespace App\Http\Controllers;
use App\Models\info;
use Illuminate\Http\Request;

class info_setController extends Controller
{
    //
    public function index()
    {
        //
        return view('admin.info_setting');
    }

    //lihat
    public function lihatInfo()
    {
        $info = info::all();
        return view('admin.info_setting')->with([
            'info' => $info
        ]);
    }

    public function insertInfo()
    {
        return view('admin.info_setting_insert');
    }

    //insert data
    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);

        $input = $request->all();
    
        info::create($input);

        return redirect()->route('info_setting')
                        ->with('success','Product created successfully.');
    }

    //lihat edit
    public function edit($id_info)
    {
        $info = info::findOrFail($id_info);
        return view('admin.info_setting_edit')->with([
            'info' => $info
        ]);
    }

    //edit data
    public function update(Request $request, $id_info)
    {
        //
        $item = info::findOrFail($id_info);
        //$data = $request->except(['_token']);
        
        $data = $request->validate([
            'pertanyaan' => 'required',
            'jawaban' => 'required',
        ]);
        
        $item->update($data);
        return redirect('info_setting');
    }

    //hapus data
    public function destroy($id_info)
    {
        //
        $item = info::findOrFail($id_info);
        $item->delete();
        return redirect('info_setting');
    }


    //user see


    public function indexUser()
    {
        //
        return view('info');
    }

    //lihat
    public function lihatInfoUser()
    {
        $info = info::all();
        return view('info')->with([
            'info' => $info
        ]);
    }
}
