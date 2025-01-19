<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'icon', 'round'];

    // Relasi ke data marketing
    public function marketingData()
    {
        return $this->hasMany(MarketingData::class);
    }

    // Relasi ke data kredit
    public function credits()
    {
        return $this->hasMany(Credit::class);
    }
}
