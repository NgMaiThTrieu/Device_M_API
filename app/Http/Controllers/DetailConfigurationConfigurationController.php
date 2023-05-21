<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetailCon;
class DetailConController extends Controller
{
    public function index()
    {
        $detailConfigurations = DetailCon::all();
        return response()->json($detailConfigurations);
    }

    public function show($detail_configuration_id, $configuration_id)
    {
        $detailConfiguration = DetailCon::find([$detail_configuration_id, $configuration_id]);
        return response()->json($detailConfiguration);
    }

    public function store(Request $request)
    {
        $detailConfiguration = DetailCon::create($request->all());
        return response()->json($detailConfiguration, 201);
    }

    public function destroy($detail_configuration_id, $configuration_id)
    {
        $detailConfiguration = DetailCon::find([$detail_configuration_id, $configuration_id]);
        $detailConfiguration->delete();
        return response()->json(null, 204);
    }
}
