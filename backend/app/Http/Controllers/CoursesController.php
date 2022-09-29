<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Listar todas las vistas
    public function index()
    {
     return response()->json(["success"=> true,
                             "data" => Courses::all()
                             ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Verificar los Datos del PayLoad
        // Guardar el nuevo Course
        return response()->json([
                                    "success"=> true,
                                    "data" => Courses::create($request->all())
                                ], 201); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // traer curso por id
    public function show($id)
    {
          return response()->json([
                                   "success" =>true,
                                   "data" => Courses::find($id)
                                   ], 200);
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
        //Actualizar curso
        $b = Courses::find($id);  
        $b->update($request->all());

        return response()->json([
                                   "success" =>true,
                                   "data" => $b
                                   ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     //Eliminar curso
    public function destroy($id)
    {
       $b = Courses::find($id);
       $b->delete();
       return response()->json([
                                   "success" =>true,
                                   "data" => $b
                                   ], 200);
    }
}

