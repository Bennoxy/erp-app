@extends('layouts.admin')

@section('title', 'Bill Summary')

@section('content')
   <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->            
            {{-- <h4 class="text-primary d-print-none">{{$d->bill_title}}</h4>
            <hr/> --}}
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3 d-print-none">
                <div class="breadcrumb-title pe-3">Dashboard</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Bill</li>
                            <li class="breadcrumb-item active" aria-current="page">{{$data->bill_title}}</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">
                        <i class="bi bi-plus-circle"></i>  Add Employee
                    </button> -->
                    <a href="{{ route('bill.index') }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Bills</a>
                </div>
            </div>
        <!--end breadcrumb-->  
            
        <!-- Content wrapper -->
        {{-- <div class="content-wrapper"> --}}
            <!-- Content -->
            
            {{-- <div class="row"> --}}
                {{-- <div class="col-md-12">
                    
                <div class="card mb-4" id="toprint"> --}}
                    
                    <hr />
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
                                            <div class="mb-2 font-16 text-primary"><strong>Bill No: {{$data->id}}</strong></div>
                                            <address>
                                                <strong>Attn: </strong>{{$client = DB::table('clients')->where('id', $data->client_id)->value('name')}}<br>
                                                <strong>Address: </strong>{{$client = DB::table('clients')->where('id', $data->client_id)->value('address')}}<br>
                                            </address>
                                        </div>
                                        <div class="ms-auto">
                                            <div class="mb-2 font-16 text-primary"><strong>Department: {{$data->department}}</strong></div>
                                        </div>
                                    </div>
                                    <div class="row">                                    
                                        <div class="col-6 m-t-30 text-right">
                                            <address>
                                                <strong>Date: {{$date = DB::table('bills')->where('id', $data->id)->value('date_created')}}</strong><br>
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
                                            <h3 class="panel-title font-20 d-flex justify-content-center"><strong>Quotation for {{$date = DB::table('bills')->where('id', $data->id)->value('bill_title')}}</strong></h3>
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
                                                        @foreach ($details_bill as $d)
                                                        <?php $count++; ?>
                                                            <tr>
                                                                <td>{{$count}}</td>
                                                                <td class="col-5">{{ $d->item_description}}</td>
                                                                <td class="text-center">{{ $d->part_no}}</td>
                                                                <td class="text-center">{{ $d->uom}}</td>
                                                                <td class="text-center">{{ $d->quantity}}</td>
                                                                <td class="text-center">{{ $d->unit_price}}</td>
                                                                <td class="text-end">{{ $d->amount}}</td>
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
                                                        <td class="thick-line text-end"><h6 class="m-0">{{ $data->subTotal }}</h6></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-end"><strong>VAT </strong></td>
                                                        <td class="no-line text-end"><h6 class="m-0">{{ $data->vat }}</h6></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-end"><strong>Discount </strong></td>
                                                        <td class="no-line text-end"><h6 class="m-0">{{ $data->discount }}</h6></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line"></td>
                                                        <td class="no-line text-end"><strong>Total </strong></td>
                                                        <td class="no-line text-end"><h6 class="m-0"><span>&#8358;</span>{{ $data->total }}</h6></td>
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
            {{-- </div> --}}
            
            <!-- / Content -->
        {{-- </div> --}}
        <!-- Content wrapper -->
            
                                
                        
                    
                
				
	</main>
    <!--end page main-->
@endsection
