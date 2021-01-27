<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Http\Requests\StoreVideo;
use Illuminate\Support\Str;


class VideoController extends Controller
{
    public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    public function create()
    {
        return view('videos.create');
    }

    public function store(StoreVideo $request)
    {

        $video = Video::create($request->all());

        return redirect()->route('videos.index');
    }

    public function show(Video $video)
    {
        return view('videos.show', compact('video'));
    }

    public function showgrid()
    {
        $videos = Video::all();
        return view('videos.showgrid', compact('videos'));
    }

    public function edit(Video $video)
    {
        return view('videos.edit', compact('video'));
    }

    public function update(Video $video, StoreVideo $request)
    {
        $video->update($request->all());
        return redirect()->route('videos.show', $video->id);
    }


    public function destroy(Video $video)
    {
        $video->delete();
        return redirect()->route('videos.index');
    }
}
