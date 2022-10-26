<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'account' => [
                'id' => $this->account->id,
                'name' => $this->account->name,
            ],
            'name' => $this->name,
            'amount' => $this->amount,
        ]; 
    }
}
