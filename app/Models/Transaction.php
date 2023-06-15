<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_user',
        'id_item',
        'notes',
        'order_option',
        'payment_option',
        'total',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function items(): BelongsTo
    {
        return $this->belongsTo(Item::class, 'id_item');
    }
}
