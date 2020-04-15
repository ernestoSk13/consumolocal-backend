<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class LinkController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api')->except('getImage');
        $this->middleware('isAdmin')->only(['destroy', 'update', 'store']);
    }

    public function getImage($id) {
        $link = Link::find($id);

        $headers = [
            "Content-Type: image/png"
        ];

        return response()->file(storage_path().'/app/'.$link->imagePath, $headers)->setStatusCode('200');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Link::all();
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
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show(Link $link)
    {
        return $link;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Link $link)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        //
    }
}
