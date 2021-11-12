<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'flag'
    ];

    public function countryLanguage(){
        return $this->belongsTo('CountryLanguage')->withDefault(['name' => 'country Name', 'flag' => 'no set flag']);
    }

    public function users()
    {
        //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
        return $this->belongsToMany(
            User::class,
            'country_visitors',
            'country_id',
            'user_id');
    }
}
