<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    use HasFactory;

    protected $fillable = [
        'batch_number',
        'expiry_date',
        'quantity',
    ];

    public function medicines()
    {
        return $this->hasMany(Medicine::class);
    }
}
