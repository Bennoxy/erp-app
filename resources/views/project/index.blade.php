@extends('layouts.admin')
@section('title', 'Projects')

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
                        <li class="breadcrumb-item active" aria-current="page">Project</li>
                    </ol>
                </nav>
            </div>
            
        </div>
    <!--end breadcrumb-->   
      
        <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-4">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <p class="mb-1">All Projects</p>
                    <h4 class="mb-0 text-primary">5</h4>
                  </div>
                  <div class="ms-auto fs-2 text-primary">
                    <i class="bi bi-folder"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <p class="mb-1">In Progress</p>
                    <h4 class="mb-0 text-warning">8</h4>
                  </div>
                  <div class="ms-auto fs-2 text-warning">
                    <i class="bi bi-clipboard-data"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <p class="mb-1">On Hold</p>
                    <h4 class="mb-0 text-danger">0</h4>
                  </div>
                  <div class="ms-auto fs-2 text-danger">
                    <i class="bi bi-hourglass"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <p class="mb-1">Completed</p>
                    <h4 class="mb-0 text-success">55</h4>
                  </div>
                  <div class="ms-auto fs-2 text-success">
                    <i class="bi bi-journal-check"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->

				<div class="card">
          <div class="ms-auto">            
            <a href="{{ route('project.create') }}" role="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i>  Add Project</a>
          </div>
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
										<th>Project Title</th>
										<th>Client</th>
                    <th>Assigned Employees</th>
                    <th>Due Date</th>
                    <th>Status</th>
                    <th>Progress</th>
                    <th>Remarks</th>
                    <th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
                  @if ($data)
                      @foreach ($data as $d)
                          <tr>
                              <td>{{$d->id}}</td>
                              <td><a class="text-primary" href="{{ route('project.show',$d->id) }}">{{$d->project_title}}</a></td>
                              <td>{{$client = DB::table('clients')->where('id', $d->id)->value('name')}}</td>
                              <td>{{$employee = DB::table('employees')->where('id', $d->id)->value('name')}}</td>
                              <td>{{$d->due_date}}</td>
                              <td>{{$d->status}}</td>
                              <td>{{$d->progress}}</td>
                              <td>{{$d->remarks}}</td>
                              <td>
                                  <form action="{{ route('project.destroy', $d->id) }}" method="POST">
                                      <a class="btn btn-default px-1 py-0" href="{{ route('project.edit',$d->id) }}"><i class="bi bi-pencil-square text-primary"></i></a>
                                      <a class="btn btn-default px-1 py-0" href="{{ route('project.show',$d->id) }}"><i class="bi bi-eye text-success"></i></a>
                                      {{-- <a href="{{ route('department.edit', $d->id) }}"><i class="bi bi-pencil-square"></i></a>&emsp; --}}
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
				</div>




      
  
  
  </main>
  <!--end page main-->
@endsection

       
       

       