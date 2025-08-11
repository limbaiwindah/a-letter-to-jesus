<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    protected $fillable = ['content', 'sender']; // Laravel's security feature to prevent mass-assignment vulnerability
}
