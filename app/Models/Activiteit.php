<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activiteit extends Model
{
    use HasFactory;
    protected $table = 'activiteiten';

    protected $fillable = [
        'activiteitnaam',
        'activiteitlocatie',
        'activeitomschrijving',
        'activeiteten',
        'activiteitmindeelnemers',
        'activiteitmaxdeelnemers',
        'activiteitkosten',
        'activiteitbenodigheden',
        'activiteitbegintijd',
        'activiteiteindtijd',
        'activiteitafbeelding'
    ];


}
