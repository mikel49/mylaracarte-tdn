<?php

namespace App\Models;

use App\Scopes\DateScopale;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use DateScopale;
    
    protected $fillable = ['name', 'email', 'message'];
}
