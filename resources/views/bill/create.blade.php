@extends('layouts.admin')

@section('title', 'Add Bill')

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
				<!-- <h6 class="mb-0 text-uppercase">Manage Employee</h6> -->
				<hr/>
                <div class="row">
                    <div class="col-xl-12 mx-auto">
                        
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

                                
                            <h6 class="mb-0 text-uppercase">Add Bill</h6>
                            <hr/>
                                <form class="form-body row g-3 mt-5" action="{{ route('bill.store') }}" method="POST" >
                                    @csrf  

                                
                                    <div class="col-md-4">
                                        <label for="bill_title" class="form-label">Bill Title</label>
                                        <input type="text" class="form-control " id="bill_title" name="bill_title" required>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="description" class="form-label">Department</label>
                                        <input type="text" class="form-control" id="department" name="department" required>                                     
                                    </div>                                    
                                    <div class="col-md-4">
                                        <label for="client_id" class="form-label">Client</label>
                                        <select id="client_id" name="client_id" class="form-select select-search" style="font-size: 1rem;" required>
                                            <option value="" disabled selected hidden style="height: 40px;">- Select - </option>
                                            {{-- Loop and Populate your data --}}
                                            @foreach($client as $chosen) 
                                            <option value="{{$chosen->id}}">{{$chosen->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label for="date_created" class="form-label">Date</label>
                                        <input type="date" class="form-control " id="date_created" name="date_created">
                                    </div>
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
                                                <tr>
                                                    <td><input class="itemRow" type="checkbox"></td>
                                                    <td class="text-center"><input type="text" class="form-control " id="description_1" name="item_description" autocomplete="off"></td>
                                                    <td class="text-center"><input type="text" class="form-control " id="part_no_1" name="part_no" autocomplete="off"></td>
                                                    <td class="text-center"><input type="text" class="form-control " id="uom_1" name="uom" autocomplete="off"></td>
                                                    <td class="text-center"><input type="text" class="form-control quantity" id="quantity_1" name="quantity" autocomplete="off"></td>
                                                    <td class="text-center"><input type="text" class="form-control price" id="unit_price_1" name="unit_price" autocomplete="off"></td>
                                                    <td class="text-end"><input type="text" class="form-control amount" id="amount_1" name="amount" autocomplete="off"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div><br>
                                    <div class="d-flex">
                                        <div class="ms-auto">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <button class="btn btn-danger delete" id="removeRows" type="button"><i class="bi bi-trash3"> </i> Delete Row</button>
                                                    <button class="btn btn-success" id="addRows" type="button"><i class="bi bi-plus-circle"> </i> Add Row</button>
                                                </div>
                                            </div>
                                        </div>                                         
                                    </div>
                                    
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
                                                <textarea class="form-control txt" rows="5" name="notes" id="notes" placeholder="Your Notes"></textarea>
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
                                                        <input type="text" class="form-control" id="subTotal"  placeholder="Subtotal" name="subTotal">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="mb-1 ms-auto">
                                                <label for="VAT Rate" class="col-form-label">VAT Rate</label>
                                                <div class="">
                                                    <div class="input-group mb-1">
                                                        <input type="text" class="form-control" id="vat_rate" placeholder="Tax Rate" name="vat_rate">
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
                                                        <input type="text" class="form-control" id="vat" placeholder="VAT" name="vat">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="">
                                            <div class="mb-1 ms-auto">
                                                <label for="subTotal" class="col-form-label">Discount Option</label>
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text" id="vat">&#8358;</span>
                                                    <select class="form-select" name="discount_option">
                                                        <option value='' hidden>Select Discount Option</option>
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
                                                            <input type="text" class="form-control" id="discount1" placeholder="Fixed Amount Discount" name="discount">
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
                                                            <input type="text" class="form-control" id="discount2" placeholder="Percentage Discount" name="discount">
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
                                                        <input type="text" class="form-control"  id="total" placeholder="Total" name="total">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                             
                                    <div class="">
                                        <button type="submit" class="btn btn-primary">Add Bill</button>
                                    </div>
                                </form>
                        </div>
                    </div>
                    </div>
                </div>
				
	</main>
    <!--end page main-->
@endsection

