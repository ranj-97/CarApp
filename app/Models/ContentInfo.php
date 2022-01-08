<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContentInfo extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'content',
        'status',
        'created_by',    ];
        public function user()
        {
            return $this->belongsTo(User::class);
        }
}
