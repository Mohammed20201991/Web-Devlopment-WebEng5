<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use HasFactory;
    public $fillable = ['name','filename','color'];

    public function projects(){
        return $this->belongsTo(Project::class);
        }
}
