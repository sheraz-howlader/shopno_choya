<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deposit extends Model
{
    use SoftDeletes;
    protected $fillable = ['user_id', 'amount', 'payment_status', 'payment_at','remark', 'is_adjustment', 'statement_file'];

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

    public function getDisplayStatusAttribute(): string
    {
        $status = $this->payment_status;

        return match ($status) {
            "confirm" => "<p class='badge text-bg-info m-0'> Confirm </p>",
            "reject" => "<p class='badge text-bg-danger m-0'> Reject </p>",
            default => "<p class='badge text-bg-warning m-0'> Pending </p>",
        };
    }
}
