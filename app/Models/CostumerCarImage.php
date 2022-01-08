<?php

namespace App\Models;

use App\Models\Costumer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CostumerCarImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'image',
    ];
    public function customer()
    {
        return $this->belongsTo(Costumer::class);
    }
}
