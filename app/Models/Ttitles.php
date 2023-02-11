<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ttitles extends Model
{
    use HasFactory;
    protected $table = 'ttitles';
    public $timestamps = false;
    protected $fillable = [
        'TTITLES_Id',
        'TTITLES_Name',
        'TTITLES_Pista',
        'TTITLES_Length',
        'TTITLES_Autor',
        'TTITLES_Status',

    ];
}