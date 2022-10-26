<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenchilboxController extends Controller
{
    function money_exchange_box(){
        return view('bitbirds');
    }
    function money_exchange(Request $request){
        $request->validate([
            "*"=>'required',
            $request->amount=>'numeric',
        ]);
        if ($request->currency==1) {
            $result= $request->amount*102.50." BDT" ;
        }else{
            $result= $request->amount/102.50." USD";
        }
        return back()->with("result", $result);
    }
}
