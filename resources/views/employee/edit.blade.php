@extends('layouts.admin')

@section('title', 'Update Employee')

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
                            <li class="breadcrumb-item active" aria-current="page">Employee</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">
                        <i class="bi bi-plus-circle"></i>  Add Employee
                    </button> -->
                    <a href="{{ route('employee.index') }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Employee</a>
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

                                
                            <h6 class="mb-0 text-uppercase">Update Employee</h6>
                            <hr/>
                                <form class="form-body row g-3" action="{{ route('employee.update', $d->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')  

                                
                                    <div class="col-md-12">
                                        <label for="Name" class="form-label">Name</label>
                                        <input type="text" class="form-control" value="{{ $d->name }}" id="Name" name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="position" class="form-label">Position</label>
                                        <select id="position" name="position" class="form-select" required>
                                            <option value="{{ $d->position }}" hidden>{{ $positionEmp = DB::table('positions')->where('id', $d->position)->value('position_name') }}</option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($position as $pos) 
                                            <option value="{{$pos->id}}">{{$pos->position_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="department" class="form-label">Department</label>
                                        <select id="department_id" name="department_id" class="form-select" required>
                                            <option value="{{ $d->department_id }}" hidden>{{ $departmentEmp = DB::table('departments')->where('id', $d->department_id)->value('department_name') }}</option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($department as $dep) 
                                            <option value="{{$dep->id}}">{{$dep->department_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="Address" class="form-label">Address</label>
                                        <input type="text" class="form-control" value="{{ $d->address }}" id="Address" name="address" placeholder="1234 Main St" required>
                                    </div>                                    
                                    <div class="col-md-4">
                                        <label for="Emplyment_Year" class="form-label">Employment Year</label>
                                        <input type="date" class="form-control" value="{{ $d->employment_Year }}" id="Employment_Year" name="employment_Year" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Email" class="form-label">Email</label>
                                        <input type="email" class="form-control" value="{{ $d->email }}" id="Email" name="email" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Phone" class="form-label">Phone</label>
                                        <input type="tel" maxlength="11" pattern="[0-9]{11}" class="form-control" value="{{ $d->phone }}" id="Phone" name="phone" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Gender" class="form-label">Gender</label>
                                        <select id="Gender" name="gender" class="form-select" required>
                                            <option value="{{ $d->gender }}" hidden>{{ $d->gender }}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="state_of_Origin" class="form-label">State of Origin</label>
                                        <select id="state_of_Origin" name="state_of_Origin" class="form-select"  required>
                                            <option value="{{ $d->state_of_Origin }}" hidden>{{ $stateEmp = DB::table('states')->where('id', $d->state_of_Origin)->value('name') }}</option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($state as $st) 
                                            <option value="{{$st->id}}">{{$st->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="local_Government" class="form-label">Local Government</label>
                                        <select id="local_Government" name="local_Government" class="form-select" required> 
                                            <option value="{{ $d->local_Government }}" hidden>{{ $localEmp = DB::table('locals')->where('id', $d->local_Government)->value('name') }}</option>                                           
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Marital_Status" class="form-label">Marital Status</label>
                                        <select id="Marital_Status" name="marital_Status" class="form-select" required>
                                            <option value="{{ $d->marital_Status }}" hidden>{{ $d->marital_Status }}</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="No_of_Children" class="form-label">No of Children</label>
                                        <input type="text" class="form-control" value="{{ $d->no_of_Children }}" id="No_of_Children" name="no_of_Children" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Date_of_Birth" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" value="{{ $d->date_of_Birth }}" id="Date_of_Birth" name="date_of_Birth" required>
                                    </div>
                                    <br><br>

                                    <h6 class="mb-0 text-primary">Next of Kin</h6>
                                    <hr/>


                                    <div class="col-md-6">
                                        <label for="NOK_Name" class="form-label">Name of Next of Kin</label>
                                        <input type="text" class="form-control" value="{{ $d->nOK_Name }}" id="NOK_Name" name="nOK_Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="NOK_Phone" class="form-label">Phone of Next of Kin</label>
                                        <input type="tel" maxlength="11" pattern="[0-9]{11}" class="form-control" value="{{ $d->nOK_Phone }}" id="NOK_Phone" name="nOK_Phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="NOK_Address" class="form-label">Address of Next of Kin</label>
                                        <input type="text" class="form-control" value="{{ $d->nOK_Address }}" id="NOK_Address" name="nOK_Address" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="NOK_Relationship" class="form-label">Relationship with Next of Kin</label>
                                        <input type="text" class="form-control" value="{{ $d->nOK_Relationship }}" id="NOK_Relationship" name="nOK_Relationship" required>
                                    </div>
                                    <br><br>

                                    <h6 class="mb-0 text-primary">Educational Background</h6>
                                    <hr/>


                                    <div class="col-md-6">
                                        <label for="Highest_Qualification" class="form-label">Highest Qualification</label>
                                        <input type="text" class="form-control" value="{{ $d->highest_Qualification }}" id="Highest_Qualification" name="highest_Qualification" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Institution" class="form-label">Institution</label>
                                        <input type="text" class="form-control" value="{{ $d->institution }}" id="Institution" name="institution" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Professional_Qualification" class="form-label">Professional Qualification</label>
                                        <input type="text" class="form-control" value="{{ $d->professional_Qualification }}" id="Professional_Qualification" name="professional_Qualification" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="Ambition" class="form-label">Ambition</label>
                                        <input type="text" class="form-control" value="{{ $d->ambition }}" id="Ambition" name="ambition" required>
                                    </div>
                                    <br><br>

                                    <h6 class="mb-0 text-primary">Health</h6>
                                    <hr/>


                                    <div class="col-md-4">
                                        <label for="Blood_Group" class="form-label">Blood Group</label>
                                        <input type="text" class="form-control" value="{{ $d->blood_Group }}" id="Blood_Group" name="blood_Group" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Genotype" class="form-label">Genotype</label>
                                        <input type="text" class="form-control" value="{{ $d->genotype }}" id="Genotype" name="genotype" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="Allergies" class="form-label">Allergies</label>
                                        <input type="text" class="form-control" value="{{ $d->allergies }}" id="Allergies" name="allergies" required>
                                    </div>
                                    <br><br>

                                    <h6 class="mb-0 text-primary">Others</h6>
                                    <hr/>


                                    
                                    <div class="col-md-6">
                                        <label for="hobbies" class="form-label">Hobbies</label>
                                        <input type="text" class="form-control" value="{{ $d->hobbies }}" id="hobbies" name="hobbies" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="language_Proficiency" class="form-label">Language Proficiency</label>
                                        <input type="text" class="form-control" value="{{ $d->language_Proficiency }}" id="language_Proficiency" name="language_Proficiency" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="personal_Core_Values" class="form-label">Personal Core Values</label>
                                        <input type="text" class="form-control" value="{{ $d->personal_Core_Values }}" id="personal_Core_Values" name="personal_Core_Values" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="image" class="form-label">Passport (Jpeg or Png)</label>
                                        <p><img src="{{ asset('public')}}/images/{{ $d->image }}" width="200" alt="Photo"></p>
                                        <input type="file" class="form-control" id="image" name="image" >
                                    </div>

                                    
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Update Employee</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
				
	</main>
    <!--end page main-->
@endsection
