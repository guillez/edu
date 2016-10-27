<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Provincias;
use Illuminate\Http\Request;
use Session;
use App\Ciudades;
use App\Paises;

class ProvinciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function getCiudades(Request $request, $id){
        if($request->ajax()){
            $ciudades = ciudades::ciudades($id);
            
            return response()->json($ciudades);
        }
    }


    public function Pais()
    {
         return '*';
        //return $this->hasOne('App\Paises', 'fk_pais_id');
        //return $this->hasOne('App\Paises', 'id', 'fk_pais_id');
    }

    

    public function index()
    {
        $provincias = Provincias::paginate(25);

        return view('provincias.index', compact('provincias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('provincias.create');
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
        
        Provincias::create($requestData);

        Session::flash('flash_message', 'Provincias added!');

        return redirect('provincias');
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
        $provincia = Provincias::findOrFail($id);

        return view('provincias.show', compact('provincia'));
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
        $provincia = Provincias::findOrFail($id);

        return view('provincias.edit', compact('provincia'));
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
        
        $provincia = Provincias::findOrFail($id);
        $provincia->update($requestData);

        Session::flash('flash_message', 'Provincias updated!');

        return redirect('provincias');
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
        Provincias::destroy($id);

        Session::flash('flash_message', 'Provincias deleted!');

        return redirect('provincias');
    }
}
