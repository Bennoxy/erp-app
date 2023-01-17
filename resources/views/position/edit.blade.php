@extends('layouts.admin')

@section('title', 'Update Position')

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
                            <li class="breadcrumb-item active" aria-current="page">Position</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addPosition">
                        <i class="bi bi-plus-circle"></i>  Add Position
                    </button> -->
                    <a href="{{ route('position.index') }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Position</a>
                </div>
            </div>
        <!--end breadcrumb-->
				<!-- <h6 class="mb-0 text-uppercase">Manage Position</h6> -->
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

                                
                            <h6 class="mb-0 text-uppercase">Update Position</h6>
                            <hr/>
                                <form class="form-body" action="{{ route('position.update', $d->id) }}" method="POST" >
                                    @csrf   
                                    @method('PUT')

                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="positionCode" class="form-label">Position Code (E.g PD001)</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="position_code" value="{{ $d->position_code }}" id="position_code" placeholder="Position Code" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="positionName" class="form-label">Position Name</label>
                                            <div class="ms-auto position-relative">
                                                <div class="position-absolute top-50 translate-middle-y search-icon px-3"></div>
                                                <input type="text" class="form-control radius-30 ps-5" name="position_name" value="{{ $d->position_name }}" id="position_name" placeholder="Position Name" required>
                                            </div>
                                        </div>
                                        <div >
                                            <button type="submit" class="btn btn-primary radius-30">Update Position</button>
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
