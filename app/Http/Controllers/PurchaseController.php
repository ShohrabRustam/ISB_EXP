<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Carbon;

class PurchaseController extends Controller
{
    //
    public function _purchasePolicy(Request $request){
        // return $request->all();
        $purchase = new Purchase();
        $purchase->userid= $request->userid;
        $purchase->policyid = $request->policyid;
        $purchase->risk = Session::get('risks');
        $purchase->p_price = $request->p_price;
        $purchase->c_price = $request->c_price;
        $purchase->reason= "We are reviewing your details We will update soon ";
        $purchase->expired_policy= Carbon::now();;
        $response = $purchase->save();
        if ($response){
            $p = Purchase::where('userid', '=', $request->userid)->where('policyid','=',$request->policyid)->get()->last();
            $transaction= new transaction();
            $transactionid = Carbon::now()->timestamp;
            $transaction->userid = $request->userid;
            $transaction->purchaseid = $p->id;
            $transaction->transactionid= $transactionid;
            $result = $transaction->save();
            if($result){
                return view('transaction.transaction')->with('transactionid', $transactionid)->with('price', $request->p_price);
            }else{
                return view('transaction.transaction')->with('transactionid', 'fail')->with('price', $request->p_price);
            }
        }

    }
}
