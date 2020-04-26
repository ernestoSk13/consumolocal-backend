<?php

namespace App\Http\Controllers;

use App\BusinessLink;
use Illuminate\Http\Request;

class BusinessLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($business, $link, $value)
    {
        $id = BusinessLink::create([
            'business' => $business,
            'link'      => $link,
            'value'     => $value
        ]);
        return $id;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusinessLink  $businessLink
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessLink $businessLink)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusinessLink  $businessLink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessLink $businessLink)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusinessLink  $businessLink
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessLink $businessLink)
    {
        //
    }
}