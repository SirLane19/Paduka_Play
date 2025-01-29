<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketingRound extends Model
{
    use HasFactory;

    protected $fillable = ['round', 'team', 'upgrade_name', 'upgrade_cost', 'reach_customer'];
}
