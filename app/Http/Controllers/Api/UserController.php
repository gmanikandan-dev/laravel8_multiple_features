<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Hash;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return response([
            'users' => $user
        ]);
    }
    
    public function login(Request $request){
        $user= User::where('email', $request->email)->first();
    
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 409);
            }
    
             $token = $user->createToken('my-app-token')->plainTextToken;
    
            $response = [
                'user' => $user,
                'token' => $token
            ];
    
             return response($response, 201);
    }
    
    public function register(Request $request){
    
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
    
        $input = $request->all();
    
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        $token = $user->createToken('my-app-token')->plainTextToken;
        return response([
            'status'=>'success',  
            'message' => 'User registered!!'
        ], 201);
    }
    public function refresh(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json([
            'access_token' => $request->user()->createToken('my-app-token')->plainTextToken,
        ]);
    }
}
