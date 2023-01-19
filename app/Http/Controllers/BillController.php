<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Client;
use App\Models\Employee;
use App\Models\Subcontractor;
use App\Models\Freelancer;
use App\Models\Bill;
use App\Models\details_bill;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Bill::all();
        return view('bill.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $client = Client::all(); //fetch from Client Model
        return view('bill.create', compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bill_title' => 'required',
            'client_id' => 'required',
        ]);

        $Bill = new Bill();
        $Bill->bill_title = $request->input('bill_title');
        $Bill->department = $request->input('department');
        $Bill->client_id = $request->input('client_id');
        $Bill->date_created = $request->input('date_created');
        $Bill->status = $request->input('status');
        $Bill->notes = $request->input('notes');
        $Bill->subTotal = $request->input('subTotal');
        $Bill->vat_rate = $request->input('vat_rate');
        $Bill->vat = $request->input('vat');
        $Bill->discount_option = $request->input('discount_option');
        $Bill->discount = $request->input('discount');
        $Bill->total = $request->input('total');
        $Bill->save();

        // Bill::create($request->all());

        $details_bill = new details_bill();
        $details_bill->bill_id = $Bill->id;
        $details_bill->item_description = $request->input('item_description');
        $details_bill->part_no = $request->input('part_no');
        $details_bill->uom = $request->input('uom');
        $details_bill->quantity = $request->input('quantity');
        $details_bill->unit_price = $request->input('unit_price');
        $details_bill->amount = $request->input('amount');
        $details_bill->save();

        return redirect()
            ->route('bill.index')
            ->with('success', 'Bill created successfuly');
    }

    public function storeUpdate(Request $request)
    {
        $details_bill = new details_bill();
        $details_bill->bill_id = $Bill->id;
        $details_bill->item_description = $request->input('item_description');
        $details_bill->part_no = $request->input('part_no');
        $details_bill->uom = $request->input('uom');
        $details_bill->quantity = $request->input('quantity');
        $details_bill->unit_price = $request->input('unit_price');
        $details_bill->amount = $request->input('amount');
        $details_bill->save();

        return redirect()
            ->route('bill.index')
            ->with('success', 'Bill created successfuly');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Bill::find($id);
        $databill = Bill::all();
        $client = Client::all(); //fetch from Client Model
        $details_bill = details_bill::all(); //fetch from details_bill Model
        return view(
            'bill.show',
            compact('data', 'databill', 'client', 'details_bill')
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Bill::all(); //fetch from Bill Model
        $client = Client::all(); //fetch from Client Model
        $details_bill = details_bill::all(); //fetch from details_bill Model
        return view('bill.edit', compact('data', 'client', 'details_bill'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $d = Bill::find($id);
        $details_bill = details_bill::find($id);
        $request->validate([
            'bill_title' => 'required',
            'client_id' => 'required',
        ]);

        $d->bill_title = $request->input('bill_title');
        $d->department = $request->input('department');
        $d->client_id = $request->input('client_id');
        $d->date_created = $request->input('date_created');
        $d->status = $request->input('status');
        $d->notes = $request->input('notes');
        $d->subTotal = $request->input('subTotal');
        $d->vat_rate = $request->input('vat_rate');
        $d->vat = $request->input('vat');
        $d->discount_option = $request->input('discount_option');
        $d->discount = $request->input('discount');
        $d->total = $request->input('total');
        $d->update();

        $details_bill->item_description = $request->input('item_description');
        $details_bill->part_no = $request->input('part_no');
        $details_bill->uom = $request->input('uom');
        $details_bill->quantity = $request->input('quantity');
        $details_bill->unit_price = $request->input('unit_price');
        $details_bill->amount = $request->input('amount');
        $details_bill->update();

        return redirect()
            ->route('bill.index')
            ->with('success', 'Bill updated successfuly');
    }

    public function destroyDetails($id)
    {
        $d = details_bill::find($id);
        $d->delete();

        return response()->json([
            'success' => 'Record deleted successfully!',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $d = Bill::find($id);
        // $d->delete();
        // return redirect()
        //     ->route('Bill.index')
        //     ->with('success', 'Bill deleted successfuly');
    }
}
