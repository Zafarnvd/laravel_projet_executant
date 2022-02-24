<?php

namespace App\Http\Controllers;

use App\Models\Gallerie;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GallerieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Image::all();
        return view('galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galleries.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Gallerie();
        $file = Storage::put("/img", $request->file("src"));
        $store->img = $file;
        $store->name = $request->name;
        $store->category_id = $request->category_id;
        $store->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function show($image)
    {
        $image = Image::find($image);

        return Storage::disk('public')->download($image->img);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallerie $gallerie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallerie $gallerie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallerie  $gallerie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallerie $gallerie)
    {
        $galleries = Gallerie::find($gallerie);
        Storage::disk("public")->delete($galleries->img);
        $galleries->delete();
        return back();
    }
}
