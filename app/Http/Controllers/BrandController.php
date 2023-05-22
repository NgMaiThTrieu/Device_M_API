<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $brands =Brand::all();
        return response()->json($brands);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $brand=Brand::create($request->all());
        return response()->json($brand,201);
    }

    /**
     * Display the specified resource.
     */
    public function show($brand_id)
    {
        $brand = Brand::find($brand_id);
        return response()->json($brand);
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
    public function update(Request $request, $brand_id)
    {
        $brand=Brand::find($brand_id);
        $brand->update($request->all());
        return response()->json($brand);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($brand_id)
    {
        $brand= Brand::find($brand_id);
        $brand->delete();
        return response()->json(null,204);
    }
}
