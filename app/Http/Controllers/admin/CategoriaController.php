<?php

namespace frutera\Http\Controllers\admin;

use Illuminate\Http\Request;
use frutera\Http\Controllers\Controller;

use frutera\Categoria;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::all();

        return view('admin.categoria.index', compact('categoria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categoria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Categoria = new Categoria;

        $Categoria->name = $request->input('name');
        $Categoria->descripcion = $request->input('descripcion');
        $Categoria->save();


        return redirect()->route('categoria.index')->with('info', 'Categoria agregada con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $categoria = Categoria::find($id);

            return view('admin.categoria.edit', compact('categoria'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $categoria = Categoria::find($id);



       /* $categoria->name = $request->input('Nombre');
        $categoria->descripcion = $request->input('Descripcion');*/

        $categoria->fill($request->all());
        $categoria->save();

        return redirect()->route('categoria.index')->with('info', 'Categoria actualizada con exito');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        

        $categoria = Categoria::find($id);
       
        $categoria->delete();

         return redirect()->route('categoria.index')->with('info', 'Categoria eliminada con exito');
    }
}
