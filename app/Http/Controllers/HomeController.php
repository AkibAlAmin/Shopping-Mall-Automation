<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ManageCategory()
    {
        $alldata=DB::table('floors_categories')->get();

        return view('manage_category',compact('alldata'));
    }

    public function AddCategory()
    {
        return view('categoryAdd');
    }

    public function SaveCategory(Request $request)
    {
        $category = $request->input('floor_category');

        $data = array();

        $data['categori_name'] = $category;
        $data['status'] = 1;

        DB::table('floors_categories')->insert($data);

        return redirect('manage_category');
    }

    public function UpdateCategory(Request $request)
    {
        $category = $request->input('floor_category');
        $id= $request->input('id');

        $data = array();

        $data['categori_name'] = $category;
     //   $data['status'] = 1;

        DB::table('floors_categories')->where('id',$id)->update($data);

        return redirect('manage_category');
    }




    public function DeleteCategory($id)
    {
        DB::table('floors_categories')->where('id', $id)->delete();

        return redirect('manage_category');
    }

    public function GetUpdateCategory($id)
    {
        // $category = $request->input('id');

        // $data = array();

        // $data['categori_name'] = $category;

        // DB::table('floors_categories')->where('id',$id)->update($data);

        // DB::table('floors_categories')->where('id',$id)->update($data);

        $users = DB::table('floors_categories')->where('id',$id)->first();
//dd($users);


        return view('view_update_category',compact('users'));
    }

}
