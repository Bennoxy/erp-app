@extends('layouts.admin')

@section('title', 'Manage Position')

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
                <a href="{{ route('position.create') }}" role="button" class="btn btn-primary"><i class="bi bi-plus-circle"></i>  Add Position</a>
            </div>
        </div>
    <!--end breadcrumb-->
				<!-- <h6 class="mb-0 text-uppercase">Manage Position</h6> -->
				<hr/>
				<div class="card">
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
										<th>Position Code</th>
										<th>Position Name</th>
                                        <th width="10%">Action</th>
									</tr>
								</thead>
								<tbody>
                                    @if ($data)
                                        @foreach ($data as $d)
                                            <tr>
                                                <td>{{$d->id}}</td>
                                                <td>{{$d->position_code}}</td>
                                                <td>{{$d->position_name}}</td>
                                                <td>
                                                    <form action="{{ route('position.destroy', $d->id) }}" method="POST">
                                                        <a class="btn btn-default px-1 py-0" href="{{ route('position.edit',$d->id) }}"><i class="bi bi-pencil-square text-primary"></i></a>
                                                        {{-- <a href="{{ route('position.edit', $d->id) }}"><i class="bi bi-pencil-square"></i></a>&emsp; --}}
                                                        @csrf
                                                        @method('DELETE')
                                                        {{-- <a href="{{ route('position.destroy',$d->id) }}"><i class="bi bi-trash text-danger"></i></a> --}}
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
