<?php

namespace App\Http\Controllers;

use App\student;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class students extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('school');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required'
        ]);
        $student= new Student([
            'first_name'=>$request->get('first_name'),
            'last_name'=>$request->get('last_name')
        ]);
        $student->save();
        return redirect()->route('student.create')->with('success','Data Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function a(){
        // include(view('school'));
        $reg_no=$_GET["reg_no"];
        $name=$_GET["name"];
        $mark=$_GET["mark"];
        $grade=$_GET["grade"];
        $class=$_GET["Student_class"];
        DB::table('student_table')->insert(
            ['reg_no' =>$reg_no, 'name' => $name,'mark'=>$mark, 'grade'=>$grade, 'class'=>$class]
        );
        return view('school');
    }
    public function render(){
        $datas = DB::select('select * from student_table');
        return view('data',
                    ['datas'=>$datas]
                );
    }
}
