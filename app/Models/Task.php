<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'note'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCreatedAtAttribute($date)
    {
        return Carbon::createFromDate($date)->diffForHumans();
    }
}
