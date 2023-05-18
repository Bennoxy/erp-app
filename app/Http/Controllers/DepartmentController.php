<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\User;
use Session;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userName = User::where('id',Session::get('loginId'))->value('name');
        $data = Department::all();
        return view('department.index', compact('data','userName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('department.create', compact('userName'));
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
            'department_code' => 'required',
            'department_name' => 'required',
            'department_code' => 'unique:departments',
            'department_name' => 'unique:departments'
        ]);
       

        Department::create($request->all());

        return redirect()->route('department.index')->with('success','Department created successfuly');
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
        $d = Department::find($id);
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('department.edit', compact('d','userName') );
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
        $d = Department::find($id);
        $request->validate([
            'department_code' => 'required',
            'department_name' => 'required'
        ]);

        $d->update($request->all());

        return redirect()->route('department.index')->with('success','Department updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Department::find($id);
        
        $d->delete();
        
        return redirect()->route('department.index')->with('success','Department deleted successfuly');
    }
}
