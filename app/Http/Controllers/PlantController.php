<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Response;
use App\Http\Requests\PlantRequest;
use App\Http\Resources\PlantResource;
use App\Models\Plant;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $plants = Plant::paginate($request->limit ?? 10);
        $meta = [
            'page' => $plants->currentPage(),
            'jumlah_data' => $plants->total(),
        ];

        return Response::json("Ok.", 200, PlantResource::collection($plants), $meta);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlantRequest $request)
    {
        $plant = Plant::create([
            'berat_basah' => $request->berat_basah,
            'drc' => $request->drc,
        ]);
        return Response::json("Data berhasil disimpan", 201, $plant, null);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlantRequest $request, string $id)
    {
        $plant = Plant::where('id', $id)->update([
            'berat_basah' => $request->berat_basah,
            'drc' => $request->drc,
        ]);

        return Response::json("Data berhasil diupdate", 200, $plant, null);
    }
}
