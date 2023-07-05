<?php

namespace App\Http\Controllers;

use App\Models\BatchOfGoodDetail;
use Illuminate\Http\Request;

class BatchOfGoodDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bodDetails = BatchOfGoodDetail::all();
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
        $bodDetail = BatchOfGoodDetail::create($request->all());
        return response()->json($bodDetail, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bodDetail = BatchOfGoodDetail::where('id', $id)->first();
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
    public function update(Request $request, $id)
    {
        $bodDetail = BatchOfGoodDetail::where('id', $id)->first();
        $bodDetail->update($request->all());
        return response()->json($bodDetail);
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bodDetail = BatchOfGoodDetail::where('id', $id)->first();
        $bodDetail->delete();
        return response()->json(null, 204);
    }
}
