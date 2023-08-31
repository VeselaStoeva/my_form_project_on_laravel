<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormDate extends Model
{
    use HasFactory;
    protected $table = 'form_dates';
    protected $fillable=[
      'name',
      'email'
    ];
}
