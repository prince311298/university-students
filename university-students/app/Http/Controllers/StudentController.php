<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $students = Student::with('teacher');

        if (request()->ajax()) {
            return DataTables::of($students)
                ->addColumn('teacher_name', function ($student) {
                    return $student->teacher ? $student->teacher->teacher_name : 'N/A'; 
                })
                ->addColumn('action', function ($student) {
                    return '<a href="' . route('students.edit', $student->id) . '" class="btn btn-sm btn-primary">Edit</a>
                        <button class="btn btn-sm btn-danger" onclick="deleteStudent(' . $student->id . ')">Delete</button>';
                })
                ->rawColumns(['action']) 
                ->make(true);
        }

        return view('students.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teachers = Teacher::all();
        return view('students.add', compact('teachers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'student_name' => 'required',
            'class_teacher_id' => 'required',
            'class' => 'required',
            'admission_date' => 'required|date',
            'yearly_fees' => 'required|numeric',
        ]);

        Student::create($request->all());
        return response()->json(['success' => 'Student added successfully']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        $teachers = Teacher::all();
        return view('students.edit', compact('student', 'teachers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'student_name' => 'required',
            'class_teacher_id' => 'required|exists:teachers,id',
            'class' => 'required',
            'admission_date' => 'required|date',
            'yearly_fees' => 'required|numeric',
        ]);

        $student = Student::find($id);
        $student->update($request->all());
        return response()->json(['success' => 'Student updated successfully']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $student = Student::find($id);
        $student->delete();
        return response()->json(['success' => 'Student deleted successfully']);
    }
}
