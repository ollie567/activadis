<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  ActivityRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
        'activityId',
        'userId',
    ];
}
