@extends('layouts.admin')

@section('title', 'Add Vehicle')

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
                            <li class="breadcrumb-item active" aria-current="page">Vehicle</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVehicle">
                        <i class="bi bi-plus-circle"></i>  Add Vehicle
                    </button> -->
                    <a href="{{ route('vehicle.index') }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Vehicle</a>
                </div>
            </div>
        <!--end breadcrumb-->
				<!-- <h6 class="mb-0 text-uppercase">Manage Vehicle</h6> -->
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

                                
                            <h6 class="mb-0 text-uppercase">Add Vehicle</h6>
                            <hr/>
                                <form class="form-body" action="{{ route('vehicle.store') }}" method="POST" >
                                    @csrf   

                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="vehicleCode" class="form-label">Vehicle Code (E.g PGSV001)</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="vehicle_code" id="vehicle_code" placeholder="Vehicle Code" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="plate_no" class="form-label">Vehicle Plate Number</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="plate_no" id="plate_no" placeholder="Vehicle Plate Number" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="manufacturer" class="form-label">Vehicle Manufacturer (Eg Toyota)</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="manufacturer" id="manufacturer" placeholder="Vehicle Manufacturer" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="model" class="form-label">Vehicle Model (Eg Camry)</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="model" id="model" placeholder="Vehicle Model" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="year" class="form-label">Vehicle Year (Eg 2010)</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="year" id="year" placeholder="Vehicle Year" required>
                                            </div>
                                        </div>
                                        <div >
                                            <button type="submit" class="btn btn-primary radius-30">Add Vehicle</button>
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
