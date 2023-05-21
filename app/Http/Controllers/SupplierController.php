<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers= Supplier::all();
        return response()->json($suppliers);
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
        $suppliers= Supplier::create($request->all());
        return response()->json($suppliers,201);
    }

    /**
     * Display the specified resource.
     */
    public function show($supplier_id)
    {
        $supplier= Supplier::find($supplier_id);
        return response()->json($supplier);
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
    public function update(Request $request, $supplier_id)
    {
        $supplier= Supplier::find($supplier_id);
        $supplier->update($request->all());
        return response()->json($supplier);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($supplier_id)
    {
        $supplier= Supplier::find($supplier_id);
        $supplier->delete();
        return response()->json(null, 204);
    }
}
