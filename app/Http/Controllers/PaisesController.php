<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Paises;
use Illuminate\Http\Request;
use Session;
use Contable\provincias;

class PaisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */


    public function getProvincias(Request $request, $id){
        if($request->ajax()){
            $provincias = provincias::provincias($id);
            return response()->json($provincias);
        }
    }


    public function index()
    {
        $paises = Paises::paginate(25);

        return view('paises.index', compact('paises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('paises.create');
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
        
        Paises::create($requestData);

        Session::flash('flash_message', 'Paises added!');

        return redirect('paises');
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
        $paise = Paises::findOrFail($id);

        return view('paises.show', compact('paise'));
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
        $paise = Paises::findOrFail($id);

        return view('paises.edit', compact('paise'));
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
        
        $paise = Paises::findOrFail($id);
        $paise->update($requestData);

        Session::flash('flash_message', 'Paises updated!');

        return redirect('paises');
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
        Paises::destroy($id);

        Session::flash('flash_message', 'Paises deleted!');

        return redirect('paises');
    }
}
