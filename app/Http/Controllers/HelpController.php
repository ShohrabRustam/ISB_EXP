<?php

namespace App\Http\Controllers;

use App\Models\help;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
       $response= $help->save();
       if($response){
            return back()->with('success','Your Message send us Successfully !! We will give you response soon!!');
       }
        return back()->with('fail',"Ohoo, Something wrong ");
    }

    public function _helpMessage(){
        $helps = help::all();
        if (Session::has('user') && (Session::get('user')['type'] == 'superadmin' || Session::get('user')['type'] == 'admin' )) {
        return view('Admin.help')->with('helps',$helps);
    }else{
        return redirect('/adminlogin');
    }
}
}
