<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameInput extends Model
{
    use HasFactory;

    protected $fillable = ['round', 'kredit_konsumtif', 'kredit_produktif', 'penempatan_pusat', 'giro', 'pinjaman_pusat', 'asuransi', 'kartu_kredit', 'bintang'];
}
