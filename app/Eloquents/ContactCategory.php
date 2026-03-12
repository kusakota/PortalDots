<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContactCategory extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return \Database\Factories\ContactCategoryFactory::new();
    }

    protected $fillable = [
        'name',
        'email',
    ];
}
