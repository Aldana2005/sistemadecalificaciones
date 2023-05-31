<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Course extends Model
{
    use HasFactory;
    use HasApiTokens;

    protected $filliable = [
        'name',
        'code'
    ];
    
    public function Apprentices(){
        return $this->hasMany(Apprentices::class);
    }
}
