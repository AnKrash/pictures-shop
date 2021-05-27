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

    /**
     * Связь «многие ко многим» таблицы `baskets` с таблицей `lamps`
     */
  /*  public function products()
    {
        return $this->belongsToMany(lamps::class)->withPivot('quantity');
    }
}
class lamps extends Model {
    /**
     * Связь «многие ко многим» таблицы `products` с таблицей `baskets`
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
  /*  public function baskets() {
        return $this->belongsToMany(Basket::class)->withPivot('quantity');
    }
}
