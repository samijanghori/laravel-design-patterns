<?php

namespace App\Repositories;
use App\interfaces\TodoInterface;
use App\Models\Todo;
class TodoRepository implements TodoInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
        
    }
     function getTodo(){
            return Todo::all();
            
        }
    function saveTodo($todoRequest){
       return Todo::create($todoRequest);
    }
}
