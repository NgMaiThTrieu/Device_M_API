<?php

namespace App\Http\Controllers;
use App\Models\Configuration;
use Illuminate\Http\Request;

class ConfigurationController extends Controller
{
    public function index()
    {
        $configurations = Configuration::all();
        return response()->json($configurations);
    }

    public function show($id_configuration)
    {
        $configuration = Configuration::find($id_configuration);
        return response()->json($configuration);
    }

    public function store(Request $request)
    {
        $configuration = Configuration::create($request->all());
        return response()->json($configuration, 201);
    }

    public function update(Request $request, $id_configuration)
    {
        $configuration = Configuration::find($id_configuration);
        $configuration->update($request->all());
        return response()->json($configuration);
    }

    public function destroy($id_configuration)
    {
        $configuration = Configuration::find($id_configuration);
        $configuration->delete();
        return response()->json(null, 204);
    }
}
