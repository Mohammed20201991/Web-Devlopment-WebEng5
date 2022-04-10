<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    // can be  Eloquent\MassAssignmentException
    public $fillable = ['name','description','image_url'];
}
