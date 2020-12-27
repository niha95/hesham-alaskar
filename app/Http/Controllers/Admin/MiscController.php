<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Misc;
use App\Models\misc as ModelsMisc;
use Illuminate\Http\Request;

class MiscController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $misc = Misc::paginate(20);
        return view('admin.misc.index',['misc' => $misc]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.misc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $misc = Misc::create($request->all());
        return redirect()->route('dashboard.misc.index')->with('success',trans('general.saved'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Misc  $misc
     * @return \Illuminate\Http\Response
     */
    public function show(Misc $misc)
    {
        return view('admin.misc.show',['misc' => $misc]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Misc  $misc
     * @return \Illuminate\Http\Response
     */
    public function edit(Misc $misc)
    {
        return view('admin.misc.edit',['misc' => $misc]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Misc  $misc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Misc $misc)
    {
        $misc->update($request->all());

        return redirect()->route('dashboard.misc.index')->with('success',trans('general.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Misc  $misc
     * @return \Illuminate\Http\Response
     */
    public function destroy(Misc $misc)
    {
        $misc->delete();
        return redirect()->route('dashboard.misc.index')->with('success',trans('general.deleted'));
    }
}
