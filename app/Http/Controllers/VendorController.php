<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Vendor::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vendors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'name' => 'required|min:4|max:255',
            'title' => 'required|min:5|max:255',
            'street_address' => 'required|min:5:max:1000',
            'apartment' => 'required|min:3|max:255',
            'city' => 'required|min:5|max:255',
            'state' => 'required|min:5|max:255',
            'zip' => 'required|min:5|max:15',
            'phone' => 'required|digits_between:10,11',
            'home_phone' => 'nullable|digits_between:10,11',
            'alternate_phone' => 'nullable|digits_between:10,11',
            'work_phone' => 'nullable|digits_between:10,11',
            'email' => 'min:5|max:255|email',
            'aadhar_id' => 'required|digits:12',
            'birth_date' => 'required|date',
            'married' => 'required',
            'work_location' => 'nullable|min:5|max:255',
            'vendor_id' => 'required|digits_between:4,10',
            'department' => 'required|min:5|max:255',
            'start_date' => 'required|date',
            'experience' => 'nullable|min:5|max:255'
        ]);
        Vendor::create($attributes);
        return redirect('/vendors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function show(Vendor $vendor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function edit(Vendor $vendor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vendor $vendor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vendor  $vendor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vendor $vendor)
    {
        //
    }
}
