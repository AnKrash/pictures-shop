<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Integer;

class Order_picture extends Model
{
    public function items() {
        return $this->belongsTo(picture::class);
    }
}
