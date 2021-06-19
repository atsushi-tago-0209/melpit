<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    const STATE_SELLING = 'selling';
    const STATE_BOUGHT = 'bought';

    public function secondaryCategory()
    {
        return $this->belongsTo(SecondaryCategory::class);
    }

    public function getIsStateSellingAttribute()
    {
        return $this->sate === self::STATE_SELLING;
    }
}
