<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait ViewLocalTimezoneTrait
{
    // Set your timezone
    protected string $myTimezone = 'Asia/Dhaka';

    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value
                ? Carbon::parse($value)->timezone($this->myTimezone)
                : null,
        );
    }

    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value
                ? Carbon::parse($value)->timezone($this->myTimezone)
                : null,
        );
    }
}
