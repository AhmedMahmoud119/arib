<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public $fillable = [
        'name'
    ];

    public function employees()
    {
        return $this->hasMany(User::class, 'department_id');
    }
}
