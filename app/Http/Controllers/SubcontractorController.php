<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcontractor;
use App\Models\State;
use App\Models\User;
use Session;

class SubcontractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Subcontractor::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('subcontractor.index', compact('data','userName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $state = State::all(); //fetch from State Model
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('subcontractor.create', compact('state','userName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subcontractor' => 'required',
            'location' => 'required',
            'contact_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'trade' => 'required',
            'subcontractor' => 'unique:subcontractors',
        ]);

        Subcontractor::create($request->all());

        return redirect()
            ->route('subcontractor.index')
            ->with('success', 'Subcontractor created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state = State::all(); //fetch from State Model
        $d = Subcontractor::find($id);
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('subcontractor.edit', compact('state', 'd', 'userName'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = Subcontractor::find($id);
        $request->validate([
            'subcontractor' => 'required',
            'location' => 'required',
            'contact_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'trade' => 'required',
        ]);

        $d->update($request->all());

        return redirect()
            ->route('subcontractor.index')
            ->with('success', 'Subcontractor updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Subcontractor::find($id);
        $d->delete();
        return redirect()
            ->route('subcontractor.index')
            ->with('success', 'Subcontractor deleted successfuly');
    }
}
