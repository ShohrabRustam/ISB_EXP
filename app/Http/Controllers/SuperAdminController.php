<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class SuperAdminController extends Controller
{
    //
    public function adminsignup(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|max:255|max:255|unique:users',
            'mobile' => 'required|min:6000000000|max:9999999999|numeric',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6'
        ]);
        if ($validators->passes()) {
            $user = new Admin();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->mobile = $request->mobile;
            $user->password = Hash::make($request->password);
            $user->save();
            $response = response()->json(['status' => 'true', 'message' => ' Congratulations! Your account has been Created Successfully !!', 'code' => 201]);
        } else {
            $response = response()->json(['status' => 'false', 'error' => $validators->errors()->all(), 'status' => 409]);
        }
        return $response;

        // if (Session::has('user') && Session::get('user')['type'] == 'superadmin') {

        //     return redirect('adminlogin');
        // } else {
        //     return redirect('superadminlogin');
        // }
    }

}
