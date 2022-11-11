<?php

namespace App\Http\Resources;

use Brick\Money\Money;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @property Money $amount
 */
class TransactionResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'account_id' => $this->account_id,
            'account' => new AccountResource($this->account),
            'name' => $this->name,
            'amount' => $this->amount->getAmount()->toFloat(),
        ];
    }
}
