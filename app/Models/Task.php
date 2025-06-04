<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
 
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string, int>
     */
    protected $fillable = [
        'title',
        'description',
        'is_completed'
    ];

    protected $casts = [
        'is_completed' => 'boolean'
    ];

}
