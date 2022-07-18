<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsuarioDomicilio extends Model
{
    use HasFactory;

    protected $table = 'user_domicilio';
    protected $guarded = ["id", "created_at", "updated_at", "deleted_at"];
}
