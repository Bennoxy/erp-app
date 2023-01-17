@extends('layouts.admin')

@section('title', 'Project Summary')

@section('content')
   <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->            
            <h4 class="text-primary">{{$d->project_title}}</h4>
            <hr/>
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Dashboard</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Project</li>
                            <li class="breadcrumb-item active" aria-current="page">Comments</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">
                        <i class="bi bi-plus-circle"></i>  Add Employee
                    </button> -->          
                        <a href="{{ route('documentProjectCreate',$d->id) }}" role="button" class="btn btn-danger"><i class="bi bi-plus-circle"></i>  Add Comment</a>
                     
                    <a href="{{ route('project.index') }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Comments</a>
                </div>
            </div>
        <!--end breadcrumb-->  
            
        <!-- Content wrapper -->
        {{-- <div class="content-wrapper"> --}}
            <!-- Content -->
            
            <div class="row">
                <div class="col-md-12">
                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('project.show',$d->id) }}"><i class="bi bi-file-text me-1"></i> Summary</a>
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
                        <a class="nav-link active" href="#"><i class="bi bi-chat-right-text me-1"></i> Comments</a>
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
                
                    
                    <hr />
                    <div>
                        <div class="d-flex justify-content-center">
                            <div class="col-md-12 d-flex align-items-center mb-4">
                                <div class="flex-grow-1 pe-2">
                                    <div class="input-group">	<span class="input-group-text"><i class='bx bx-chat'></i></span>
                                        <input type="text" class="form-control" placeholder="Type your comment">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary"> Send <i class='bi bi-send'></i></button>                            
                            </div>                            
                        </div>
                    </div>
                
                <div class="card">
                    <div class="card-body overflow-auto"  style="height: 350px;">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-10">
                                <div class="chat-content-leftside">
                                    <div class="d-flex">
                                        <img src="assets/images/avatars/avatar-3.png" width="48" height="48" class="rounded-circle" alt="" />
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 chat-time">Benedict, 2:35 PM</p>
                                            <p class="chat-left-msg">Hi, James how are you progressing on the project</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-content-leftside">
                                    <div class="d-flex">
                                        <img src="assets/images/avatars/avatar-3.png" width="48" height="48" class="rounded-circle" alt="" />
                                        <div class="flex-grow-1 ms-2">
                                            <p class="mb-0 chat-time">James, 2:48 PM</p>
                                            <p class="chat-left-msg">We are doing great, project is near completion</p>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- /Account -->
                </div>
                
                    {{-- <div class="chat-wrapper"> --}}
                        {{-- <div class="chat-sidebar"> --}}
                            {{-- <div class="chat-sidebar-header">
                                
                                <div class="mb-3"></div>
                                
                                <div class="chat-tab-menu mt-3">
                                    <ul class="nav nav-pills nav-justified">
                                        
                                    </ul>
                                </div>
                            </div> --}}
                            {{-- <div class="chat-sidebar-content">
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-Chats">
                                        
                                        
                                    </div>
                                </div>
                            </div> --}}
                        {{-- </div> --}}

                        
                        
                        
                    </div>
                
           <!--end page main-->
                
                </div>
            </div>
            
            <!-- / Content -->
        {{-- </div> --}}
        <!-- Content wrapper -->
            
                                
                        
                    
                
				
	</main>
    <!--end page main-->
@endsection
