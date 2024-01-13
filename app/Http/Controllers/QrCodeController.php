<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrCodeController extends Controller
{

    public function index(Request $request)
    {
      // dd($request->input('qrcode',null));
      $result = $request->input('qrcode',null);
      return view('settings/qrcode')->with(['result' => $result]);
    }
}

