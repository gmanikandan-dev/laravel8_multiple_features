<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;
use View;
use App\Models\User;

class SettingsController extends Controller
{


    public function mailIndex(){

        return view('settings/mytestmail');
    }
   public function sendMail(Request $request) {
   
        $details = [
            'title' => $request->subject,
            'body' => $request->body,
        ];
       
        \Mail::to($request->to)->send(new \App\Mail\MytestMail($details));
       
        return back()->with('success','Email sent!');
    }

      public function showEmployees()
      {
        $employee = Employee::all();
        return view('settings/pdfemployee', compact('employee'));
      }

      // Generate PDF
    public function createPDF() 
    {
        // retreive all records from db
        $data = Employee::all();
        
        
        // share data to view
        // view()->share('settings/pdf_view',(array) $data);
     
        $pdf = PDF::loadView('settings/pdf_view', compact('data'));
        // download PDF file with download method
        // return $pdf->download('pdf_file.pdf');
        // $data = [
        //     'title' => 'Welcome to ItSolutionStuff.com',
        //     'date' => date('m/d/Y')
        // ];
          
        // $pdf = PDF::loadView('settings/myPdf', $data);
    
        return $pdf->download('test_pdf.pdf');
      }
    public function saveToken(Request $request)
    {

        auth()->user()->update(['device_token'=>$request->token]);
        return response()->json(['token saved successfully.']);
    }
  
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function sendNotification(Request $request)
    {
        $firebaseToken = User::whereNotNull('device_token')->pluck('device_token')->all();
        
     
        $SERVER_API_KEY = 'AAAAsbx_Nsw:APA91bGoOPAjmZzhcl3N6j4QFyzK-CowuA22WjlC4RWRWpLSJxcJFA-vaAiT2OHJeu33SYEA6DGh_IEuL15NVXYdNfCR6ufh0JjAPg7UFfVpdAbmTiDdtQE66Yt4gDN-wPYuNLoMO55Q';
  
        $data = [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => $request->title,
                "body" => $request->body,  
            ]
        ];
        $dataString = json_encode($data);
    
        $headers = [
            'Authorization: key=' . $SERVER_API_KEY,
            'Content-Type: application/json',
        ];
    
        $ch = curl_init();
      
        curl_setopt($ch, CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send');
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataString);
               
        $response = curl_exec($ch);
  
        dd($response);
    }
}


