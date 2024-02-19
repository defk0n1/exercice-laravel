<?php

namespace App\Http\Controllers;
use App\Models\Song;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function songs()
    {
        $songs = Song::all();
        return view('index',["songs"=> $songs]);
    }
    public function song(int $id)
    {
        $song = Song::where('id',$id)->first();
        return view('song',["song"=>$song]);
    }
    public function share(Request $request){
       
         $song = new Song();
        $song->song_title = $request->input('title');
        $song->artist_name = $request->input('artist');
        $song->song_desc = $request->input('description');
        $song->song_link = $request->input('link');
        $song->song_lyrics = $request->input('lyrics');
        $song->platform = $request->input('platform');

        // Save the song
        $song->save();
        return redirect()->route('song', [$song]);



    }
}





