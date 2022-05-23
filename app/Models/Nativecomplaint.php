<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nativecomplaint extends Model
{
    use HasFactory;
    protected $table = 'nativecomplaints';
    protected $fillable = ['name','email','phone','nationality','hometown','nid', 'location','message'];
}
