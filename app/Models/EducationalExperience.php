<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EducationalExperience extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = true;
    protected $table = 'educational_experiences';
    protected $fillable = ['nrc', 'name', 'modality', 'description', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'];

}
