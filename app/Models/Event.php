<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "address",
        "start_date",
        "end_date",
        "description",
        "logo",
        "banner"
    ];

    protected $dates = ['start_date', 'end_date'];
}
