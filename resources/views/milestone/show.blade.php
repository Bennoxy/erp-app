@extends('layouts.admin')

@section('title', 'Project Milestone')

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
                            <li class="breadcrumb-item active" aria-current="page">Task</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">
                        <i class="bi bi-plus-circle"></i>  Add Employee
                    </button> -->          
                        <a href="{{ route('milestoneProjectCreate',$d->id) }}" role="button" class="btn btn-danger"><i class="bi bi-plus-circle"></i>  Add Milestone</a>
                     
                    <a href="{{ route('project.index') }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Projects</a>
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
                        <a class="nav-link active" href="#"><i class="bi bi-signpost-2 me-1"></i> Milestones</a>
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
                <div class="card mb-4">
                    
                    {{-- <hr class="my-0" /> --}}
                    <div class="card-body">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif
                        <div class="table-responsive">              
                          <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>All Tasks</th>
                                <th>Pending Tasks</th>
                                <th>Completed Tasks</th>
                                <th width="10%">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @if ($data)
                                @php
                                  $count = 0;
                                @endphp
                                    @foreach ($data as $d)
                                    @php
                                      $count++;
                                    @endphp
                                        <tr>
                                            <td>{{ $count }}</td>
                                            <td><a class="text-info" href=""></a>{{ $d->name }}</td>
                                            <td>{{ $task = DB::table('tasks')->where('milestone_id', $d->id)->count() }}</td>
                                            <td>{{ $task = DB::table('tasks')->where('milestone_id', $d->id)->where('status', '!=', 'Completed')->count() }}</td>
                                            <td>{{ $task = DB::table('tasks')->where('milestone_id', $d->id)->where('status', 'Completed')->count() }}</td>
                                            <td>
                                                <form action="{{ route('milestone.destroy', $d->id) }}" method="POST">
                                                    <a class="btn btn-default px-1 py-0" href="{{ route('milestone.edit',$d->id) }}"><i class="bi bi-pencil-square text-primary"></i></a>
                                                    @csrf
                                                    @method('DELETE')
                                                    {{-- <a href="{{ route('department.destroy',$d->id) }}"><i class="bi bi-trash text-danger"></i></a> --}}
                                                    <button type="submit" class="btn btn-default px-1 py-0"><i class="bi bi-trash text-danger"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach                        
                                @endif
                            </tbody>								
                          </table>
						            </div>
                    </div>
                    <!-- /Account -->
                </div>
                
                </div>
            </div>
            
            <!-- / Content -->
        {{-- </div> --}}
        <!-- Content wrapper -->
            
                                
                        
                    
                
				
	</main>
    <!--end page main-->
@endsection
