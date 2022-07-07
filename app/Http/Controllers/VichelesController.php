<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class VichelesController extends Controller
{

    public function _riskanalysis(){
        if (Session::has('user')) {
        return view('Users.riskAnalysis');
        }else{
            return redirect('login');
        }
    }

    public function _risk(Request $request){
        $timestamp = strtotime($request->dob);
        $year=date('Y',$timestamp);
        $currentYear = date("Y");
        $age = $currentYear - $year;
        $risk = $request->smoke  + $request->drink + $request->health + $request->cancer + $request->blood ;
        if($age<=0 || $age>=70){
            return back()->with('fail', 'You are not eligible due to your age !!');
        }
        else if ($risk>100){
            return back()->with('fail','You are not eligable for the policy ');
        }
        else if($age>0 && $age <=22){
            $risk = $risk;
        }
        else{
            $risk = $risk + ($age - 22);
        }
        $request->session()->put('risks', $risk);
        return redirect('/');
    }

   public function _riskAnalysisVehicle(){
       if(Session::has('user')){
        return view('Users.riskVehicle');
       }else{
           return redirect('/login');
       }
    }


    public function _riskVehicle(Request $request){

        $validators = $request->validate([
            'vehicle' => 'required|regex:/^[A-Z]{2}\s[0-9]{1,2}\s[A-Z]{1,2}\s[0-9]{1,4}$/'
        ]);
        $timestamp = strtotime($request->dop);
        $year=date('Y',$timestamp);
        $currentYear = date("Y");
        $age = $currentYear - $year;
        if($age<0){
            return back()->with('fail','Year of Purchase Incorrect');
        }else{
        $risk = $request->service  + $request->damage + $age * 3;
        $data = $request->all();
        $request->session()->put('risk',$risk);
        $request->session()->put('vrisks',$data);
        return redirect('/');
        }

    }

}
