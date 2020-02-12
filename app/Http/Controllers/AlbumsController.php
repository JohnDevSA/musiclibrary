<?php

namespace App\Http\Controllers;

use App\Album;
use App\Genre;
use App\Http\Requests\AlbumsRequest;
use App\Photo;
use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();

        return view('album.index',compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::pluck('name','id')->all();

        return view('album.create',compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AlbumsRequest $request)
    {
//        Album::create($request->all());
           $input = $request->all();

           if($file = $request->file('photo_id'))
           {
               $name = time().$file->getClientOriginalName();

               $file->move('images',$name);
               $photo = new Photo;    // Here I was struggling to mass assign attributes
               $photo->file = $name;
               $photo->save();

               $input['photo_id'] = $photo->id;

           }

           Album::create($input);
           $albums = Album::all();

        return view('album.index',compact('albums'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $album = Album::findOrFail($id);
        $reviews = $album->reviews;

        return view('album.albumdetail',compact('album','reviews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $album = Album::findOrFail($id);

        $genres = Genre::pluck('name','id')->all();

        return view('album.edit',compact('album','genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AlbumsRequest $request, $id)
    {
            $album = Album::findOrFail($id);
            $input = $request->all();

             if($file = $request->file('photo_id')){

                $name = time() . $file->getClientOriginalName();

                $file->move('images', $name);

                $photo = Photo::create(['file'=>$name]);

                $input['photo_id'] = $photo->id;
            }

            $album->update($input);

            return redirect('/albums');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Album::findOrFail($id)->delete();

        return redirect('/albums');
    }
}
