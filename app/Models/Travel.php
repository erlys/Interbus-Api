<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    use HasFactory;

    protected $table = 'travels';

    public function tickets() 
    {
        return $this->hasMany(Ticket::class);
    }

    public function bus()
    {
        return $this->belongsTo(Bus::class);
    }
}
