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
    protected $fillable = ['nrc', 'name', 'modality', 'educative_program','description', 'created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by', 'deleted_by'];

    public static $educativeProgram = [
        1 => 'INGENIERIA DE SOFTWARE',
        2 => 'ADMINISTRACION',
        3 => 'GESRTION Y DIRECCION DE NEGOCIOS',
        4 => 'CONTABLIDAD',
        5 => 'INGENIERIA QUIMICA',
        6 => 'INGENIERIA ELECTRICA'
    ];

}
