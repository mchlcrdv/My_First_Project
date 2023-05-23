<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration_Model extends Model
{
    use HasFactory;
    
    protected $table = 'registration';

    protected $fillables = ["name", "email", "password", "repeat_password"];
}
