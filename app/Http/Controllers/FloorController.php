<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FloorController extends Controller
{

    public function ManageFloor()
    {
        $alldata=DB::table('floors')
        ->join('floors_categories', 'floors.floor_categories', '=', 'floors_categories.id')
        ->select('floors.*','floors_categories.categori_name')
        ->get();
//dd($alldata);
        return view('manage_floor',compact('alldata'));
    }

    public function AddFloor()
    {
        $allCategories=DB::table('floors_categories')->get();
        return view('FloorAdd',compact('allCategories'));
    }

    public function SaveFloor(Request $request)
    {
        $category = $request->input('category');
        $blocks = $request->input('blocks');
        $floor_name = $request->input('floor_name');

        $data = array();

        $data['floor_categories'] = $category;
        $data['blocks'] = $blocks;
        $data['name'] = $floor_name;
        $data['status'] = 1;

        DB::table('floors')->insert($data);

        return redirect('manage_floor');
    }

    public function DeleteFloor($id)
    {
        DB::table('floors')->where('id', $id)->delete();

        return redirect('manage_floor');
    }


    public function GetUpdateFloor($id)
    {
        $users = DB::table('floors')->where('id',$id)->first();

        $allCategories=DB::table('floors_categories')->get();

        return view('view_update_floor',compact('users','allCategories'));
    }


    public function UpdateFloor(Request $request)
    {
        $id = $request->input('id');
        $category = $request->input('category');
        $blocks= $request->input('blocks');
        $floor_name= $request->input('floor_name');

        $data = array();

        $data['id'] = $id;
        $data['floor_categories'] = $category;
        $data['blocks'] = $blocks;
        $data['name'] = $floor_name;

        DB::table('floors')->where('id',$id)->update($data);

        return redirect('manage_floor');
    }
}
