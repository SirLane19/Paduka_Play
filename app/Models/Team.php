<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon'];

    // Relasi ke tabel employees (sudah ada sebelumnya)
    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

    // Relasi ke tabel credits
    public function credits()
    {
        return $this->hasMany(Credit::class);
    }
}
