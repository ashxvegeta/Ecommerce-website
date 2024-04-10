<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', // Add this line to allow mass assignment on the 'name' field
        'description',
        'price',
        'category',
        'gallary'
        // Add any other fields you want to allow mass assignment for
    ];
}
