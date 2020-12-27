<?php

namespace App\Http\Controllers\Admin;

use App\models\Consult;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consults = Consult::paginate(20);
        return view('admin.consults.index',['consults' => $consults]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.consults.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $consult = Consult::create($request->all());
        return redirect()->route('dashboard.consults.index')->with('success',trans('general.saved'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function show(Consult $consult)
    {
        return view('admin.consults.show',['consult' => $consult]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function edit(Consult $consult)
    {
        return view('admin.consults.edit',['consult' => $consult]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consult $consult)
    {
        $consult->update($request->all());

        return redirect()->route('dashboard.consults.index')->with('success',trans('general.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Consult  $consult
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consult $consult)
    {
        $consult->delete();
        return redirect()->route('dashboard.consults.index')->with('success',trans('general.deleted'));
    }
}
