<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reviews;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //Listar todos los reviews
    public function index()
    {
     return response()->json(["success"=> true,
                             "data" => Reviews::all()
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
        //crear nueva vista
        return response()->json([
                                   "success" =>true,
                                   "data" => Reviews::create($request->all())
                                   ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     // traer vista por id
    public function show($id)
    {
          return response()->json([
                                   "success" =>true,
                                   "data" => Reviews::find($id)
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
        //Listar todas las vistass
        $b = Reviews::find($id);
        $b->update($request->all());

        return response()->json([
                                   "success" =>true,
                                   "data" => $b
                                   ], 200);
    }
}


