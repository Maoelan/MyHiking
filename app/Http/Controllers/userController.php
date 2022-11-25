<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //
    public function index()
    {
        //
        return view('admin.user_setting');
    }
    //input data
    public function store(Request $request)
    {
        //
        $data = $request->except(['_token']);
        User::insert($data);
        return redirect('/admin.user_setting');
    }
    //melihat data
    public function lihatUser()
    {
        //
        $data = User::all();
        return view('admin.user_setting')->with([
            'data' => $data
        ]);
    }
    //lihat user untuk edit
    public function lihatUserEdit($id)
    {
        //
        $data = User::findOrFail($id);
        return view('admin.user_setting_edit')->with([
            'data' => $data
        ]);
    }
    //edit user
    public function updateUser(Request $request, $id)
    {
        //
        $item = User::findOrFail($id);
        //$data = $request->except(['_token']);
        
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        
        $data['password'] = Hash::make($data['password']);
        
        $item->update($data);
        return redirect('user_setting');
    }
    //hapus data
    public function destroy($id)
    {
        //
        $item = User::findOrFail($id);
        $item->delete();
        return redirect('user_setting');
    }

}
