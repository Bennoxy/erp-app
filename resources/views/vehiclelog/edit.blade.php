@extends('layouts.admin')

@section('title', 'Manage Vehicle Log')

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
                            <li class="breadcrumb-item active" aria-current="page">Vehicle Log</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVehicle">
                        <i class="bi bi-plus-circle"></i>  Add Vehicle
                    </button> -->
                    <a href="{{ route('vehiclelog.index') }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Vehicle Log</a>
                </div>
            </div>
        <!--end breadcrumb-->
				<!-- <h6 class="mb-0 text-uppercase">Manage Vehicle</h6> -->
				<hr/>

                {{-- <div class="row">
					<div class="col-xl-9 mx-auto">
						<h6 class="mb-0 text-uppercase">Basic Validation</h6>
						<hr/>
						<div class="card">
							<div class="card-body">
								<div class="p-4 border rounded">
									<form class="row g-3 needs-validation" novalidate>
										<div class="col-md-4"> --}}

                <div class="row">
					<div class="col-xl-9 mx-auto">
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

                                
                            <h6 class="mb-0 text-uppercase">Add Vehicle Log</h6>
                            <hr/>
                                <form class="form-body" action="{{ route('vehiclelog.store') }}" method="POST" >
                                    @csrf   

                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label for="employee_name" class="form-label">Employee Name</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="name" value="{{ $d->name }}" id="name" placeholder="Vehicle Code" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="model" class="form-label">Vehicle Model (Eg Camry)</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="model" value="{{ $d->model }}" id="model" placeholder="Vehicle Model" readonly>
                                            </div>
                                        </div>                                        
                                        <div class="col-md-6">
                                            <label for="date" class="form-label">Destination</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="destination" value="{{ $d->destination }}" id="destination" placeholder="Destination" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="date" class="form-label">Date</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="date" class="form-control radius-30 ps-5" name="date" value="{{ $d->date }}" id="date" placeholder="Date" readonly>
                                            </div>
                                        </div>                                        
                                        <div class="col-md-6">
                                            <label for="time_out" class="form-label">Time Out</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="time_out" value="{{ $d->time_out }}" id="time_out" placeholder="Time Out" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="time_in" class="form-label">Time In</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="time_in" value="{{ $d->time_in }}" id="time_in" placeholder="Time In" required>
                                            </div>
                                        </div>
                                        <div >
                                            <button type="submit" class="btn btn-primary radius-30">Update Vehicle Log</button>
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
