<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function _adminSignup(Request $request)
    {
        $validators = Validator::make($request->all(), [
            'name' => 'required|regex:/^[a-zA-Z\s]+$/',
            'email' => 'required|max:255|unique:admins',
            'mobile' => 'required|min:6000000000|max:9999999999|numeric|unique:admins',
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

    public function  _login(Request $request)
    {

        $validators = Validator::make($request->all(), [
            'email' => 'required|max:255',
            'password' => 'required|min:6'
        ]);
        if ($validators->passes()) {
            $admin = Admin::where(['email' => $request->email])->first();
            if (!$admin || !Hash::check($request->password, $admin->password)) {
                $response = response()->json(['status' => 'false', 'message' => ' Email or Password Incorrect !! ', 'code' => 409]);
            } else {
                $response = response()->json(['status' => 'true', 'message' => ' Login Successfully  !!', 'code' => 201]);
            }
        } else {
            $response = response()->json(['status' => 'false', 'error' => $validators->errors()->all(), 'code' => 201]);
        }

        return $response;

    }
}
