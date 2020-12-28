<?php

namespace App\Http\Controllers\Admin;

use App\models\Rule;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Rule as ModelsRule;

class RuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rules = Rule::paginate(20);
        return view('admin.rules.index',['rules' => $rules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.rules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rule = rule::create($request->all());
        return redirect()->route('dashboard.rules.index')->with('success',trans('general.saved'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function show(Rule $rule)
    {
        return view('admin.rules.show',['rule' => $rule]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function edit(Rule $rule)
    {
        return view('admin.rules.edit',['rule' => $rule]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rule $rule)
    {
        $rule->update($request->all());

        return redirect()->route('dashboard.rules.index')->with('success',trans('general.updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\models\Rule  $rule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rule $rules)
    {
        $rules->delete();
        return redirect()->route('dashboard.rules.index')->with('success',trans('general.deleted'));
    }
}
