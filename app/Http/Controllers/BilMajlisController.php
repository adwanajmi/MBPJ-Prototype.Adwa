<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorebilMajlisRequest;
use App\Http\Requests\UpdatebilMajlisRequest;
use App\Models\bilMajlis;

class BilMajlisController extends Controller
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
     * @param  \App\Http\Requests\StorebilMajlisRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorebilMajlisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bilMajlis  $bilMajlis
     * @return \Illuminate\Http\Response
     */
    public function show(bilMajlis $bilMajlis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bilMajlis  $bilMajlis
     * @return \Illuminate\Http\Response
     */
    public function edit(bilMajlis $bilMajlis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebilMajlisRequest  $request
     * @param  \App\Models\bilMajlis  $bilMajlis
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatebilMajlisRequest $request, bilMajlis $bilMajlis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bilMajlis  $bilMajlis
     * @return \Illuminate\Http\Response
     */
    public function destroy(bilMajlis $bilMajlis)
    {
        //
    }
}
