<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WidgetContentTranslation extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    protected $casts = [
        'widget_content' => 'array',
    ];


}