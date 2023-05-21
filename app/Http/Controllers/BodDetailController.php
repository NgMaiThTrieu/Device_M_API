<?php

namespace App\Http\Controllers;

use App\Models\BodDetail;
use Illuminate\Http\Request;

class BodDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bodDetails = BodDetail::all();
        return response()->json($bodDetails);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bodDetail = BodDetail::create($request->all());
        return response()->json($bodDetail, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($batch_id, $device_id)
    {
        $bodDetail = BodDetail::where('Batch_Of_Goods_ID', $batch_id)->where('Device_ID', $device_id)->first();
        return response()->json($bodDetail);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $batch_id, $device_id)
    {
        $bodDetail = BodDetail::where('Batch_Of_Goods_ID', $batch_id)->where('Device_ID', $device_id)->first();
        $bodDetail->update($request->all());
        return response()->json($bodDetail);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($batch_id, $device_id)
    {
        $bodDetail = BodDetail::where('Batch_Of_Goods_ID', $batch_id)->where('Device_ID', $device_id)->first();
        $bodDetail->delete();
        return response()->json(null, 204);
    }
}
