<?php

namespace App\Models;

use App\Models\User;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function users()
    {
        return $this->belongsToMany(
            User::class,
            'country_visitors',
            'country_id',
            'user_id');
    }

    public function file(){
        return $this->hasOne('App\Models\File');
    }

    public function languages()
    {
        return $this->belongsToMany(
            Language::class,
            'countries_languages',
            'country_id',
            'language_id');
    }

}
