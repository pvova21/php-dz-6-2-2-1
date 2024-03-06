<?php

namespace App\Http\Controllers;


use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Получение списка всех групп
         $groups = Group::all();

         // Вывод страницы со списком групп
         return view('groups.index', ['groups' => $groups]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'start_from' => 'required|date',
            'is_active' => 'required|boolean',
        ]);

        $group = Group::create($validatedData);
        $groups = Group::all();

        return redirect()->route('groups.index')->with('success', 'Группа успешно создана');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
         // Получение информации о группе и её студентах
         $group = Group::with('students')->findOrFail($group);

         // Вывод страницы с информацией о группе и списком студентов
         return view('groups.show', ['group' => $group]);
    }

}
