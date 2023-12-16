<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postingan extends Model
{
    use HasFactory;
    protected $table = "postingans";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}
