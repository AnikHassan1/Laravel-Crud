<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class classesController extends Controller
{
    public function classIndex()
    {
        $clad = DB::table('class')->get();
        return view('Admin.class.classList', compact("clad"));
    }
    public function classCreate()
    {
        return view('Admin.class.classCreate');
    }
    public function classStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:class|max:20',
        ]);
        $datas = array(
            'name' => $request->name,
        );
        DB::table('class')->insert($datas);
        return redirect()->back()->with("success", "successFully Insert Class!");
    }
    public function classdelete($id)
    {
        DB::table('class')->where('id', $id)->delete();
        return redirect()->back()->with("success", "successfully Delect!");
    }
    public function classUpdate($id){
        $da = DB::table('class')->where('id',$id)->get();
        return view('admin.class.classupdate',compact('da'));
    }
}
