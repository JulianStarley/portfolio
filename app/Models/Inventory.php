<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'medicine_id',
        'action', // 'entry', 'exit', 'discard'
        'quantity',
        'date',
    ];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class);
    }
}
