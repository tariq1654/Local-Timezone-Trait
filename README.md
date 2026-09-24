## Laravel Local Timezone Trait:
A simple, dynamic, and reusable Laravel Trait that automatically converts UTC database timestamps (created_at and updated_at) into your configured local timezone (e.g., Asia/Dhaka) at runtime.
This trait enables you to completely eliminate the need to write repetitive conversion code in your Blade views or API responses.

## Features:
* DRY Approach (Don't Repeat Yourself): No need to manually convert timezones in every blade file or controller query.
* Standard Database Storage: Keeps your database clean using UTC standard, while seamlessly rendering local time to end-users.
* Plug & Play: Requires only a single line of code inside your Eloquent models to take effect.

## Installation & Usage:
1. Create the Trait File
Copy the file inside the app/Traits/ directory of your Laravel application

2. Implement in Your Models
Import the trait inside any Eloquent model where you want localized timestamps:

```<?php

namespace App\Models;

use App\Traits\viewLocalTimezoneTrait; // Import the trait
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use viewLocalTimezoneTrait; // Apply the trait

    // Rest code goes here...
}
```
