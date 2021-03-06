<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'comment',
    ];

    /**
     * connection to pictures table
     */
    public function pictures()
    {
        return $this->belongsToMany(picture::class, "order_pictures")->withPivot('quantity');
    }
}
