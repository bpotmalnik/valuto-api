<?php

namespace App\Casts;

use Brick\Money\Money as BrickMoney;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use InvalidArgumentException;

class Money implements CastsAttributes
{
    public function __construct(
        protected string $column
    ) {
    }

    public function get($model, string $key, $value, array $attributes)
    {
        return BrickMoney::ofMinor(
            $attributes[$this->column],
            'GBP'
        );
    }

    public function set($model, string $key, $value, array $attributes)
    {
        if (!$value instanceof BrickMoney) {
            throw new InvalidArgumentException(
                'Given value is not a Money object'
            );
        }

        return [
            $this->column => $value->getMinorAmount(),
        ];
    }
}
