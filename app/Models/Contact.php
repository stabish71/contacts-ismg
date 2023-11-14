<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class,'title_id','id');

    }
}
