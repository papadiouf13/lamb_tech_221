<?php

namespace App\Http\Controllers;

use App\Http\Resources\FiliereResource;
use App\Models\Filiere;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
class FiliereController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $filieres = Filiere::all();
        return $this->responseData('Allfiliere', FiliereResource::collection($filieres), true);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filiere = Filiere::create($request->all());

         return $this->responseData('filiere ajouter avec success',new FiliereResource($filiere),true, ' ' ,200);

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
