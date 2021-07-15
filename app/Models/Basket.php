<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Basket extends Model
{
    /**
     * Связь «многие ко многим» таблицы `baskets` с таблицей `products`
     */
   public function products()
    {
        return $this->belongsToMany(picture::class)->withPivot('quantity');
    }
}
