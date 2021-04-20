<?php

namespace frutera\Http\Controllers\admin;

use Illuminate\Http\Request;
use frutera\Http\Controllers\Controller;

use frutera\Categoria;
use frutera\Fruta;

class FrutaController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $frutas = Fruta::orderBy('id', 'DESC')->paginate(7);



        return view('web.frutas', [
            'frutas' => $frutas
        ]);

       
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

         $categorias = Categoria::all();

        return view('admin.fruta.create', [
            'categorias'=>$categorias
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = time().$file->getCLientOriginalName();
            $file->move(public_path().'/images/', $name);
            
        }else{
            $name = '';
        }

        $Fruta = new Fruta();
        $Fruta->name = $request->input('name');
        $Fruta->precio =$request->input('precio');
        $Fruta->file = $name;
        $Fruta->slug =  Str_slug(time());
        $Fruta->save();

        //$id = Fruta::all()->last();

       
        $Fruta->categorias()->attach($request->input('variable')); 

        return redirect()->route('frutages.index')->with('info', 'Fruta creada con éxito');             
      


        //return $id->id;
        //return $request->file('Imagen')->store('image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
    $fruta = Fruta::where('slug', '=', $slug)->FirstOrFail();
        
        return view('web.detalle', [
                'fruta' => $fruta

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {

        $fruta = Fruta::where('slug', '=', $slug)->FirstOrFail();
       
        $categorias = Categoria::orderBy('name', 'ASC')->get();

        

        return view('admin.fruta.edit', [
            'fruta' => $fruta,
            'categorias' => $categorias
        ]);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {



        $Fruta = Fruta::where('slug', '=', $slug)->FirstOrFail();

      

        

     /*  $fruta->$request->input('Nombre');
       $fruta->$request->input('Precio');
       $fruta->save();*/

       
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $name = time().$file->getCLientOriginalName();
            $file->move(public_path().'/images/', $name);

              
    
            $Fruta->name = $request->input('name');
            $Fruta->precio =$request->input('precio');
            $Fruta->file = $name;
        
            $Fruta->save();

            
        }
            $Fruta->name = $request->input('name');
            $Fruta->precio =$request->input('precio');
            
             $Fruta->save();
        

       
        $Fruta->categorias()->sync($request->input('categorias'));     

        return redirect()->route('frutages.index')->with('info', 'Fruta actualizada con éxito'); 
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $fruta = Fruta::find($id);

        $file = public_path(). '/images/'.$fruta->file;
\File::delete($file);
        //return $file;
        

        $fruta->delete();

        return redirect()->route('frutages.index')->with('info', 'Fruta eliminada con exito');
    }
}
