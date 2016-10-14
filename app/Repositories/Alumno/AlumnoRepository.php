<?php
namespace App\Repositories\Alumno;

use App\Alumno;

class AlumnoRepository
{

    public function getAllAlumnos()
    {
        return Alumno::all();
    }

    public function find($id)
    {
        return Alumno::findOrFail($id);
    }

    public function listAllAlumnos()
    {
        return Alumno::lists('nombre', 'id');
    }

    public function create($requestData)
    {
        Alumno::create($requestData->all());
    }

    public function destroy($id)
    {
        Alumno::findorFail($id)->delete();
    }

    public function update($id, $requestData)
    {
        $alumno = Alumno::findOrFail($id);
        $alumno->fill($requestData->all())->save();
    }
}
