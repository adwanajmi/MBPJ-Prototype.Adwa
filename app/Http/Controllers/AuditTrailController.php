<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreauditTrailRequest;
use App\Http\Requests\UpdateauditTrailRequest;
use App\Models\auditTrail;

class AuditTrailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $audit_trail = auditTrail::all();
        return view('audit.index',[
            'audit_trail'=>$audit_trail,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('audit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreauditTrailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreauditTrailRequest $request)
    {
        $audit_trail = new auditTrail();
        $audit_trail->user = $request->user;
        $audit_trail->tarikh = $request->tarikh;
        $audit_trail->activity = $request->activity;
        if ($request->hasFile('doc')) {
            // dd("adafile");
            $audit_trail->doc = $request->file('doc')->store('evidenceP');
        }

        $audit_trail->save();
        return redirect('/audit');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\auditTrail  $auditTrail
     * @return \Illuminate\Http\Response
     */
    public function show(auditTrail $auditTrail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\auditTrail  $auditTrail
     * @return \Illuminate\Http\Response
     */
    public function edit(auditTrail $auditTrail)
    {
        return view('audit.edit',[
            'audit'=>$auditTrail
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateauditTrailRequest  $request
     * @param  \App\Models\auditTrail  $auditTrail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateauditTrailRequest $request, auditTrail $auditTrail)
    {
         // $audit_trail = audit_trail::find($id);
         $auditTrail->user = $request->user;
         $auditTrail->doc = $request->doc;
         $auditTrail->tarikh = $request->tarikh;
         $auditTrail->activity = $request->activity;
         // $auditTrail->doc = $request->doc;
         if ($request->hasFile('doc')) {
             // dd("adafile");
             // $auditTrail-> = $request->file('doc')->store('docs');
             $auditTrail->doc = $request->file('doc')->store('doc');
         }

         $auditTrail->save();
         return redirect('/audit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\auditTrail  $auditTrail
     * @return \Illuminate\Http\Response
     */
    public function destroy(auditTrail $auditTrail)
    {
        //
    }
}
