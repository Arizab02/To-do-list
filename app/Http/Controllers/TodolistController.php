<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Doctrine\Common\Lexer\Token;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ToDoList::all();
        return view('todolist.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = ToDoList::all();
        return view('todolist.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'nullable',
            'status' => 'nullable',
        ]);

        $data = new ToDoList();
        $data->title = $request->title;
        $data->body = $request->body;
        $data->status = $request->status;

    }

    /**
     * Display the specified resource.
     */
    public function show(ToDoList $toDoList)
    {
        $data = ToDoList::findOrFail($toDoList->id);
        return view('todolist.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ToDoList $toDoList)
    {
        $data = ToDoList::findOrFail($toDoList->id);

        return redirect()->route('todolist.index')->with('message', "{$data->title} Berhasil diubah");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ToDoList $toDoList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ToDoList $toDoList)
    {
        $data = ToDoList::findOrFail($toDoList->id);
        $data->delete();

        return redirect()->route('todolist.index')->with('message', "{$data->title} Berhasil Dihapus");
    }
}
