<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Ramsey\Uuid\Uuid;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function buatakun(Request $request)
    {
        $user = new User();

        $user->id = Uuid::uuid4()->toString();
        $user->username = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('status', 'Akun Berhasil Ditambahkan, Silahkan Login!');
    }
}
