@extends('layouts.admin')

@section('title', 'Update Bill')

@section('content')
   <!--start content-->
    <main class="page-content">
        <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-1">
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
                <div class="ms-auto">
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">
                        <i class="bi bi-plus-circle"></i>  Add Employee
                    </button> -->
                    <a href="{{ route('bill.index') }}" role="button" class="btn btn-primary"><i class="bi bi-view-list"></i>  View Bills</a>
                </div>
            </div>
        <!--end breadcrumb-->
				<hr/>
                <div class="row">
                    <div class="col-md-12">
                        
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

                                    
                                <h6 class="mb-0 text-uppercase">Update Bill</h6>
                                <hr/>
                                @if ($data)
                                    @foreach ($data as $d)
                                    <form class="form-body row g-3" action="{{ route('bill.update', $d->id) }}" method="POST" >
                                        @csrf 
                                        @method('PUT') 

                                    
                                        <div class="col-md-4">
                                            <label for="bill_title" class="form-label">Bill Title</label>
                                            <input type="text" class="form-control " value="{{ $d->bill_title}}" id="bill_title" name="bill_title" required>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="description" class="form-label">Department</label>
                                            <input type="text" class="form-control" value="{{ $d->department}}" id="description" name="department" required>                                     
                                        </div>



                                        <div class="col-md-4">
                                            <label for="client_id" class="form-label">Client</label>
                                            <select id="client_id" name="client_id" class="form-select select-search" style="font-size: 1rem;" required>
                                                <option value="{{ $d->client_id}}" hidden>{{$clientName = DB::table('clients')->where('id', $d->client_id)->value('name')}}</option>
                                                {{-- Loop and Populate your data --}}
                                                @foreach($client as $chosen) 
                                                <option value="{{$chosen->id}}">{{$chosen->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label for="date_created" class="form-label">Date</label>
                                            <input type="date" class="form-control " id="date_created" name="date_created" value="{{ $d->date_created}}">
                                        </div>
                                        <br>            
                                        
                                    @endforeach
                                @endif
                                        <br>

                                        <div class="table-responsive">              
                                            <table class="table table-bordered table-hover" id="billItem" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th width="2%"><input id="checkAll" class="formcontrol" type="checkbox"></th>
                                                        <th class="text-center col-5">Description</th>
                                                        <th class="text-center">Part No</th>
                                                        <th class="text-center">UoM</th>
                                                        <th class="text-center col-1">Quantity</th>
                                                        <th class="text-center">Unit Price</th>
                                                        <th class="text-end col-2">Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($details_bill)
                                                        @foreach ($details_bill as $d)
                                                            <tr>
                                                                <td><input class="itemRow" type="checkbox"></td>
                                                                <td class="text-center"><input type="text" class="form-control " value="{{ $d->item_description}}" id="description_{{ $d->id}}" name="item_description" autocomplete="off"></td>
                                                                <td class="text-center"><input type="text" class="form-control " value="{{ $d->part_no}}" id="part_no_{{ $d->id}}" name="part_no" autocomplete="off"></td>
                                                                <td class="text-center"><input type="text" class="form-control " value="{{ $d->uom}}" id="uom_{{ $d->id}}" name="uom" autocomplete="off"></td>
                                                                <td class="text-center"><input type="text" class="form-control quantity" value="{{ $d->quantity}}" id="quantity_{{ $d->id}}" name="quantity" autocomplete="off"></td>
                                                                <td class="text-center"><input type="text" class="form-control price" value="{{ $d->unit_price}}" id="unit_price_{{ $d->id}}" name="unit_price" autocomplete="off"></td>
                                                                <td class="text-end"><input type="text" class="form-control amount" value="{{ $d->amount}}" id="amount_{{ $d->id}}" name="amount" autocomplete="off"></td>
                                                            </tr>
                                                        @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div><br>
                                        <div class="d-flex">
                                            <div class="ms-auto">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <button class="btn btn-danger delete" id="removeRows" type="button"><i class="bi bi-trash3"> </i> Delete Row</button>&nbsp;
                                                        <button class="btn btn-success" id="addRows" type="button"><i class="bi bi-plus-circle"> </i> Add Row</button>
                                                    </div>
                                                </div>
                                            </div>                                         
                                        </div>

                                @if ($data)
                                    @foreach ($data as $d)
                                            <div class="col-md-8">
                                                <div>
                                                    {{-- <h3>Status: </h3> --}}
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" id="status" name="status" value="New Bill" hidden>
                                                    </div>
                                                    <br> 
                                                </div>
                                                <div>
                                                    <h5>Notes: </h5>
                                                    <div class="form-group">
                                                        <textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Your Notes">{{ $d->notes}}</textarea>
                                                    </div>
                                                    <br> 
                                                </div>                                                                                       
                                            </div>
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3">
                                                <div class="">
                                                    <div class="mb-1 ms-auto">
                                                        <label for="subTotal" class="col-form-label">Sub Total</label>
                                                        <div class="">
                                                            <div class="input-group mb-1">
                                                                <span class="input-group-text">&#8358;</span>
                                                                <input type="text" class="form-control" value="{{ $d->subTotal}}" id="subTotal"  placeholder="Subtotal" name="subTotal">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="mb-1 ms-auto">
                                                        <label for="VAT Rate" class="col-form-label">VAT Rate</label>
                                                        <div class="">
                                                            <div class="input-group mb-1">
                                                                <input type="text" class="form-control" value="{{ $d->vat_rate}}" id="vat_rate" placeholder="Tax Rate" name="vat_rate">
                                                                <span class="input-group-text">%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="mb-1 ms-auto">
                                                        <label for="VAT" class="col-form-label">VAT</label>
                                                        <div class="col-12">
                                                            <div class="input-group mb-1">
                                                                <span class="input-group-text">&#8358;</span>
                                                                <input type="text" class="form-control" value="{{ $d->vat}}" id="vat" placeholder="VAT" name="vat">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class=>
                                                    <div class="mb-1">
                                                        <label for="subTotal" class="col-form-label">Discount Option</label>
                                                        <div class="input-group mb-1">
                                                            <span class="input-group-text" id="vat">&#8358;</span>
                                                            <select class="form-select" name="discount_option">
                                                                {{-- <option value="" selected hidden>Choose...</option> --}}
                                                                <option value="{{ $d->discount_option}}" hidden>{{$discOpt = DB::table('bills')->where('id', $d->id)->value('discount_option')}}</option>
                                                                <option value="Percentage">Percentage</option>
                                                                <option value="Fixed Amount">Fixed Amount</option>
                                                            </select>  
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="disc" id="option1">
                                                    <div class="">
                                                        <div class="mb-1">
                                                            <label for="discount_fixed" class="col-form-label">Discount</label>
                                                            <div class="">
                                                                <div class="input-group mb-1">
                                                                    <span class="input-group-text">&#8358;</span>
                                                                    <input type="text" class="form-control" id="discount1" value="{{ $d->discount}}" placeholder="Fixed Amount Discount" name="discount">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="disc" id="option2">
                                                    <div class="">
                                                        <div class="mb-1">
                                                            <label for="discount_percentage" class="col-form-label">Discount</label>
                                                            <div class="">
                                                                <div class="input-group mb-1">
                                                                    <input type="text" class="form-control" value="{{ $d->discount}}" id="discount2" placeholder="Percentage Discount" name="discount">
                                                                    <span class="input-group-text">%</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="">
                                                    <div class="mb-1 ms-auto">
                                                        <label for="total" class="col-form-label">Total</label>
                                                        <div class="">
                                                            <div class="input-group mb-1">
                                                                <span class="input-group-text"> &#8358;</span>
                                                                <input type="text" class="form-control" value="{{ $d->total}}"  id="total" placeholder="Total" name="total">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    @endforeach
                                @endif                      
                                        <div class="">
                                            <button type="submit" class="btn btn-primary">Update Bill</button>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
				
	</main>
    <!--end page main-->
@endsection

