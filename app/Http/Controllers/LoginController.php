<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|min:6'
        ]);
        $username = $request->input('username');
        $password = $request->input('password');


        $user = User::where('username', $username)->first();

        if (!$user) {
            return response()->json(['message' => 'Login gagal'], 401);
        } else if ($user->password === $password) {
            // $generateTokenupdate = bin2hex(random_bytes(40));
            // $user->update([
            //     'api_token' => $generateTokenupdate
            // ]);

            // $generateToken = User::find(1);
            // $token = $generateToken->api_token;

            return response()->json([
                'message' => 'login berhasil',
                'api_token' => $user->createToken('User')->accessToken,
                'data'  => $user
            ]);
        } else {
            return response()->json([
                'message' => 'login gagal',
            ]);
        }
    }

    //
}
