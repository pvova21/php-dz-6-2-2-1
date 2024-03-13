<?php

namespace App\Http\Controllers\Group\Student;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Student;
use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;

class StudentResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($group)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        return view('students.create', ['group' => $group]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Group $group, StoreStudentRequest $request)
    {
        Student::query()->create($request->validated());
        return redirect()->route('groups.show', ['group' => $group]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group,Student $student)
    {
        return 200;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group,Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Group $group,UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group,Student $student)
    {
        //
    }
}
