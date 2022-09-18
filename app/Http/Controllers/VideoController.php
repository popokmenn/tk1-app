<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\video;

class VideoController extends Controller
{
    function index()
    {
        return view("index");
    }

    function fetch()
    {
        $data=video::all()->toArray();
        return view('videos', compact('data'));
    }

    function insert(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
            'name' => 'required'
        ]);
        $file=$request->file('video');
        $file->move('upload',$file->getClientOriginalName());
        $file_name=$file->getClientOriginalName();

        video::create([
            'video' => $file_name,
            'name' => $request['name']
        ]);
        return redirect('/fetch_video');
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
            'name' => 'required'
        ]);
        $file=$request->file('video');
        $file->move('upload',$file->getClientOriginalName());
        $file_name=$file->getClientOriginalName();
        $findVideo = video::find($id);
        if ($findVideo) {
            $findVideo->update([
                'video' => $file_name,
                'name' => $request['name']
            ]);
        }
        return redirect('/fetch_video');
    }

    function delete(Request $request, $id)
    {
        $existVideo = video::find($id);
        if ($existVideo) $existVideo->delete();
        return redirect('/fetch_video');
    }

    function edit(Request $request, $id)
    {
        $existVideo = video::find($id);
        return view("index", compact('existVideo'));
    }
}
