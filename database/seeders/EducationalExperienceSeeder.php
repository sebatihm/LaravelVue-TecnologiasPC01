<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class EducationalExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('educational_experiences')->insert([
            [
                'id' => 1
                , 'nrc' => 86345
                ,'name' => 'Redes'
                , 'modality' => 'Escolarizado',
                'description' => 'Estudio de las redes de computadoras, su arquitectura, protocolos y servicios.'
            ],
            [
                'id' => 2
                , 'nrc' => 86346
                ,'name' => 'Introduccion a la Programacion'
                , 'modality' => 'Escolarizado',
                'description' => 'Aprendizaje de los conceptos básicos de programación, incluyendo sintaxis, algoritmos y estructuras de datos.'
            ],
            [
                'id' => 3,
                'nrc' => 86347,
                'name' => 'Programacion',
                'modality' => 'Escolarizado',
                'description' => 'Desarrollo de habilidades en programación utilizando lenguajes y herramientas específicas.'
              ] ,
              [
                'id' => 4,
                'nrc' => 86348,
                'name' => 'Diseño de software',
                'modality' => 'Escolarizado',
                'description' => 'Aplicación de principios y técnicas para el diseño de software eficiente y de alta calidad.'
              ] ,
              [
                'id' => 5,
                'nrc' => 86349,
                'name' => 'Pruebas de Penetracion',
                'modality' => 'Escolarizado',
                'description' => 'Evaluación de la seguridad de sistemas informáticos mediante la simulación de ataques.'
              ] ,
              [
                'id' => 6,
                'nrc' => 86350,
                'name' => 'Pruebas de software',
                'modality' => 'Escolarizado',
                'description' => 'Verificación y validación de software para asegurar su calidad y cumplimiento de requisitos.'
              ] ,
              [
                'id' => 7,
                'nrc' => 86351,
                'name' => 'Base de Datos',
                'modality' => 'Escolarizado',
                'description' => 'Diseño, implementación y gestión de bases de datos relacionales y no relacionales.'
              ] ,
              [
                'id' => 8,
                'nrc' => 86352,
                'name' => 'Paradigmas de Programacion',
                'modality' => 'Escolarizado',
                'description' => 'Estudio de diferentes enfoques y modelos de programación, como la programación orientada a objetos y funcional.'
              ] ,
              [
                'id' => 9,
                'nrc' => 86353,
                'name' => 'Administracion de Proyectos',
                'modality' => 'Escolarizado',
                'description' => 'Gestión de proyectos de desarrollo de software, desde la planificación hasta la entrega.'
              ] ,
              [
                'id' => 10,
                'nrc' => 86354,
                'name' => 'Principios de Diseño',
                'modality' => 'Escolarizado',
                'description' => 'Aplicación de principios de diseño visual y de interacción en el desarrollo de interfaces de usuario.'
              ] ,
        ]);
    }
}
