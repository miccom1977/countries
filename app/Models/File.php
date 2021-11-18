<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'file_path',
        'country_id'
    ];

    public function find($id): ?File
    {
        return File::where('country_id', '=', $id)->get();
    }
}
