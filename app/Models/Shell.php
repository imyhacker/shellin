<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shell extends Model
{
    use HasFactory;
    protected $table = 'shell';
    protected $fillable = ['nama','harga','domain','url','query','continent','continentCode','country','countryCode','city','timezone','isp'];
}
