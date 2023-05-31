<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Apprentices extends Model
{
    use HasFactory;
    use HasApiTokens;

    protected $filliable= [
        'name',
        'document_number',
        'email',
        'telephone',
        'course_id'
        
    ];
    public function course(){
        return $this->belongsTo(course::class);
    }
}
