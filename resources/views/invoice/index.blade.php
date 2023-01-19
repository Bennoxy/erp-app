@extends('layouts.admin')
@section('title', 'Invoice')

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
                        <li class="breadcrumb-item active" aria-current="page">Invoice</li>
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
                    <p class="mb-1">Partialy Paid</p>
                    <h4 class="mb-0 text-primary">5</h4>
                  </div>
                  <div class="ms-auto fs-2 text-primary">
                    <i class="bi bi-wallet2"></i>
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
                    <p class="mb-1">Unpaid</p>
                    <h4 class="mb-0 text-warning">8</h4>
                  </div>
                  <div class="ms-auto fs-2 text-warning">
                    <i class="bi bi-dash-square"></i>
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
                    <p class="mb-1">Overdue</p>
                    <h4 class="mb-0 text-danger">0</h4>
                  </div>
                  <div class="ms-auto fs-2 text-danger">
                    <i class="bi bi-calendar2-x"></i>
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
                    <p class="mb-1">Paid</p>
                    <h4 class="mb-0 text-success">55</h4>
                  </div>
                  <div class="ms-auto fs-2 text-success">
                    <i class="bi bi-credit-card"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->

				<div class="card">
          <div class="ms-auto">
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDepartment">
                <i class="bi bi-plus-circle"></i>  Add Department
            </button> -->
            <a href="{{ route('invoice.create') }}" role="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i>  Add Invoice</a>
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
										<th>Invoice Number</th>
										<th>Client</th>
										<th>Issue Date</th>
                    <th>Due Date</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
                  {{-- @if ($data)
                      @foreach ($data as $d)
                          <tr>
                              <td>{{$d->id}}</td>
                              <td>{{$d->project_title}}</td>
                              <td>{{$d->client_id}}</td>
                              <td>{{$d->employee_id}}</td>
                              <td>{{$d->due_date}}</td>
                              <td>{{$d->status}}</td>
                              <td>{{$d->progress}}</td>
                              <td>{{$d->remarks}}</td>
                              <td> --}}
                                  {{-- <form action="{{ route('project.destroy', $d->id) }}" method="POST">
                                      <a class="btn btn-default px-1 py-0" href="{{ route('project.edit',$d->id) }}"><i class="bi bi-pencil-square text-primary"></i></a>
                                      <a class="btn btn-default px-1 py-0" href="{{ route('project.show',$d->id) }}"><i class="bi bi-eye text-primary"></i></a>
                                      <a href="{{ route('department.edit', $d->id) }}"><i class="bi bi-pencil-square"></i></a>&emsp; --}}
                                      {{-- @csrf
                                      @method('DELETE') --}}
                                      {{-- <a href="{{ route('department.destroy',$d->id) }}"><i class="bi bi-trash text-danger"></i></a> --}}
                                      {{-- <button type="submit" class="btn btn-default px-1 py-0"><i class="bi bi-trash text-danger"></i></button>
                                  </form>
                              </td>
                          </tr>
                      @endforeach
                      
                  @endif --}}
            		</tbody>
								
							</table>
						</div>
					</div>
				</div>




      
  
  
  </main>
  <!--end page main-->
@endsection

       
       

       