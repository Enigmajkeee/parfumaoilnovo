<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CatalogueOilResource;
use App\Models\CatalogueOil;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;

class CatalogueOilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $oils = CatalogueOil::when($request->has('title'), function ($query) use ($request) {
            $query->where('title', $request->title);
        })
            ->when($request->has('firm'), function ($query) use ($request) {
                $query->where('firm', $request->firm);
            })
            ->when($request->has('quantity'), function ($query) use ($request) {
                $query->where('quantity', $request->quantity);
            })
            ->get();

        return response($oils);

        return CatalogueOilResource::collection(CatalogueOil::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newOil = CatalogueOil::create($request->all());

        return new CatalogueOilResource($newOil);
    }

    /**
     * Display the specified resource.
     */
    public function show(CatalogueOil $oil)
    {
        return new CatalogueOilResource($oil);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CatalogueOil $oil)
    {
        $oil->update($request->all());

        return new CatalogueOil($oil);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CatalogueOil $oil)
    {
        $oil->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
