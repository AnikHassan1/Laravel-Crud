<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $td=DB::table('teacher')->get();
        return view('Admin.teacher.index',compact('td'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $st=DB::table("class")->get();
        return view('Admin.Teacher.create',compact('st'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:55',
            'Age' => 'required',
            'Subject' => 'required',
            'Class_id' => 'required',
        ]);
        $ar=array(
            'name'=>$request->name,
            'Age'=>$request->Age,
            'Subject'=>$request->Subject,
            'Class_id'=>$request->Class_id,
        );
        DB::table('teacher')->insert($ar);
        return redirect()->back()->with("success","successfully Insert !");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $show=DB::table('teacher')->where('id',$id)->first();
       return view('Admin.teacher.show',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $td=DB::table('teacher')->where('id',$id)->first();
        $st=DB::table("class")->get();
        return view('Admin.teacher.edit',compact('td','st'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|max:55',
            'Age' => 'required',
            'Subject' => 'required',
            'Class_id' => 'required',
        ]);
        $ar=array(
            'name'=>$request->name,
            'Age'=>$request->Age,
            'Subject'=>$request->Subject,
            'Class_id'=>$request->Class_id,
        );
        DB::table('teacher')->where('id',$id)->update($ar);
        return redirect()->route('Teachers.index')->with("success","successfully update !");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       DB::table('teacher')->where('id',$id)->delete();
       return redirect()->back()->with('success',"success Delet !");
    }
}
