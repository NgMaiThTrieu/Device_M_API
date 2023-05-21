<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigurationSpecification;
class ConfigurationSpecificationController extends Controller
{
    public function index()
    {
        $configurationSpecifications = ConfigurationSpecification::all();
        return response()->json($configurationSpecifications);
    }

    public function show($id_device, $id_configuration_detail)
    {
        $configurationSpecification = ConfigurationSpecification::find([$id_device, $id_configuration_detail]);
        return response()->json($configurationSpecification);
    }

    public function store(Request $request)
    {
        $configurationSpecification = ConfigurationSpecification::create($request->all());
        return response()->json($configurationSpecification, 201);
    }

    public function update(Request $request, $id_device, $id_configuration_detail)
    {
        $configurationSpecification = ConfigurationSpecification::find([$id_device, $id_configuration_detail]);
        $configurationSpecification->update($request->all());
        return response()->json($configurationSpecification);
    }

    public function destroy($id_device, $id_configuration_detail)
    {
        $configurationSpecification = ConfigurationSpecification::find([$id_device, $id_configuration_detail]);
        $configurationSpecification->delete();
        return response()->json(null, 204);
    }
}
