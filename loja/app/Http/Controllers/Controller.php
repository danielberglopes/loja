<?php

namespace App\Http\Controllers;


use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;




    public function auth(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           return view('/welcome');
        } else {
            dd('pse');
            // return redirect()->back()->with('danger', 'Funcionário não autorizado!');
        }
    }
    
}
