<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DailyLog extends Model
{
    use HasFactory;
    protected $fillable = [
        "id",
        "date",
        "time",
        "accomplishment",
        "remarks"
    ];
    protected $casts = [
        'time' => 'date:h:m a'
    ];
}
