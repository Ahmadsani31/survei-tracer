<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurveiModel extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $fillable = [
        'nama', 'tanggal_mulai', 'tanggal_selesai'
    ];
}
