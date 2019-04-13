<?php

namespace App\Http\Controllers;

use App\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function create()
    {
        return view('albums.create');
    }

    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|max:50',
            'description' => 'required|max:200'
        ]);


        Album::create($input);
    }
}
