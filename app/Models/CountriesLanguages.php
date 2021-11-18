<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountriesLanguages extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'language_id',
    ];
}
