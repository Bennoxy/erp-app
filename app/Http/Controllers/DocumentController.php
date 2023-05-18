<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Document;
use App\Models\User;
use Session;

class DocumentController extends Controller
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
    public function createDocument($id)
    {
        $d = Project::find($id);
        $file = Document::all()->where('project_id', $d->id);
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('document.create', compact('d', 'file','userName'));
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
            'document_name' => 'required',
            'file' =>
                'required|file|mimes:png,jpg,pdf,xls,xlsx,doc,docx,ppt,pptx',
        ]);

        $input = $request->all();

        // if ($request->hasfile('file')) {
        //     $doc = $request->file('file');
        //     $docname = $doc->getClientOriginalName();
        //     $doc->move(public_path('/documents'), $docname);
        //     $input['file'] = $docname;
        // }

        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $path = public_path() . '/files';
            $file->move($path, $filename);
            $input['file'] = $filename;
        }

        // if ($request->hasfile('file')) {
        //     $file = $request->file('file');
        //     $extenstion = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extenstion;
        //     $file->move(public_path('/files'), $filename);
        //     // $employee->image = $filename;
        // }

        $docFile = Document::create($input);
        $proj_id = $docFile->project_id;
        // return redirect()
        //     ->back()
        //     ->with('success', 'Task created successfuly');

        return redirect()
            ->route('document.show', [$proj_id])
            ->with('success', 'Document uploaded successfuly');
    }

    public function download($id)
    {
        $d = Document::find($id);
        $path = public_path() . '/files' . '/';
        return response()->download($path . $d->file);
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
        $data = Document::all();
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('document.show', compact('d', 'data','userName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $doc = Document::find($id);
        $d = Project::where('id', $doc->project_id)->value('id');
        $userName = User::where('id',Session::get('loginId'))->value('name');
        return view('document.edit', compact('d', 'doc','userName'));
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
        $d = Document::find($id);
        $d->delete();

        $request->validate([
            'document_name' => 'required',
            'file' =>
                'required|file|mimes:png,jpg,pdf,xls,xlsx,doc,docx,ppt,pptx',
        ]);

        $input = $request->all();

        // if ($request->hasfile('file')) {
        //     $doc = $request->file('file');
        //     $docname = $doc->getClientOriginalName();
        //     $doc->move(public_path('/documents'), $docname);
        //     $input['file'] = $docname;
        // }

        if ($request->hasfile('file')) {
            $file = $request->file('file');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $path = public_path() . '/files';
            $file->move($path, $filename);
            $input['file'] = $filename;
        }

        // if ($request->hasfile('file')) {
        //     $file = $request->file('file');
        //     $extenstion = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extenstion;
        //     $file->move(public_path('/files'), $filename);
        //     // $employee->image = $filename;
        // }

        $docFile = Document::create($input);
        $proj_id = $docFile->project_id;
        // return redirect()
        //     ->back()
        //     ->with('success', 'Task created successfuly');

        return redirect()
            ->route('document.show', [$proj_id])
            ->with('success', 'Document updated successfuly');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $d = Document::find($id);
        $proj_id = $d->project_id;
        $d->delete();
        return redirect()
            ->route('document.show', [$proj_id])
            ->with('success', 'Document deleted!');
    }
}
