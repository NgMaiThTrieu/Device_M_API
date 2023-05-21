<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigurationDetail;
class ConfigurationDetailController extends Controller
{
     public function index()
    {
        $configurationDetails = ConfigurationDetail::all();
        return response()->json($configurationDetails);
    }

    public function show($id_configuration_detail)
    {
        $configurationDetail = ConfigurationDetail::find($id_configuration_detail);
        return response()->json($configurationDetail);
    }

    public function store(Request $request)
    {
        $configurationDetail = ConfigurationDetail::create($request->all());
        return response()->json($configurationDetail, 201);
    }

    public function update(Request $request, $id_configuration_detail)
    {
        $configurationDetail = ConfigurationDetail::find($id_configuration_detail);
        $configurationDetail->update($request->all());
        return response()->json($configurationDetail);
    }

    public function destroy($id_configuration_detail)
    {
        $configurationDetail = ConfigurationDetail::find($id_configuration_detail);
        $configurationDetail->delete();
        return response()->json(null, 204);
    }
}
