@extends('layouts.admin')

@section('title', 'Edit Task')

@section('content')
   <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
            <h4 class="text-primary">{{ $proj = DB::table('projects')->where('id', $d)->value('project_title') }} > {{ $task->title }}</h4>
            {{-- <h4 class="text-primary">{{$project_title = DB::table('projects')->where('id',$data->project_id)->value('project_title')}}</h4> --}}
            <hr/>
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Dashboard</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Project</li>
                            <li class="breadcrumb-item active" aria-current="page">Task</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">
                        <i class="bi bi-plus-circle"></i>  Add Employee
                    </button> -->
                    <a href="{{ route('taskProject',$d) }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Tasks</a>
                </div>
            </div>
        <!--end breadcrumb-->
				<!-- <h6 class="mb-0 text-uppercase">Manage Employee</h6> -->
				<hr/>
                <div class="row">
                    <div class="col-xl-8 mx-auto">
                        
                    <div class="card">
                        <div class="card-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input <br> <br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                                
                            <h6 class="mb-0 text-uppercase">Edit task</h6>
                            <hr/>
                                <form class="form-body row g-3" action="{{ route('taskProjectUpdate', $task->id) }}" method="POST" >
                                    @csrf  
                                    @method('PUT')

                                
                                    <div class="col-md-12">
                                        <label for="title" class="form-label">Task Title</label>
                                        <input type="text" class="form-control " id="title" value="{{ $task->title }}" name="title" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Description</label>
                                        <textarea class="form-control radius-10" id="description" name="description" rows="3" required>{{ $task->description }}</textarea>                                       
                                    </div>                                    
                                    <div class="col-md-6">
                                        <label for="deadline" class="form-label">Deadline</label>
                                        <input type="date" class="form-control " id="deadline" value="{{ $task->deadline }}" name="deadline" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="employee_id" class="form-label">Assigned Employee</label>
                                        <select id="employee_id" name="employee_id" class="form-select select-search" style="font-size: 1rem;" required>
                                            <option value="{{ $task->employee_id }}" hidden>{{$employeeName = DB::table('users')->where('id', $task->employee_id)->value('name')}}</option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($user as $emp) 
                                            <option value="{{$emp->id}}">{{$emp->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="status" class="form-label">Status</label>
                                        <select id="status" name="status" class="form-select " required>
                                            <option value="{{ $task->status }}" hidden>{{ $task->status }}</option>
                                            <option value="NewTask">NewTask</option>                                            
                                            <option value="InProgress">InProgress</option>
                                            <option value="Completed">Completed</option>
                                        </select>
                                    </div>
                                    <input type="hidden" name="project_id" value="{{ $task->project_id }}">
                                    <div class="col-md-6">
                                        <label for="milestone_id" class="form-label">Milestone</label>
                                        <select id="milestone_id" name="milestone_id" class="form-select ">
                                            <option value="{{ $task->milestone_id }}" hidden>{{$milestoneName = DB::table('milestones')->where('id', $task->milestone_id)->value('name')}}</option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($milestone as $mile) 
                                            <option value="{{$mile->id}}">{{$mile->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>                                 
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Update Task</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                    </div>
                </div>
				
	</main>
    <!--end page main-->
@endsection
