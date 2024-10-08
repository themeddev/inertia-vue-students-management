<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'classe_id', 'section_id']; 

    protected $with = ['classe', 'section'];

    public function classe() {
        return $this->belongsTo(Classe::class, 'classe_id');
    }

    public function section() {
        return $this->belongsTo(Section::class);
    }


}
