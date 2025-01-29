<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Strategic extends Model
{
    use HasFactory;

    protected $fillable = ['round', 'team', 'hire_name', 'hire_cost', 'train_name', 'train_from'];
}
