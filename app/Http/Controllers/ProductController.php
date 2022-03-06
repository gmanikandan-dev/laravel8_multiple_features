<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Producty;
use App\Models\Image;
use Storage;
class ProductController extends Controller
{
   public function addProduct(Request $req)
   {
       try{
                
              //  return $validated->fails();
              $req->validate([
                'images' => 'required',
                'images.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
              ]);
              if($req->hasfile('images')) 
              {
                    foreach($req->file('images') as $file)
                    {
                        $name = $file->getClientOriginalName();
                        $file->move(public_path().'/storage/uploads/', $name);  
                        $imgData[] = $name;  
                    }
                    $fileModal = new Image();
                    $fileModal->product_id = 1;
                    $fileModal->url = json_encode($imgData);
                    
                    
                    $fileModal->save();
                 // $product->save();
                //                  print_r($request->file('images'));exit;

               
                return back()->with("success","Image created");
              }
     }
       catch(\Exception $e){
        //    echo "<pre>";
           return $e;
       }
        
   }
   public function productList()
   {
       $products = Producty::all();

       return view('cart/products', compact('products'));
   }
 
}