<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cost', 'team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
