<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurs extends Model
{
    use HasFactory;
    protected $table = 'kurs';
    protected $fillable = ['currency', 'denomination', 'buying_rate', 'selling_rate'];

}
