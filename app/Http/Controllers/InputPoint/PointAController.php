<?php

namespace App\Http\Controllers\InputPoint;

use App\Http\Controllers\Controller;
use App\Models\PointA;
use Illuminate\Http\Request;

class PointAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('input-point.point-A');
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
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function show(PointA $pointA)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function edit(PointA $pointA)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointA $pointA)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PointA  $pointA
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointA $pointA)
    {
        //
    }
}