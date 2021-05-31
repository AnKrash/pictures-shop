<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_picture extends Model
{

    public function product() {
        return $this->belongsTo(picture::class);
    }
}
