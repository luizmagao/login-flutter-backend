<?php

namespace App\Http\Controllers\Api;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email'    => 'required|string|email',
            'password' => 'required|string',
        ]);

        if ($validation->fails()) {
            return \response()->json([
                'message' => 'Erro ao validar dados',
                'success' => false,
            ]);
        }

        if (!Auth::attempt($request->only('email', 'password'))) {
            return \response()->json([
                'message' => 'Usuário ou senha incorretos.',
                'success' => false,
            ]);

        } else {
            $user = Auth::user();
            if ($user) {
                return \response()->json([
                    'message' => 'Sucesso!',
                    'success' => true,
                    'token'   => $user->createToken('auth_token')->plainTextToken,
                ]);
            }
        }
        return \response()->json([
            'message' => 'Erro inesperado',
            'success' => false,
        ]);
    }
}
