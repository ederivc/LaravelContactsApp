<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'address',
        'image_path'
    ];
}
