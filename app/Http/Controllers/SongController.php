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
        $new_song = new Song;
        $new_song->song_title = $request->song_title;
        $new_song->artist_name = $request ->artist_name;
        $new_song->song_link = $request->song_link;
        $new_song->song_desc = $request->song_desc;
        $new_song->song_lyrics = $request->song_lyrics;
        $new_song->platform = $request->platform;
        $new_song->save();
        return view('songs');



    }
}





