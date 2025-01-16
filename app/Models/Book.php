<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Book extends Model
{
    protected $fillable = [
        'title',
        'isbn'
    ];

    protected $casts = [
        'id' => 'int',
        'title' => 'string',
        'isbn' => 'string',
        'created_at' => 'immutable_datetime',
        'updated_at' => 'immutable_datetime',
    ];

    /**
     * @return HasMany<BookStock>
     */
    public function stocks(): HasMany
    {
        return $this->hasMany(BookStock::class);
    }
}
