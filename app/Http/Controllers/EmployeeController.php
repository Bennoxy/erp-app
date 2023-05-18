<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\State;
use App\Models\Local;
use App\Models\Department;
use App\Models\Position;
use App\Models\User;
use Session;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Employee::latest()->paginate(10);
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('employee.index', compact('data', 'userName'))->with(
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
        // Select input
        $state = State::all(); //fetch from State Model
        $department = Department::all(); //fetch from State Model
        $position = Position::all(); //fetch from Position Model
        $user = User::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view(
            'employee.create',
            compact('state', 'department', 'position','userName','user')
        );
    }

    /**
     * return local governments list.
     *     
     * @return response()

     */

    public function fetchLocal(Request $request)
    {
        $data['locals'] = Local::where('state_id', $request->state_id)->get([
            'name',
            'id',
        ]);

        return response()->json($data);
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
            'position' => 'required',
            'department_id' => 'required',
            'address' => 'required',
            'employment_Year' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'state_of_Origin' => 'required',
            'local_Government' => 'required',
            'marital_Status' => 'required',
            'no_of_Children' => 'required',
            'date_of_Birth' => 'required',
            'nOK_Name' => 'required',
            'nOK_Phone' => 'required',
            'nOK_Address' => 'required',
            'nOK_Relationship' => 'required',
            'highest_Qualification' => 'required',
            'institution' => 'required',
            'professional_Qualification' => 'required',
            'ambition' => 'required',
            'blood_Group' => 'required',
            'genotype' => 'required',
            'allergies' => 'required',
            'hobbies' => 'required',
            'language_Proficiency' => 'required',
            'personal_Core_Values' => 'required',
            'image' => 'required|image|mimes:jpg,png,gif',
        ]);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move(public_path('/images'), $filename);
            // $employee->image = $filename;
        }

        Employee::create($request->all());

        return redirect()
            ->route('employee.index')
            ->with('success', 'Employee created successfuly');
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
        $department = Department::all(); //fetch from State Model
        $position = Position::all(); //fetch from Position Model
        $d = Employee::find($id);
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view(
            'employee.edit',
            compact('d', 'state', 'department', 'position','userName')
        );
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
        $d = Employee::find($id);
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'department_id' => 'required',
            'address' => 'required',
            'employment_Year' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'state_of_Origin' => 'required',
            'local_Government' => 'required',
            'marital_Status' => 'required',
            'no_of_Children' => 'required',
            'date_of_Birth' => 'required',
            'nOK_Name' => 'required',
            'nOK_Phone' => 'required',
            'nOK_Address' => 'required',
            'nOK_Relationship' => 'required',
            'highest_Qualification' => 'required',
            'institution' => 'required',
            'professional_Qualification' => 'required',
            'ambition' => 'required',
            'blood_Group' => 'required',
            'genotype' => 'required',
            'allergies' => 'required',
            'hobbies' => 'required',
            'language_Proficiency' => 'required',
            'personal_Core_Values' => 'required',
        ]);

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $path = public_path() . '/images';
            $file->move($path, $filename);
            $d->image = $filename;
        }

        $d->update($request->all());

        return redirect()
            ->route('employee.index')
            ->with('success', 'Employee updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Employee::find($id);
        $d->delete();
        return redirect()
            ->route('employee.index')
            ->with('success', 'Employee deleted successfuly');
    }
}
