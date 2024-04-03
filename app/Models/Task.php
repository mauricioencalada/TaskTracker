<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

/*
    protected $fillable = [
        'titulo',
        'descripcion',
        'slug',
        'start_date',
        'due_date',
        'completed',
    ];*/

    protected $guarded =[];
    
    public function getRouteKeyName(){
        return 'slug';
    }

}
