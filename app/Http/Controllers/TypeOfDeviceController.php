<?php

namespace App\Http\Controllers;

use App\Models\TypeOfDevice;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class TypeOfDeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type= TypeOfDevice::all();
        return response()->json($type);
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
        $type=TypeOfDevice::create($request->all());
        return response()->json($type,201);
    }

    /**
     * Display the specified resource.
     */
    public function show($type_id)
    {
        $type= TypeOfDevice::find($type_id);
        return response()->json($type);
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
    public function update(Request $request, $type_id)
    {
        $type=TypeOfDevice::find($type_id);
        $type->update($request->all());
        return response()->json($type);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($type_id)
    {
        $type= TypeOfDevice::find($type_id);
        $type->delete();
        return response()->json(null, 204);
    }
}
