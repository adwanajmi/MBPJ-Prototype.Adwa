<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorepembayaranRequest;
use App\Http\Requests\UpdatepembayaranRequest;
use App\Models\pembayaran;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembayaran = Pembayaran::all();

        return view('pembayaran.index', compact('pembayaran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembayaran.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepembayaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorepembayaranRequest $request)
    {
        $validated = $request->validate([
            'namaPembayar' => 'required|max:255',
            'tarikhPembayaran' => 'required',
            'kaedahPembayaran' => 'required',
            'totalPembayaran' => 'required',
        ]);

        $pembayaran = new Pembayaran();

        $pembayaran-> namaPembayar = $request->namaPembayar;
        $pembayaran-> tarikhPembayaran = $request->tarikhPembayaran;
        $pembayaran-> kaedahPembayaran = $request->kaedahPembayaran;
        $pembayaran-> totalPembayaran = $request-> totalPembayaran;

        $pembayaran->save();
        return redirect('/pembayaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function show(pembayaran $pembayaran)
    {
        return view('pembayaran.show', [
            'pembayaran'=>$pembayaran
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pembayaran $pembayaran)
    {
        return view('pembayaran.edit', [
            'pembayaran'=>$pembayaran
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepembayaranRequest  $request
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepembayaranRequest $request, pembayaran $pembayaran)
    {

        $pembayaran-> namaPembayar = $request->namaPembayar;
        $pembayaran-> tarikhPembayaran = $request->tarikhPembayaran;
        $pembayaran-> kaedahPembayaran = $request->kaedahPembayaran;
        $pembayaran-> totalPembayaran = $request-> totalPembayaran;

        $pembayaran->save();
        return redirect('/pembayaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pembayaran  $pembayaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pembayaran $pembayaran)
    {
        //
    }
}
