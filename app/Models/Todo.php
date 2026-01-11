<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use App\observers\TodoObserver;

#[observedBy([TodoObserver::class])]

class Todo extends Model
{
    //
    protected $fillable = [
        'title',
        'description'
    ];
}
