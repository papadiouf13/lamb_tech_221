<?php

namespace App\Http\Controllers;

use App\Models\Niveau;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use App\Http\Resources\NiveauResource;

class NiveauController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $niveaux = Niveau::all();
        return $this->responseData('Allniveaux', NiveauResource::collection($niveaux), true);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $niveau = Niveau::create($request->all());

        return $this->responseData('niveau ajouter avec success',new NiveauResource($niveau),true, ' ' ,200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
