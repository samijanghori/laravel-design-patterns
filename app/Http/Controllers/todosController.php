<?php

namespace App\Http\Controllers;

use App\interfaces\TodoInterface;
use Illuminate\Http\Request;

class todosController extends Controller
{
    public $todointerface;
    /**
     * Display a listing of the resource.
     */
    public function __construct(TodoInterface $todointerface){
        $this->todointerface = $todointerface;
    }
    public function index() 
    {
       $todos = $this->todointerface->getTodo();
        return view('todos.index',compact('todos'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

       $todo = $this->todointerface->saveTodo($request);
        if($todo){
                    return back()->with('success','Todo created successfully');

        }else{
            return back()->with('failure','could not create');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
