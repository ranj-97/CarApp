<?php

namespace App\Models;

use App\Models\CustomerCar;
use App\Models\CostumerCarImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Costumer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'username',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
    ];
    public function cars()
    {
        return $this->hasMany(CustomerCar::class);
    }
    public function costumer_images()
    {
        return $this->hasMany(CostumerCarImage::class);
    }


}
