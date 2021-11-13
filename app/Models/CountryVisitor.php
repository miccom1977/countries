<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CountryVisitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'user_id',

    ];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'country_visitors',
            'id',
            'user_id');
    }
}
