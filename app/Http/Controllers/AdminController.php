<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\Project;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Subcontractor;
use App\Models\Freelancer;
use App\Models\Bill;
use App\Models\Task;
use App\Models\Vehicle;

class AdminController extends Controller
{
    //Dashboard
    public function dashboard()
    {
        $project = Project::all();
        $client = Client::all();
        $employee = Employee::all();
        $subcontractor = Subcontractor::all();
        $freelancer = Freelancer::all();
        $bill = Bill::all();
        //$task = Task::all();
        $vehicle = Vehicle::all();

        return view(
            'dashboard',
            compact(
                'project',
                'client',
                'employee',
                'subcontractor',
                'freelancer',
                'bill',
                'vehicle'
            )
        );
    }
}
