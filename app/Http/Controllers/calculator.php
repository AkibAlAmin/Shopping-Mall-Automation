<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class calculator extends Controller
{

    
    public function calculator(Request $request)
    {
        $firstvalue = $request->input('firstvalue');
        $secondvalue = $request->input('secondvalue');
        $sign=$request->input('sign');

        $result=0;
        if($sign == 'add') {
            $result = $firstvalue + $secondvalue;
        }
        if($sign == 'sub') {
            $result = $firstvalue - $secondvalue;
        }
        if($sign == 'mul') {
            $result = $firstvalue * $secondvalue;
        }
        if($sign == 'div') {
            $result = $firstvalue / $secondvalue;
        }
            //echo $result;
            return redirect()->back()->withInput()->with(compact('result'));
    //        return redirect()->back()->with('result','firsvalue','secondvalue');
        //return view('calculator',compact('result'));
    }


    public function getcal() {
        return view('calculator');
    }
}
