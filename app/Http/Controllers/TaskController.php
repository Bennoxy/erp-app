<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Employee;
use App\Models\Task;
use App\Models\Milestone;
use App\Models\User;
use Session;

class TaskController extends Controller
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
        $d = Project::all();
        $employee = Employee::all();
        $milestone = Milestone::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('task.create', compact('d', 'employee', 'milestone','userName'));
    }

    public function createTask($id)
    {
        $d = Project::find($id);
        $employee = Employee::all();
        $milestone = Milestone::all()->where('project_id', $d->id);
        $user = User::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
        // $users = DB::table('users')->where('votes', 100)->get();
        return view('task.createTask', compact('d', 'employee', 'milestone','userName','user'));
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
            'title' => 'required',
            'description' => 'required',
            'deadline' => 'required',
            'employee_id' => 'required',
            'status' => 'required',
        ]);
        $task = Task::create($request->all());
        $proj_id = $task->project_id;
        // return redirect()
        //     ->back()
        //     ->with('success', 'Task created successfuly');

        return redirect()
            ->route('taskProject', [$proj_id])
            ->with('success', 'Task created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);
        $d = Project::where('id', $task->project_id)->value('id');
        $employee = Employee::all(); //fetch from Employee Model
        $milestone = Milestone::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('task.show', compact('d', 'employee', 'task', 'milestone','userName'));
    }

    public function showProject($id)
    {
        $d = Project::find($id);
        $employee = Employee::all(); //fetch from Emplote Model
        $user = User::all();
        $data = Task::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('task.project', compact('d', 'employee', 'data','userName','user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editTask($id)
    {
        $task = Task::find($id);
        $d = Project::where('id', $task->project_id)->value('id');
        $employee = Employee::all();
        $user = User::all();
        $milestone = Milestone::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view(
            'task.editTask',
            compact('d', 'task', 'employee', 'milestone','userName','user')
        );
    }

    public function edit($id)
    {
        $d = Task::find($id);
        $employee = Employee::all();
        $project = Project::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('task.edit', compact('d', 'employee', 'project','userName'));
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
        $task = Task::find($id);
        $request->validate([
            'title' => 'required',
            'deadline' => 'required',
            'employee_id' => 'required',
            'title' => 'required',
            'status' => 'required',
        ]);

        $d->update($request->all());
        return redirect()
            ->route('task.index')
            ->with('success', 'Task updated successfully');
    }

    public function updateTask(Request $request, $id)
    {
        $d = Task::find($id);
        $request->validate([
            'title' => 'required',
            'deadline' => 'required',
            'employee_id' => 'required',
            'title' => 'required',
            'status' => 'required',
        ]);

        $taskUpdate = $d->update($request->all());
        $proj_id = $d->project_id;
        return redirect()
            ->route('taskProject', [$proj_id])
            ->with('success', 'Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyTask($id)
    {
        $d = Task::find($id);
        $task = $d->delete();
        $proj_id = $task->project_id;
        return redirect()
            ->route('taskProject', [$proj_id])
            ->with('success', 'Task deleted successfully');
    }
    public function destroy($id)
    {
        $d = Task::find($id);
        $proj_id = $d->project_id;
        $d->delete();
        return redirect()
            ->route('taskProject', [$proj_id])
            ->with('success', 'Task deleted successfully');
    }
}
