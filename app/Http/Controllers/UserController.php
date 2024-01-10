<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public  function details($id)
    {
        $id = Crypt::encryptString($id);
        echo $id;
    }
    public   function class()
    {
        echo "class";
    }
    public   function student()
    {
        $std = DB::table('student')->get();
        return view('Admin.students.student', compact('std'));
    }
    public   function studentCreate()
    {

        return view('Admin.students.studentCreate');
    }
    public   function StudentStore(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:student|max:20',
            'email' => 'required|unique:student|max:50',
            'Password' => 'required|unique:student|min:6|max:12',
            'Phone' => 'required|max:11',
        ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'Password' => $request->Password,
            'Phone' => $request->Phone,

        );
        DB::table('student')->insert($data);
        // The blog post is valid...

        return redirect()->back()->with("success", "successfully Inserted!");
    }
    public   function studentDelete($id)
    {
        DB::table('student')->where('id', $id)->delete();
        return redirect()->back()->with("success", "successfully Delect!");
    }
    public  function studentupdate(Request $request,$id)
    {
        $validated = $request->validate([
            'name' => 'required|unique:student|max:20',
            'email' => 'required|unique:student|max:50',
            'Password' => 'required|unique:student|min:6|max:12',
            'Phone' => 'required|max:11',
        ]);
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'Password' => $request->Password,
            'Phone' => $request->Phone,

        );
        DB::table('student')->where('id',$id)->update($data);
        // The blog post is valid...

        return redirect()->back()->with("success", "successfully updact!");
    }
}
