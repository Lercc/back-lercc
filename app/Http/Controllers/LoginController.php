<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (Request $request){
     
        $this->validateLogin($request);
        
        if (Auth::attempt(['usuario' => $request->usuario, 'password' => $request->password, 'condicion'=>1])){
       
            $token = $request->user()->createToken($request->usuario);
       
            return response()->json([
                'usuario' => $request->usuario,
                'token' => $token->plainTextToken,
            ]);

        }
    
        return response()->json(['message' => 'Los datos ingresados no existen en nuestra DB']);
      }

      
    protected function validateLogin(Request $request){
    $this->validate($request,[
        'usuario' => 'required|string',
        'password'=> 'required|string'
    ]);
  }
}
