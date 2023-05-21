<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Dotenv\Repository\RepositoryInterface;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $devices =Device::all();
        return response()->json($devices);
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
        $device=Device::create($request->all());
        return response()->json($device,201);
    }

    /**
     * Display the specified resource.
     */
    public function show($device_id)
    {
        $device = Device::find($device_id);
        return response()->json($device);
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
    public function update(Request $request, $device_id)
    {
        $device=Device::find($device_id);
        $device->update($request->all());
        return response()->json($device);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($device_id)
    {
        $device= Device::find($device_id);
        $device->delete();
        return response()->json(null,204);
    }
}
