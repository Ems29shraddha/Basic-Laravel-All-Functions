<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function adminDashboard()
    {
        return view('admin.dashboard');
    }

   
    public function signup(Request $request)
    {
        // Validate request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|min:6',
        ]);

        // Return errors if validation error occur.
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'error' => $errors
            ], 400);
        }

        // Check if validation pass then create user and auth token. Return the auth token
        if ($validator->passes()) {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            // $token = $user->createToken('auth_token')->plainTextToken;
        
            return response()->json([
                // 'access_token' => $token,
                'token_type' => 'Bearer',
            ]);
        }
        return redirect()->route('dashboard');
    }

    public function signin(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {
            
            if (auth()->user()->role_id === 1) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('dashboard');
                
            }
        } else {
            return redirect()->route('signin.view')
                ->with('error', 'Email-Address And Password Are Wrong.');
        }
    }

   
}
