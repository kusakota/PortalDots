<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Read extends Pivot
{
    use HasFactory;

    protected static function newFactory()
    {
        return \Database\Factories\ReadFactory::new();
    }

    protected $table = 'reads';
    public $incrementing = true;
}
