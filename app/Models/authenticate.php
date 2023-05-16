<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class authenticate extends Model
{
    use HasFactory;

    protected $table = "authenticates";
    protected $primaryKey = 'id';
}
