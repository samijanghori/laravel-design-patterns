<?php

namespace App\Http\Controllers;

use App\Services\TodoService;
use Illuminate\Http\Request;
use App\Http\Requests\TodoFormRequest;


class todosController extends Controller
{
    public $todoservice;
    /**
     * Display a listing of the resource.
     */
    public function __construct(TodoService $todoservice ){
        $this->todoservice = $todoservice;
    }
    public function index() 
    {
       $todos = $this->todoservice->getTodo();
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
    public function store(TodoFormRequest $request)
    {
        //
       $todo = $this->todoservice->saveTodo($request);
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
