<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'Chalanges' => 'array',  // فیلد chalanges را به‌صورت آرایه در نظر می‌گیرد
        'Solution' => 'array',  // فیلد Solution را به‌صورت آرایه در نظر می‌گیرد
    ];
}
