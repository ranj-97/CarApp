<?php

namespace App\Models;

use App\Models\Costumer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CustomerCar extends Model
{
    use HasFactory;
    protected $fillable = [
        'customer_id',
        'bought_at',
        'car_name',
        'car_model',
        'car_color',
        'vehicle_identification_number',
        'received_at',
        'container_number',
        'bought_place',
        'buying_price',
        'transferring_price',
        'commission',
        'total_price',
        'payed_amount',
        'payed_at',
        'total_price',
        'status',
    ];
    public function customer()
    {
        return $this->belongsTo(Costumer::class);
    }

}
