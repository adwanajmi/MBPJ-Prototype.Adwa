<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorekutipanRequest;
use App\Http\Requests\UpdatekutipanRequest;
use App\Models\kutipan;

class KutipanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kutipan = kutipan::all();
        return view('kutipan.index', [
            'kutipan'=>$kutipan,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kutipan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorekutipanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorekutipanRequest $request)
    {
        $kutipan = new kutipan();
        $kutipan-> pembayaran_id = $request->pembayaran_id;
        $kutipan-> namaPembayar = $request->namaPembayar;
        $kutipan-> kaedahPembayaran = $request->kaedahPembayaran;
        $kutipan-> accountNo = $request->accountNo;
        $kutipan-> totalKutipan = $request->totalKutipan;
        $kutipan-> save();

        return redirect('kutipan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kutipan  $kutipan
     * @return \Illuminate\Http\Response
     */
    public function show(kutipan $kutipan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kutipan  $kutipan
     * @return \Illuminate\Http\Response
     */
    public function edit(kutipan $kutipan)
    {
        return view('kutipan.edit',[
            'kutipan'=>$kutipan
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatekutipanRequest  $request
     * @param  \App\Models\kutipan  $kutipan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatekutipanRequest $request, kutipan $kutipan)
    {
        
        $kutipan-> pembayaran_id = $request->pembayaran_id;
        $kutipan-> namaPembayar = $request->namaPembayar;
        $kutipan-> kaedahPembayaran = $request->kaedahPembayaran;
        $kutipan-> accountNo = $request->accountNo;
        $kutipan-> totalKutipan = $request->totalKutipan;
        $kutipan-> save();

        return redirect('kutipan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kutipan  $kutipan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kutipan $kutipan)
    {
        //
    }
}
