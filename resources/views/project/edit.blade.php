@extends('layouts.admin')

@section('title', 'Update Project')

@section('content')
   <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Dashboard</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Project</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">
                        <i class="bi bi-plus-circle"></i>  Add Employee
                    </button> -->
                    <a href="{{ route('project.index') }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Project</a>
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

                                
                            <h6 class="mb-0 text-uppercase">Update Project</h6>
                            <hr/>
                            <form class="form-body row g-3" action="{{ route('project.update', $d->id) }}" method="POST" >
                                @csrf  
                                @method('PUT')
                            
                                <div class="col-md-12">
                                    <label for="project_title" class="form-label">Project Title</label>
                                    <input type="text" class="form-control " value="{{ $d->project_title}}" id="project_title" name="project_title" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control radius-10" id="description" name="description" rows="3" required>{{ $d->description}}</textarea>                                       
                                </div>                                    
                                

                                <div class="col-md-6">
                                        <label for="client_id" class="form-label">Client</label>
                                        <select id="client_id" name="client_id" class="form-select " required>
                                            {{-- <option value="" disabled selected hidden>Choose...</option> --}}
                                            <option value="{{ $d->client_id}}" hidden>{{$clientName = DB::table('clients')->where('id', $d->client_id)->value('name')}}</option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($client as $chosen) 
                                            <option value="{{$chosen->id}}">{{$chosen->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                <div class="col-md-6">
                                    <label for="employee_id" class="form-label">Assigned Employee</label>
                                    <select id="employee_id" name="employee_id" class="form-select " required>
                                        {{-- <option value="" disabled selected hidden>Choose...</option> --}}
                                        <option value="{{ $d->employee_id}}" hidden>{{$employeeName = DB::table('employees')->where('id', $d->employee_id)->value('name')}}</option>
                                        {{-- Loop and Populate your data --}}
                                        @foreach($employee as $emp) 
                                        <option value="{{$emp->id}}">{{$emp->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                                <div class="col-4">
                                    <label for="freelancer_id" class="form-label">Freelancer</label>
                                    <select id="freelancer_id" name="freelancer_id" class="form-select ">
                                        <option value="{{ $d->freelancer_id}}" hidden>{{$freelancerName = DB::table('freelancers')->where('id', $d->freelancer_id)->value('name')}}</option>
                                        {{-- Loop and Populate your data --}}
                                        @foreach($freelancer as $free) 
                                        <option value="{{$free->id}}">{{$free->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="start_date" class="form-label">Start Date</label>
                                    <input type="date" class="form-control " value="{{ $d->start_date}}" id="start_date" name="start_date" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="due_date" class="form-label">Due Date</label>
                                    <input type="date" class="form-control " value="{{ $d->due_date}}" id="due_date" name="due_date" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="project_bill" class="form-label">Project Bill</label>
                                    <select id="project_bill" name="project_bill" class="form-select " required>
                                        {{-- <option value="" disabled selected hidden>Choose...</option> --}}
                                        <option value="{{ $d->project_bill}}" hidden>{{$projectBill = DB::table('bills')->where('id', $d->project_bill)->value('bill_title')}}</option>
                                        {{-- Loop and Populate your data --}}
                                        @foreach($bill as $b) 
                                        <option value="{{$b->id}}">{{$b->bill_title}}</option>
                                        @endforeach
                                    </select>
                                </div>                                           
                                <div class="col-md-4">
                                    <label for="project_amount" class="form-label">Project Amount</label>
                                    <input type="text" class="form-control " value="{{ $d->project_amount}}" id="project_amount" name="project_amount" required>
                                </div>                                    
                                <div class="col-md-4">
                                    <label for="status" class="form-label">Status</label>
                                    <select id="status" name="status" class="form-select " required>
                                        <option value="{{ $d->status }}" hidden>{{ $d->status }}</option>
                                        <option value="NewProject">NewProject</option>                                            
                                        <option value="InProgress">InProgress</option>
                                        <option value="OnHold">OnHold</option> 
                                        <option value="Completed">Completed</option>
                                    </select>
                                </div>
                                <div class="col-md-4 showHide">
                                    <label for="completion" class="form-label showHide">Percentage Progress</label>
                                    <input type="range" class="form-range" id="progress" name="progress" value="{{ $d->progress}}" min="0" max="100" oninput="this.nextElementSibling.value = this.value">
                                    <output class="">0</output>&nbsp;%
                                </div> 
                                
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary radius-30">Update Project</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    </div>
                </div>
				
	</main>
    <!--end page main-->
@endsection
