<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $idGrade = $request->get('id-grade');
        $listGrade = Grade::all();
        $listStudent = student::join("grade", "student.id_grade", "=", "grade.id_grade")
        ->where("student.id_grade", $idGrade)
        ->where("name_student", "like", "%$search%")
        ->paginate(10);
        return view('student.index', [
            'listStudent' => $listStudent,
            'listGrade'=>$listGrade,
            'search' => $search,
            "idGrade" => $idGrade,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $listGrade = Grade::all();
        return view('student.create', [
            "listGrade" => $listGrade
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $names = $request->get('name');
        $grade = $request->get('grade');
        $gender = $request->get('gt');
        $birthday = $request->get('ns');
        $status = $request->get('status');
        $Student= new Student();
        $Student->name_student = $names;
        $Student->id_grade = $grade;
        $Student->gender = $gender;
        $Student->birthday = $birthday;
        $Student->trang_thai = $status;
        $Student->save();
        return redirect()->route('student.index');
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
        $listStudent = student::join("grade", "student.id_grade", "=", "grade.id_grade")
        ->find($id);
        $listGrade = Grade::all();
        return view('student.edit', [
            "listStudent" => $listStudent,
            "listGrade" => $listGrade
        ]);
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
        $names = $request->get('name');
        $grade = $request->get('grade');
        $gender = $request->get('gt');
        $birthday = $request->get('ns');
        $status = $request->get('status');
        $Student= student::find($id);
        $Student->name_student = $names;
        $Student->id_grade = $grade;
        $Student->gender = $gender;
        $Student->birthday = $birthday;
        $Student->trang_thai = $status;
        $Student->save();
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        student::where('id_student', $id)->delete();
        return redirect(route('student.index'));
    }
    public function hide($id)
    {
        echo $id;
        return redirect(route('student.index'));
    }
}
