<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Estadosalumnos;
use Illuminate\Http\Request;
use Session;

class EstadosalumnosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $estadosalumnos = Estadosalumnos::paginate(25);

        return view('estadosalumnos.index', compact('estadosalumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('estadosalumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Estadosalumnos::create($requestData);

        Session::flash('flash_message', 'Estadosalumnos added!');

        return redirect('estadosalumnos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $estadosalumno = Estadosalumnos::findOrFail($id);

        return view('estadosalumnos.show', compact('estadosalumno'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $estadosalumno = Estadosalumnos::findOrFail($id);

        return view('estadosalumnos.edit', compact('estadosalumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $estadosalumno = Estadosalumnos::findOrFail($id);
        $estadosalumno->update($requestData);

        Session::flash('flash_message', 'Estadosalumnos updated!');

        return redirect('estadosalumnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Estadosalumnos::destroy($id);

        Session::flash('flash_message', 'Estadosalumnos deleted!');

        return redirect('estadosalumnos');
    }
}
