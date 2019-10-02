<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $customers = Customer::paginate(2);
        $cities = City::all();
        return view('customer.list',compact('customers','cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customers = new Customer();
        $customers->name = $request->input('name');
        $customers->dob = $request->input('dob');
        $customers->email = $request->input('email');
        $customers->city_id = $request->input('city_id');
        $customers->save();
        return redirect()->route('customers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers = Customer::findOrFail($id);
        return view('customer.edit', compact('customers'));
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
        $customers = Customer::findOrFail($id);
        $customers->name = $request->input('name');
        $customers->dob= $request->input('dob');
        $customers->email = $request->input('email');
        $customers->city_id = $request->input('city_id');
        $customers->save();
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customers  = Customer::findOrFail($id);
        $customers->delete();
        return redirect()->route('customers.index');
    }

    public function filterByCity(Request $request)
    {
        $idCity = $request->input('city_id');
        //kiem tra city co ton tai khong
        $cityFilter = City::findOrFail($idCity);
        //lay ra tat ca customer cua cityFiler
        $customers = Customer::where('city_id', $cityFilter->id)->get();
        $totalCustomerFilter = count($customers);
        $cities = City::all();
        return view('customers.list', compact('customers', 'cities', 'totalCustomerFilter', 'cityFilter'));
    }
    public function search(Request $request){
        $keyword = $request->input('keyword');
        if (!$keyword){
            return redirect()->route('customers.index');
        }
        $customers = Customer::where('name','LIKE','%'.$keyword.'%')->paginate(5);
        $cities= City::all();
        return view('customer.list',compact('customers','cities'));
    }
}




































