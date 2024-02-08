<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribution extends Model
{
    use HasFactory;

    protected $guarded =[];

    // relation start

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
