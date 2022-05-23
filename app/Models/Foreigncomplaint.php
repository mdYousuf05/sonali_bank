<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foreigncomplaint extends Model
{
    use HasFactory;
    protected $table = 'foreigncomplaints';
    protected $fillable = ['name','email','phone','nationality','hometown','passport','visanum','visatype','visaexp','dateofentry','location','message'];
}
