<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($group)
    {

        return view('students.create', ['group' => Group::query()->where('id', $group)->first()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $group)
    {
        $request->validate([
            'surname' => 'required',
            'name' => 'required',
        ]);

        $student = new Student([
            'group_id' => $group->id,
            'surname' => $request->input('surname'),
            'name' => $request->input('name'),
        ]);

        $student->save();


        return redirect()->route('groups.show', ['group' => $group]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group, Student $student)
    {
          $student = Student::findOrFail($student);
          return view('students.show', ['student' => $student, 'group' => $group]);
    }

}
