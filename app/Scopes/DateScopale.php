<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;

trait DateScopale
{
    public function scopeOneMonthOld(Builder $query)
    {
        $query->where('created_at', '<=', now()->subMonth(1));
    }
}
