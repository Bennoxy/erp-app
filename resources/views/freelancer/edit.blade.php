@extends('layouts.admin')

@section('title', 'Update Freelancer')

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
                            <li class="breadcrumb-item active" aria-current="page">Freelancer</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">
                        <i class="bi bi-plus-circle"></i>  Add Employee
                    </button> -->
                    <a href="{{ route('freelancer.index') }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Freelancer</a>
                </div>
            </div>
        <!--end breadcrumb-->
				<!-- <h6 class="mb-0 text-uppercase">Manage Employee</h6> -->
				<hr/>
                <div class="row">
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

                                
                            <h6 class="mb-0 text-uppercase">Update Freelancer</h6>
                            <hr/>
                                <form class="form-body row g-3" action="{{ route('freelancer.update', $d->id) }}" method="POST" >
                                    @csrf
                                    @method('PUT')  

                                
                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control radius-30 ps-5" id="name" value="{{ $d->name }}" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="location" class="form-label">Location</label>
                                        <select id="location" name="location" class="form-select radius-30 ps-5" required>
                                            <option value="" disabled selected hidden>- Select State -</option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($state as $st) 
                                            <option value="{{$st->id}}">{{$st->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="department" class="form-label">Trade</label>
                                        <input type="text" class="form-control radius-30 ps-5" id="trade" value="{{ $d->trade }}" name="trade" required>
                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control radius-30 ps-5" id="address" value="{{ $d->address }}" name="address" placeholder="1234 Main St" required>
                                    </div>                                    
                                    <div class="col-md-3">
                                        <label for="enrollment_Year" class="form-label">Enrollment Date</label>
                                        <input type="date" class="form-control radius-30 ps-5" id="enrollment_Year" value="{{ $d->enrollment_Year }}" name="enrollment_Year" required>
                                    </div>
                                    
                                    <div class="col-md-3">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select id="gender" name="gender" value="{{ $d->gender }}" class="form-select radius-30 ps-5" required>
                                            <option selected>- Select Gender -</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="state_of_Origin" class="form-label">State of Origin</label>
                                        <select id="state_of_Origin" name="state_of_Origin" class="form-select radius-30 ps-5" required>
                                            <option value="" disabled selected hidden>- Select State -</option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($state as $st) 
                                            <option value="{{$st->id}}">{{$st->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="local_Government" class="form-label">Local Government</label>
                                        <select id="local_Government" name="local_Government" class="form-select radius-30 ps-5" required>                                            
                                        </select>
                                    </div>
                                    <br><br>

                                    <h6 class="mb-0 text-primary">Educational Background</h6>
                                    <hr/>


                                    <div class="col-md-3">
                                        <label for="highest_Qualification" class="form-label">Highest Qualification</label>
                                        <input type="text" class="form-control radius-30 ps-5" id="highest_Qualification" value="{{ $d->highest_Qualification }}" name="highest_Qualification" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="institution" class="form-label">Institution</label>
                                        <input type="text" class="form-control radius-30 ps-5" id="institution" value="{{ $d->institution }}" name="institution" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="professional_Qualification" class="form-label">Professional Qualification</label>
                                        <input type="text" class="form-control radius-30 ps-5" id="professional_Qualification" value="{{ $d->professional_Qualification }}" name="professional_Qualification" required>
                                    </div>
                                    <br><br>

                                    <h6 class="mb-0 text-primary">Others</h6>
                                    <hr/>
                                    <div class="col-md-4">
                                        <label for="ambition" class="form-label">Ambition</label>
                                        <input type="text" class="form-control radius-30 ps-5" id="ambition" value="{{ $d->ambition }}" name="ambition" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="text" class="form-control radius-30 ps-5" id="phone" value="{{ $d->phone }}" name="phone" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control radius-30 ps-5" id="email" value="{{ $d->email }}" name="email" required>
                                    </div>
                                    <br><br>

                                    
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary radius-30">Update Freelancer</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
				
	</main>
    <!--end page main-->
@endsection
