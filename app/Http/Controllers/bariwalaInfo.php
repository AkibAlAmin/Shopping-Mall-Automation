<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class bariwalaInfo extends Controller
{

    public function getBariwala()
    {



$alldata=DB::table('bariwala')->get();

return view('viewInfo',compact('alldata'));


    }
    public function saveBariwala(Request $request)
    {
        $Bid = $request->input('nid-number');
        $Bname = $request->input('full-name');
        $Badd = $request->input('present-address');
        $Bcontact = $request->input('phone-number');
        $Bmail = $request->input('email-address');

        $data = array();

        $data['Bid'] = $Bid;
        $data['Bname'] = $Bname;
        $data['Badd'] = $Badd;
        $data['Bcontact'] = $Bcontact;
        $data['Bmail'] = $Bmail;
// dd($data);
        DB::table('bariwala')->insert($data);

$alldata=DB::table('bariwala')->get();

return view('viewInfo',compact('alldata'));


    }

    public function getBariwalaInfo()
    {
        return view('bariwalaInfo');
    }

    public function bariwalaViewinfo()
    {
        return view('viewinfo');
    }

    public function editbariwala($id)
    {
        $alldata=DB::table('bariwala')->where('id',$id)->first();

        //dd($alldata);

        return view('editbariwala')->with('alldata', $alldata);
    }

    public function update_editbariwala(Request $request)
    {
        $id = $request->input('id-number');
        $Bid = $request->input('nid-number');
        $Bname = $request->input('full-name');
        $Badd = $request->input('present-address');
        $Bcontact = $request->input('phone-number');
        $Bmail = $request->input('email-address');

        $data = array();

        $data['Bid'] = $Bid;
        $data['Bname'] = $Bname;
        $data['Badd'] = $Badd;
        $data['Bcontact'] = $Bcontact;
        $data['Bmail'] = $Bmail;

        DB::table('bariwala')->where('id',$id)->update($data);


    }
}
