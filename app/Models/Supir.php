<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supir extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $fillable = ['nama', 'no_telp', 'no_sim', 'masa_berlaku', 'status'];
}
