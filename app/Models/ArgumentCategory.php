<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArgumentCategory extends Model
{
    use HasFactory; 
    
    protected $fillable = [
        'slug', 'name', 'description'
    ];

    protected $table = 'argument_categories';

    // definisikan relasi One-to-Many dengan model Argument
    public function arguments()
    {
        return $this->hasMany(Argument::class);
    }
}
