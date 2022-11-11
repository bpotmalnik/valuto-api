<?php

namespace App\Http\Resources;

use Brick\Money\Money;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Money $balance
 */
class AccountResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'balance' => $this->balance->getAmount()->toFloat(),
        ];
    }
}
