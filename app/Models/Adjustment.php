<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Adjustment extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id', 'deposit_id' ,'amount', 'payment_status', 'payment_at','remark'];

    protected $casts = [
        'payment_at' => 'datetime',
    ];

    protected static function booted(): void
    {
        static::creating(function ($deposit) {
            $deposit->created_by = auth()->id();
        });

        static::updating(function ($deposit) {
            $deposit->updated_by = auth()->id();
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
