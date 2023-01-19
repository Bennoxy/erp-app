<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Freelancer;
use App\Models\State;
use App\Models\Local;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Freelancer::latest()->paginate(10);
        return view('freelancer.index', compact('data'))->with(
            request()->input('page')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $state = State::all(); //fetch from State Model
        return view('freelancer.create', compact('state'));
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
            'name' => 'required',
            'location' => 'required',
            'trade' => 'required',
            'address' => 'required',
            'enrollment_Year' => 'required',
            'gender' => 'required',
            'state_of_Origin' => 'required',
            'local_Government' => 'required',
            'highest_Qualification' => 'required',
            'institution' => 'required',
            'professional_Qualification' => 'required',
            'ambition' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        Freelancer::create($request->all());

        return redirect()
            ->route('freelancer.index')
            ->with('success', 'Freelancer created successfuly');
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
        $d = Freelancer::find($id);
        return view('freelancer.edit', compact('d'));
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
        $d = Freelancer::find($id);
        $request->validate([
            'name' => 'required',
            'location' => 'required',
            'trade' => 'required',
            'address' => 'required',
            'enrollment_Year' => 'required',
            'gender' => 'required',
            'state_of_Origin' => 'required',
            'local_Government' => 'required',
            'highest_Qualification' => 'required',
            'institution' => 'required',
            'professional_Qualification' => 'required',
            'ambition' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        $d->update($request->all());

        return redirect()
            ->route('freelancer.index')
            ->with('success', 'Freelancer updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Freelancer::find($id);
        $d->delete();
        return redirect()
            ->route('freelancer.index')
            ->with('success', 'Freelancer deleted successfuly');
    }
}
