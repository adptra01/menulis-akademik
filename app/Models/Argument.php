<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Argument extends Model
{
    use HasFactory;

    protected $guarded = [];
    // definisikan relasi Many-to-One dengan model ArgumentCategory
    public function argumentCategory()
    {
        return $this->belongsTo(ArgumentCategory::class);
    }
}