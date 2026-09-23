<?php

namespace App\Traits;

trait viewLocalTimezoneTrait
{
    // Set your timezone
    private $myTime = 'Asia/Dhaka';

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime:' . $this->myTime,
            'updated_at' => 'datetime:' . $this->myTime,
        ];
    }
}
