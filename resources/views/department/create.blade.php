@extends('layouts.admin')

@section('title', 'Add Department')

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
                            <li class="breadcrumb-item active" aria-current="page">Department</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDepartment">
                        <i class="bi bi-plus-circle"></i>  Add Department
                    </button> -->
                    <a href="{{ route('department.index') }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Department</a>
                </div>
            </div>
        <!--end breadcrumb-->
				<!-- <h6 class="mb-0 text-uppercase">Manage Department</h6> -->
				<hr/>

                <div class="row">
					<div class="col-xl-6 mx-auto">
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

                                
                            <h6 class="mb-0 text-uppercase">Add Department</h6>
                            <hr/>
                                <form class="form-body" action="{{ route('department.store') }}" method="POST" >
                                    @csrf   

                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="departmentCode" class="form-label">Department Code (E.g PD001)</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="department_code" id="department_code" placeholder="Department Code" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="departmentName" class="form-label">Department Name</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="department_name" id="department_name" placeholder="Department Name" required>
                                            </div>
                                        </div>
                                        <div >
                                            <button type="submit" class="btn btn-primary radius-30">Add Department</button>
                                        </div>
                                    
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                                               
				
				
	</main>
    <!--end page main-->
@endsection
