<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
    use HasFactory;

    protected $fillable = ['nidn', 'nama', 'status'];

    protected $primaryKey = 'nidn';
    public $incrementing = false;

    // function getLectureStudent()
    // {
    //     $this->belongTo('Student');
    // }
}
