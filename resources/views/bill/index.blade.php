@extends('layouts.admin')
@section('title', 'Bills')

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
                        <li class="breadcrumb-item active" aria-current="page">Bill</li>
                    </ol>
                </nav>
            </div>
            
        </div>
    <!--end breadcrumb-->   
      
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-3 row-cols-xl-3 row-cols-xxl-3">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center">
                  <div class="">
                    <p class="mb-1">New Bill</p>
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
                    <p class="mb-1">Proposal Sent</p>
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
                    <p class="mb-1">Converted</p>
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
            <a href="{{ route('bill.create') }}" role="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i>  Add Bill</a>
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
										<th>Title</th>
                    <th>Client</th>
                    <th>Date Created</th>
                    <th>Status</th>
                    <th>Total Amount</th>
                    <th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
                  @if ($data)
                    <?php $count = 0; ?>
                      @foreach ($data as $d)
                        <?php $count++; ?>
                        <tr>
                            <td>{{$count}}</td>
                            <td><a class="text-primary" href="{{ route('bill.show',$d->id) }}">{{$d->bill_title}}</a></td>
                            <td>{{$client = DB::table('clients')->where('id', $d->client_id)->value('name')}}</td>
                            <td>{{$d->date_created}}</td>
                            <td>{{$d->status}}</td>
                            <td>{{$d->total}}</td>
                            <td>
                                <form action="{{ route('bill.destroy', $d->id) }}" method="POST">
                                    <a class="btn btn-default px-1 py-0" href="{{ route('bill.edit',$d->id) }}"><i class="bi bi-pencil-square text-primary"></i></a>
                                    <a class="btn btn-default px-1 py-0" href="{{ route('bill.show',$d->id) }}"><i class="bi bi-eye text-success"></i></a>
                                    {{-- <a href="{{ route('department.edit', $d->id) }}"><i class="bi bi-pencil-square"></i></a>&emsp; --}}
                                    @csrf
                                    @method('DELETE')
                                    {{-- <a href="{{ route('department.destroy',$d->id) }}"><i class="bi bi-trash text-danger"></i></a> --}}
                                    {{-- <button type="submit" class="btn btn-default px-1 py-0"><i class="bi bi-trash text-danger"></i></button> --}}
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

       
       

       