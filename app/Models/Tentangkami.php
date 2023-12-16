<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tentangkami extends Model
{
    use HasFactory;
    protected $table = "tentangkamis";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}
