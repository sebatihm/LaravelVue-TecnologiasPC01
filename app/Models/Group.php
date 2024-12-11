<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Group extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $timestamps = true;
    protected $table = 'groups';
    public $fillable = ['educational_experience_id', 'teacher_id', 'name', 'shift', 'period', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'];

}
