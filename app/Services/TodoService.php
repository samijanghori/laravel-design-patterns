<?php

namespace App\Services;
use App\interfaces\TodoInterface;
class TodoService
{
    /**
     * Create a new class instance.
     *
     */
    public $todointerface;
    public function __construct(TodoInterface $todointerface)
    {
        //
        $this->todointerface = $todointerface;
    }

    public function getTodo(){
        return $this->todointerface->getTodo();
    }

    public function saveTodo($request){
        $todo = $this->mapTodoform($request);
       return $this->todointerface->saveTodo($todo);
    }
    public function mapTodoform($request){
        return ([
            'title' => $request->title ,
            'description' => $request->description
        ]);
    }


}
