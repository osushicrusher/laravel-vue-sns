<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//追加
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo('App\User');
    }
}
