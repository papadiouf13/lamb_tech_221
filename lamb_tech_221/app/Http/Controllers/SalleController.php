<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;
use App\Traits\ResponseTrait;
use App\Http\Resources\SalleResource;

class SalleController extends Controller
{
    use ResponseTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salles = Salle::all();
        return $this->responseData('Allsalles', SalleResource::collection($salles), true);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $salle = Salle::create($request->all());
        return $this->responseData('salle ajouter avec success',new SalleResource($salle),true, ' ' ,200);

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
