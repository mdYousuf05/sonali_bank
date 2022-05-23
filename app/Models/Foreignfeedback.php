<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foreignfeedback extends Model
{
    use HasFactory;
    protected $table = 'foreignfeedbacks';
    protected $fillable = ['name','email','feedback'];
}
