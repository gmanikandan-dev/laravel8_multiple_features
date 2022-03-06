<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Country;
// use View;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::all();
        // echo "<pre>";
        // print_r($country);exit;
        return view('country/index')->with(['country'=>$country]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('country/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCountryRequest $request)
    {

        
        $request->validate([
            'name'=>'unique:countries'
        ]);
       $country = Country::create([
            'name'=>$request->name
        ]);
        
  
        return redirect()->route('country/index')->with(['success','Country Created!!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
       
       
       // return view('country/index')->with(['country'=>$country]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $update = Country::where('id',$id)->first();
        // echo "<pre>";
        // print_r($update->name);exit;
        return view('country/update')->with(['update'=>$update]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountryRequest  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $update = Country::where('id',$id)->first();

        $update->name = $request->name;
        $update->save();
         return redirect('country/index')->with('success','Updated Successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Country::where('id',$id)->first();
        
        $delete->delete();
        return redirect('country/index')->with('success','Deleted Successfully!!!');

    }
}
