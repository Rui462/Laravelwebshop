<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tablaneve extends Model
{
    use HasFactory;
    protected $table = 'tablaneve';
    protected $fillable = ['nev', 'kor'];
}
