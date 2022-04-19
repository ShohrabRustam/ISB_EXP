<?php

namespace App\Http\Controllers;

use App\Models\help;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    //
    public function _help(Request $request)
    {
        $validators = $request->validate([
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        $help = new help();
        $help->name = $request->name;
        $help->email = $request->email;
        $help->message = $request->message;
        $help->save();
        return redirect('/');
    }
}
