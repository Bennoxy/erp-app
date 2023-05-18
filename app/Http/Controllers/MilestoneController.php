<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Milestone;
use App\Models\Task;
use App\Models\User;
use Session;

class MilestoneController extends Controller
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
        $milestone = Milestone::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('milestone.create', compact('d', 'milestone', 'userName'));
    }

    public function createMilestone($id)
    {
        $d = Project::find($id);
        $milestone = Milestone::all()->where('project_id', $d->id);
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('milestone.create', compact('d', 'milestone','userName'));
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
        ]);
        $mile = Milestone::create($request->all());
        $proj_id = $mile->project_id;
        // return redirect()
        //     ->back()
        //     ->with('success', 'Task created successfuly');

        return redirect()
            ->route('milestone.show', [$proj_id])
            ->with('success', 'Milestone created successfully');
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
        $data = Milestone::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('milestone.show', compact('d', 'data','userName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $milestone = Milestone::find($id);
        $d = Project::where('id', $milestone->project_id)->value('id');       
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('milestone.edit', compact('d', 'milestone', 'userName'));
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
        $d = Milestone::find($id);
        $request->validate([
            'name' => 'required',
        ]);
        $mile = $d->update($request->all());
        $proj_id = $d->project_id;
        // return redirect()
        //     ->back()
        //     ->with('success', 'Task created successfuly');

        return redirect()
            ->route('milestone.show', [$proj_id])
            ->with('success', 'Milestone updated successfuly');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Milestone::find($id);
        $proj_id = $d->project_id;
        $d->delete();
        return redirect()
            ->route('milestone.show', [$proj_id])
            ->with('success', 'Milestone deleted successfully');
    }
}
