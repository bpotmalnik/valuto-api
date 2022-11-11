<?php

namespace App\Models;

use App\Casts\Money;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'account_id',
        'name',
        'amount',
    ];

    protected $casts = [
        'amount' => Money::class . ':amount',
    ];

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }
}
