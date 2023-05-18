<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Subcontractor;
use App\Models\Freelancer;
use App\Models\Bill;
use App\Models\details_bill;
use App\Models\User;
use Session;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userName = User::where('id',Session::get('loginId'))->value('name');
        $data = Project::all();
        return view('project.index', compact('data','userName'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Select input
        $client = Client::all(); //fetch from Client Model
        $bill = Bill::all(); //fetch from Bill Model
        $employee = Employee::all(); //fetch from Emplote Model
        $subcontractor = Subcontractor::all(); //fetch from Subcontractor Model
        $freelancer = Freelancer::all(); //fetch from Freelancer Model
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view(
            'project.create',
            compact('client', 'bill', 'employee', 'subcontractor', 'freelancer', 'userName')
        );
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
            'project_title' => 'required',
            'description' => 'required',
            'client_id' => 'required',
            'employee_id' => 'required',
            'start_date' => 'required',
            'due_date' => 'required',
            'project_bill' => 'required',
            'project_amount' => 'required',
            'status' => 'required',
        ]);
        Project::create($request->all());

        return redirect()
            ->route('project.index')
            ->with('success', 'Project created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $d = Project::find($id);
        $client = Client::all(); //fetch from Client Model
        $employee = Employee::all(); //fetch from Emplote Model
        $subcontractor = Subcontractor::all(); //fetch from Subcontractor Model
        $freelancer = Freelancer::all(); //fetch from Freelancer Model
        $data = Bill::all();
        $details_bill = details_bill::all(); //fetch from details_bill Model
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view(
            'project.show',
            compact(
                'd',
                'client',
                'employee',
                'subcontractor',
                'freelancer',
                'data',
                'details_bill',
                'userName'
            )
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $d = Project::find($id);
        $client = Client::all(); //fetch from Client Model
        $bill = Bill::all(); //fetch from Bill Model
        $employee = Employee::all(); //fetch from Emplote Model
        $subcontractor = Subcontractor::all(); //fetch from Subcontractor Model
        $freelancer = Freelancer::all(); //fetch from Freelancer Model
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view(
            'project.edit',
            compact(
                'd',
                'client',
                'bill',
                'employee',
                'subcontractor',
                'freelancer',
                'userName'
            )
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
        $d = Project::find($id);
        $request->validate([
            'project_title' => 'required',
            'description' => 'required',
            'client_id' => 'required',
            'employee_id' => 'required',
            'start_date' => 'required',
            'due_date' => 'required',
            'project_bill' => 'required',
            'project_amount' => 'required',
            'status' => 'required',
        ]);

        $d->update($request->all());

        return redirect()
            ->route('project.index')
            ->with('success', 'Project updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Project::find($id);
        $d->delete();
        return redirect()
            ->route('project.index')
            ->with('success', 'Project deleted successfuly');
    }
}
