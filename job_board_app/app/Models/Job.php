<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public static array $experiance = ['entry', 'intermediate', 'senior'];
    public static array $category = [
        'IT', 'Sales', 'Finance', 'Marketing'
    ];
}
