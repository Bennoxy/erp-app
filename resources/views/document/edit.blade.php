@extends('layouts.admin')

@section('title', 'Edit Document')

@section('content')
   <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
            <h4 class="text-primary">{{ $proj = DB::table('projects')->where('id', $d)->value('project_title') }}</h4>
            <hr/>
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Dashboard</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Project</li>
                            <li class="breadcrumb-item active" aria-current="page">Document</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">
                        <i class="bi bi-plus-circle"></i>  Add Employee
                    </button> -->
                    <a href="{{ route('document.show', $d) }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Documents</a>
                </div>
            </div>
        <!--end breadcrumb-->
				<!-- <h6 class="mb-0 text-uppercase">Manage Employee</h6> -->
				<hr/>
                <div class="row">
                    <div class="col-xl-8 mx-auto">
                        
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

                                
                            <h6 class="mb-0 text-uppercase">Edit Document</h6>
                            <hr/>
                                <form class="form-body row g-3" action="{{ route('document.update', $doc->id) }}" method="POST" enctype="multipart/form-data" >
                                    @csrf 
                                    @method('PUT') 

                                
                                    <div class="col-md-12">
                                        <label for="document_name" class="form-label">Document Title</label>
                                        <input type="text" class="form-control " id="document_name" name="document_name" value="{{ $doc->document_name }}" required>
                                    </div>        
                                                                 
                                    <input type="hidden" class="form-control " id="project_id" name="project_id" value="{{ $d }}"> 
                                    <input type="hidden" class="form-control " id="user_id" name="uploaded_by" value="{{ $userName }}">
                                    
                                    <input class="form-control" type="file" id="file" name="file"> 
                                                                    
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Upload Document</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                    </div>
                </div>
				
	</main>
    <!--end page main-->
@endsection
