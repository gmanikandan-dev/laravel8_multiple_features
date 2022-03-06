<?php

namespace App\Http\Controllers;

use App\Models\Taluk;
use Illuminate\Http\Request;

class TalukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Taluk  $taluk
     * @return \Illuminate\Http\Response
     */
    public function show(Taluk $taluk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Taluk  $taluk
     * @return \Illuminate\Http\Response
     */
    public function edit(Taluk $taluk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Taluk  $taluk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taluk $taluk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taluk  $taluk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taluk $taluk)
    {
        //
    }
    public function gettaluk(Request $request)
    {
        // echo $request->id;
        // exit;
        $taluk=Taluk::where('district_id',$request->taluk)->get();
        $result=[];
        foreach($taluk as $key=>$value)
        {
            $result[$value->id]=$value->name;
        }
        //  print_r($result);exit;
        return response()->json($result);
    }
}
