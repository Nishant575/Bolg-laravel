<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class posts extends Model
{
    use HasFactory;

    protected $gaurded = [];

    protected $fillable = ['body','user_id'];
    public function creator()
    {
      return $this->belongsTo(User::class, 'user_id');

    }

}
