<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'emp_tab';
    protected $primaryKey = 'id';
    protected $fillable = [
        'first_name',
        'last_name',
        'mail',
        'salary',
        'phone',
    ];
    use HasFactory;
}
