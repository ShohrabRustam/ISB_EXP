<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    //
    public function _purchasePolicy(Request $request){
        return $request->all();
    }
}
