<?php

namespace App\Http\Controllers;

use App\Models\story;
use Illuminate\Http\Request;

class story_setController extends Controller
{
    //
    public function index()
    {
        //
        return view('admin.story_setting');
    }

    //lihat
    public function lihatStory()
    {
        $story = story::all();
        return view('admin.story_setting')->with([
            'story' => $story
        ]);
    }

    public function insertStory()
    {
        return view('admin.story_setting_insert');
    }

    //insert data
    public function store(Request $request)
    {
        $request->validate([
            'judul_story' => 'required',
            'nama' => 'required',
            'tanggal_post' => 'required',
            'foto_story' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'post_story' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('foto_story')) {
            $destinationPath = 'images/';
            $storyImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $storyImage);
            $input['foto_story'] = "$storyImage";
        }
    
        story::create($input);

        return redirect()->route('story_setting')
                        ->with('success','Product created successfully.');
    }

    //lihat edit
    public function edit($id_story)
    {
        $story = story::findOrFail($id_story);
        return view('admin.story_setting_edit')->with([
            'story' => $story
        ]);
    }

    //edit data
    public function update(Request $request, $id_story)
    {
        $item = story::findOrFail($id_story);

        $story = $request->validate([
            'judul_story' => 'required',
            'nama' => 'required',
            'tanggal_post' => 'required',
            'foto_story' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'post_story' => 'required',
        ]);

        if ($image = $request->file('foto_story')) {
            $destinationPath = 'images/';
            $storyImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $storyImage);
            $input['foto_story'] = "$storyImage";
        } else {
            unset($story['foto_story']);
        }
    
        $item->update($story);
        return redirect()->route('story_setting')
                        ->with('success','Product created successfully.');
    }

    //menghapus data
    public function destroy($id_story)
    {
        $item = story::findOrFail($id_story);
        $item->delete();
        return redirect('story_setting');
    }




    /// for user

    public function indexUser()
    {
        //
        return view('story');
    }

    public function lihatStoryUser()
    {
        $story = story::all();
        return view('story')->with([
            'story' => $story
        ]);
    }

    public function insertStoryUser()
    {
        return view('story_insert');
    }

    //insert data
    public function storeUser(Request $request)
    {
        $request->validate([
            'judul_story' => 'required',
            'nama' => 'required',
            'tanggal_post' => 'required',
            'foto_story' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'post_story' => 'required',
        ]);

        $input = $request->all();

        if ($image = $request->file('foto_story')) {
            $destinationPath = 'images/';
            $storyImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $storyImage);
            $input['foto_story'] = "$storyImage";
        }
    
        story::create($input);

        return redirect()->route('story')
                        ->with('success','Product created successfully.');
    }

}
