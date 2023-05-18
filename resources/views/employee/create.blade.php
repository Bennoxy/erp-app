@extends('layouts.admin')

@section('title', 'Add Employee')

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

                                
                            <h6 class="mb-0 text-uppercase">Add Employee</h6>
                            <hr/>
                                <form class="form-body row g-3" action="{{ route('employee.store') }}" enctype="multipart/form-data" method="POST" >
                                    @csrf  

                                    <div class="col-md-12">
                                        <label for="name" class="form-label">Name</label>
                                        <select id="name" name="name" class="form-select select-search" style="font-size: 1rem;" required>
                                            <option value="" disabled selected hidden style="height: 40px;">- Select - </option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($user as $u) 
                                            <option value="{{$u->id}}">{{$u->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="position" class="form-label">Position</label>
                                        <select id="position" name="position" class="form-select select-search" style="font-size: 1rem;" required>
                                            <option value="" disabled selected hidden>- Select Position -</option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($position as $pos) 
                                            <option value="{{$pos->id}}">{{$pos->position_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="department" class="form-label">Department</label>
                                        <select id="department_id" name="department_id" class="form-select select-search" style="font-size: 1rem;" required>
                                            <option value="" disabled selected hidden>- Select Department -</option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($department as $dep) 
                                            <option value="{{$dep->id}}">{{$dep->department_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="address" class="form-label">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
                                    </div>                                    
                                    <div class="col-md-4">
                                        <label for="employment_Year" class="form-label">Employment Year</label>
                                        <input type="date" class="form-control" id="employment_Year" name="employment_Year" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" maxlength="11" pattern="[0-9]{11}" class="form-control" id="phone" name="phone" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="gender" class="form-label">Gender</label>
                                        <select id="gender" name="gender" class="form-select" required>
                                            <option selected>- Select Gender -</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="state_of_Origin" class="form-label">State of Origin</label>
                                        <select id="state_of_Origin" name="state_of_Origin" class="form-select select-search" style="font-size: 1rem;" required>
                                            <option value="" disabled selected hidden>- Select State -</option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($state as $st) 
                                            <option value="{{$st->id}}">{{$st->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="local_Government" class="form-label">Local Government</label>
                                        <select id="local_Government" name="local_Government" class="form-select select-search" style="font-size: 1rem;" required>                                            
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="marital_Status" class="form-label">Marital Status</label>
                                        <select id="marital_Status" name="marital_Status" class="form-select" required>
                                            <option selected>- Select -</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Divorced">Divorced</option>
                                            <option value="Widowed">Widowed</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="no_of_Children" class="form-label">No of Children</label>
                                        <input type="text" class="form-control" id="no_of_Children" name="no_of_Children" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="date_of_Birth" class="form-label">Date of Birth</label>
                                        <input type="date" class="form-control" id="date_of_Birth" name="date_of_Birth" required>
                                    </div>
                                    <br><br>

                                    <h6 class="mb-0 text-primary mt-5">Next of Kin</h6>
                                    <hr/>


                                    <div class="col-md-6">
                                        <label for="nOK_Name" class="form-label">Name of Next of Kin</label>
                                        <input type="text" class="form-control" id="nOK_Name" name="nOK_Name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nOK_Phone" class="form-label">Phone of Next of Kin</label>
                                        <input type="tel" maxlength="11" pattern="[0-9]{11}" class="form-control" id="nOK_Phone" name="nOK_Phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nOK_Address" class="form-label">Address of Next of Kin</label>
                                        <input type="text" class="form-control" id="nOK_Address" name="nOK_Address" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="nOK_Relationship" class="form-label">Relationship with Next of Kin</label>
                                        <input type="text" class="form-control" id="nOK_Relationship" name="nOK_Relationship" required>
                                    </div>
                                    <br><br>

                                    <h6 class="mb-0 text-primary mt-5">Educational Background</h6>
                                    <hr/>


                                    <div class="col-md-6">
                                        <label for="highest_Qualification" class="form-label">Highest Qualification</label>
                                        <input type="text" class="form-control" id="highest_Qualification" name="highest_Qualification" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="institution" class="form-label">Institution</label>
                                        <input type="text" class="form-control" id="institution" name="institution" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="professional_Qualification" class="form-label">Professional Qualification</label>
                                        <input type="text" class="form-control" id="professional_Qualification" name="professional_Qualification" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="ambition" class="form-label">Ambition</label>
                                        <input type="text" class="form-control" id="ambition" name="ambition" required>
                                    </div>
                                    <br><br>

                                    <h6 class="mb-0 text-primary mt-5">Health</h6>
                                    <hr/>


                                    <div class="col-md-4">
                                        <label for="blood_Group" class="form-label">Blood Group</label>
                                        <input type="text" class="form-control" id="blood_Group" name="blood_Group" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="genotype" class="form-label">Genotype</label>
                                        <input type="text" class="form-control" id="genotype" name="genotype" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="allergies" class="form-label">Allergies</label>
                                        <input type="text" class="form-control" id="allergies" name="allergies" required>
                                    </div>
                                    <br><br>

                                    <h6 class="mb-0 text-primary mt-5">Others</h6>
                                    <hr/>


                                    <div class="col-md-6">
                                        <label for="hobbies" class="form-label">Hobbies</label>
                                        <input type="text" class="form-control" id="hobbies" name="hobbies" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="language_Proficiency" class="form-label">Language Proficiency</label>
                                        <input type="text" class="form-control" id="language_Proficiency" name="language_Proficiency" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="personal_Core_Values" class="form-label">Personal Core Values</label>
                                        <input type="text" class="form-control" id="personal_Core_Values" name="personal_Core_Values" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="image" class="form-label">Add Passport (Jpeg or Png)</label>
                                        <input type="file" class="form-control" id="image" name="image" >
                                    </div>

                                    
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Add Employee</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                </div>
				
	</main>
    <!--end page main-->
@endsection
