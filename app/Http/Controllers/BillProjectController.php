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

class BillProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view(
            'billProject.show',
            compact(
                'd',
                'client',
                'employee',
                'subcontractor',
                'freelancer',
                'data',
                'details_bill'
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
