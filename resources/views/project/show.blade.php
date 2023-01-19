@extends('layouts.admin')

@section('title', 'Bill Summary')

@section('content')
   <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->            
            <h4 class="text-primary d-print-none">{{$d->project_title}}</h4>
            <hr/>
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 d-print-none">
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
                    <a href="{{ route('project.index') }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Projects</a>
                </div>
            </div>
        <!--end breadcrumb-->  
            
        <!-- Content wrapper -->
        {{-- <div class="content-wrapper"> --}}
            <!-- Content -->
            
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills flex-column flex-md-row mb-3 d-print-none">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('project.show',$d->id) }}"><i class="bi bi-file-text me-1"></i> Summary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('billProject.show',$d->id) }}"><i class="bi bi-currency-bitcoin me-1"></i> Bill</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.show',$d->id) }}"><i class="bi bi-people me-1"></i> Assigned Users</a>
                        </li> --}}
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('milestone.show',$d->id) }}"><i class="bi bi-signpost-2 me-1"></i> Milestones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('taskProject',$d->id) }}"><i class="bi bi-list-task me-1"></i> Tasks</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('document.show',$d->id) }}"><i class="bi bi-folder2 me-1"></i> Documents</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('comment.show',$d->id) }}"><i class="bi bi-chat-right-text me-1"></i> Comments</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('inventory.show',$d->id) }}"><i class="bi bi-briefcase me-1"></i> Inventory</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('procurement.show',$d->id) }}"><i class="bi bi-receipt me-1"></i> Procurements</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('variation.show',$d->id) }}"><i class="bi bi-currency-exchange me-1"></i> Variations</a>
                        </li>
                        
                    </ul>
                <div class="card mb-4" id="toprint">
                    <div class="card-body">                        
                        <div class="row">
                            <div class="col-md-6">
                                <h6>Description</h6>
                                <div class="mb-4">
                                    {{ $d->description }}
                                </div>
                                <div class="mb-4">
                                    <h6>Assigned To</h6>{{ $employee = DB::table('employees')->where('id', $d->id)->value('name') }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h6>Progress</h6>
                                <div class="mb-4">
                                    
                                </div>
                                <h6>Comments</h6>
                                <div class="mb-4">
                                    {{ $d->comment }}
                                </div>
                            </div>
                        </div>

                        
                    </div>
                    
                    
                    
                </div>
                
                </div>
            </div>
            
            <!-- / Content -->
        {{-- </div> --}}
        <!-- Content wrapper -->
            
                                
                        
                    
                
				
	</main>
    <!--end page main-->
@endsection
