<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CatalogueAccessoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Symfony\Component\HttpFoundation\Response as ResponseAlias;
use App\Models\CatalogueAccessory;

class CatalogueAccessoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $accessories = CatalogueAccessory::when($request->has('title'), function ($query) use ($request) {
            $query->where('title', $request->title);
        })
            ->when($request->has('firm'), function ($query) use ($request) {
                $query->where('firm', $request->firm);
            })
            ->when($request->has('quantity'), function ($query) use ($request) {
                $query->where('quantity', $request->quantity);
            })
            ->get();

        return response($accessories);

        return CatalogueAccessoryResource::collection(CatalogueAccessory::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newAccessory = CatalogueAccessory::create($request->all());

        return new CatalogueAccessoryResource($newAccessory);
    }

    /**
     * Display the specified resource.
     */
    public function show(CatalogueAccessory $accessory)
    {
        return new CatalogueAccessoryResource($accessory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CatalogueAccessory $accessory)
    {
        $accessory->update($request->all());

        return new CatalogueAccessory($accessory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CatalogueAccessory $accessory)
    {
        $accessory->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
