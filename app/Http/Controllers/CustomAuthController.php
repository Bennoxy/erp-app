<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
use App\Models\Project;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Subcontractor;
use App\Models\Freelancer;
use App\Models\Bill;
use App\Models\Task;
use App\Models\Vehicle;

class CustomAuthController extends Controller
{
    public function login () {
        return view('auth.login');
    }

    public function registration () {
        return view('auth.registration');
    }

    public function register (Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if ($res) {
            return back()->with('success','User Registered Successfully!');
        }else {
            return back()->with('fail','Something Went Wrong!');
        }
    }

    public function loginUser (Request $request) {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                Session::put('loginId', $user->id);
                switch($user->role){
                    case 1:
                        return redirect('dashboard');//admin
                        break;
                    case 2:
                        return redirect('dashboard');//hr
                        break;
                    case 3:
                        return redirect('dashboard');//accountant
                        break;
                    case 4:
                        return redirect('dashboard');//qs
                        break;
                    case 5:
                        return redirect('dashboard');//projectController
                        break;
                    case 6:
                        return redirect('dashboard');//expeditor
                        break;
                    case 7:
                        return redirect('staffdashboard');//staff
                        break;
                    case 8:
                        return redirect('dashboard');//technical
                        break;
                } 
            } else {
                return back()->with('fail','This password is not correct');
            }
        } else {
            return back()->with('fail','This email is not registered');
        }
    }

    public function dashboard()
    {
        $project = Project::all();
        $client = Client::all();
        $employee = Employee::all();
        $subcontractor = Subcontractor::all();
        $freelancer = Freelancer::all();
        $bill = Bill::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
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
                'userName',
                'vehicle',
            )
        );
    }

    public function staffdashboard()
    {
        $project = Project::all();
        $client = Client::all();
        $employee = Employee::all();
        $subcontractor = Subcontractor::all();
        $freelancer = Freelancer::all();
        $bill = Bill::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
        $data = Task::all()->where('employee_id', Session::get('loginId'));
        $vehicle = Vehicle::all();
        
        return view(
            'staff.dashboard',
            compact(
                'project',
                'client',
                'employee',
                'subcontractor',
                'freelancer',
                'bill',
                'userName',
                'vehicle',
                'data',
            )
        );
    }

    public function logout () {
        if (Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('login');
        }
        return redirect('login');
    }
}
