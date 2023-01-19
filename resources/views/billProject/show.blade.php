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
                            <a class="nav-link" href="{{ route('project.show',$d->id) }}"><i class="bi bi-file-text me-1"></i> Summary</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#"><i class="bi bi-currency-bitcoin me-1"></i> Bill</a>
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
                    
                    {{-- <hr class="my-0" /> --}}
                    <div class="card">
                        <div class="card-body">                        
                            <div class="row">
                                <div class="col-12">
                                    <div class="d-sm-flex">
                                        <div>
                                            <h4 class="pull-right font-16"><strong>Powerec Global Services Ltd</strong></h4>
                                            <h6>14b Chief Augustine Anozie Street, </h6>
                                            <h6>Lekki Phase 1, Lagos</h6>
                                            <h6>info@powerecng.com</h6>
                                        </div>
                                        <div class="ms-auto">
                                            <h3 class="">
                                                <img src="{{asset('public')}}/assets/images/Powerec Logo2.png" alt="logo" height="70"/>
                                            </h3>
                                            <p>TIN: 17852243-0001 RC: 1197710</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="d-sm-flex">
                                        <div>
                                            <div class="mb-2 font-16 text-primary"><strong>Bill No: {{$bill = DB::table('bills')->where('id', $d->project_bill)->value('id')}}</strong></div>
                                            <address>
                                                <strong>Attn: </strong>{{$client = DB::table('clients')->where('id', $d->client_id)->value('name')}}<br>
                                                <strong>Address: </strong>{{$client = DB::table('clients')->where('id', $d->client_id)->value('address')}}<br>
                                            </address>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="mb-2 font-16 text-primary"><strong>Department: {{$department = DB::table('bills')->where('id', $d->project_bill)->value('department')}}</strong></div>
                                        </div>
                                    </div>
                                    <div class="row">                                    
                                        <div class="col-6 m-t-30 text-right">
                                            <address>
                                                <strong>Date: {{$date = DB::table('bills')->where('id', $d->project_bill)->value('date_created')}}</strong><br>
                                                <br><br>
                                            </address>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-12">
                                    <div class="panel panel-default">
                                        <div class="p-2">
                                            <h3 class="panel-title font-20 d-flex justify-content-center"><strong>Quotation for {{$quotationTitle = DB::table('bills')->where('id', $d->project_bill)->value('bill_title')}}</strong></h3>
                                        </div>
                                        <div class="">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                    <tr>
                                                        <th class="col-1"><strong>S/N</strong></th>
                                                        <th class="col-5">Description</th>
                                                        <th class="text-center">Part No</th>
                                                        <th class="text-center">UoM</th>
                                                        <th class="text-center col-1">Quantity</th>
                                                        <th class="text-center">Unit Price</th>
                                                        <th class="text-end col-2">Amount</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    @if ($details_bill)
                                                    <?php $count = 0; ?>
                                                        @foreach ($details_bill as $details)
                                                        <?php $count++; ?>
                                                            <tr>
                                                                <td>{{$count}}</td>
                                                                <td class="col-5">{{ $details->item_description}}</td>
                                                                <td class="text-center">{{ $details->part_no}}</td>
                                                                <td class="text-center">{{ $details->uom}}</td>
                                                                <td class="text-center">{{ $details->quantity}}</td>
                                                                <td class="text-center">{{ $details->unit_price}}</td>
                                                                <td class="text-end">{{ $details->amount}}</td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                    
                                                    <tr>
                                                        <td class="thick-line"></td>
                                                        <td class="thick-line"></td>
                                                        <td class="thick-line"></td>
                                                        <td class="thick-line"></td>
                                                        <td class="thick-line"></td>
                                                        <td class="thick-line text-end"><strong>Subtotal </strong></td>
                                                        <td class="thick-line text-end"><h6 class="m-0">{{$subTotal = DB::table('bills')->where('id', $d->project_bill)->value('subTotal')}}</h6></td>                                                        
                                                    </tr>
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-end"><strong>VAT </strong></td>
                                                        <td class="no-line text-end"><h6 class="m-0">{{$vat = DB::table('bills')->where('id', $d->project_bill)->value('vat')}}</h6></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-end"><strong>Discount </strong></td>
                                                        <td class="no-line text-end"><h6 class="m-0">{{$discount = DB::table('bills')->where('id', $d->project_bill)->value('discount')}}</h6></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-end"><strong>Total </strong></td>
                                                        <td class="no-line text-end"><h6 class="m-0"><span>&#8358;</span>{{$total = DB::table('bills')->where('id', $d->project_bill)->value('total')}}</h6></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
    
                                            <div class="d-print-none">
                                                <div class="pull-right">
                                                    <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="bi bi-printer"></i>Print</a>
                                                    <a href="#" class="btn btn-primary waves-effect waves-light">Send</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
    
                                </div>
                            </div> <!-- end row -->
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
