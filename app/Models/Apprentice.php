<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apprentice extends Model
{
    use SoftDeletes;

    protected $table = 'apprentices';
    protected $fillable = ['id', 'name', 'document_number', 'city', 'email', 'telephone'];
}
