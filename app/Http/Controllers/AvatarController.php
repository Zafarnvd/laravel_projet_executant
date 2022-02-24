<?php

namespace App\Http\Controllers;

use App\Models\avatar;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AvatarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avatars = Avatar::all();

        return view('avatar.index', compact('avatars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function show(avatar $avatar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function edit(avatar $avatar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, avatar $avatar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\avatar  $avatar
     * @return \Illuminate\Http\Response
     */
    public function destroy($avatar)
    {
        $avatar = avatar::find($avatar);
        $tempAvatar = avatar::where('id','!=', $avatar->id)->first();
        $users = User::where('avatar_id', $avatar->id)->get();
        Storage::disk("public")->delete("img/".$avatar->url);
        
        foreach($users as $user){
            $user->avatar_id = $tempAvatar->id;
            $user->save();
        }
        $avatar->delete();
        return back();
    }
}
