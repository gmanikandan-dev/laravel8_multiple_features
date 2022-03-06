<?php

namespace App\Http\Controllers;

use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = State::all();
        // echo "<pre>";
        // print_r($country);exit;
        return view('state/index')->with(['state'=>$state]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $country = Country::all();
        // echo "<pre>";
        // print_r($country);exit;
        return view('state/form')->with(['country'=>$country]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state = State::create($request->all());

        return redirect()->route('state/index')->with('success','State Created Successfully!!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function show(State $state)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function edit(State $state)
    {
        $state = State::where('id',$id)->first();
        // echo "<pre>";
        // print_r($update->name);exit;
        return view('state/update')->with(['state'=>$state]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, State $state)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\State  $state
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function getstate(Request $request)
    {
        // echo $request->id;
        // exit;
        $state=State::where('country_id',$request->state)->get();
        $result=[];
        foreach($state as $key=>$value)
        {
            $result[$value->id]=$value->name;
        }
        //  print_r($result);exit;
        return response()->json($result);
    }
}
