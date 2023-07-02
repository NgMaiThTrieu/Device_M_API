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

    public function show($id)
    {
        $configurationSpecification = ConfigurationSpecification::find($id);
        if(!$configurationSpecification){
            return response()->json(['message'=>'Configuration not found',404]);
        }
        return response()->json($configurationSpecification);
    }

    public function store(Request $request)
    {
        $configurationSpecification = ConfigurationSpecification::create($request->all());
        return response()->json($configurationSpecification, 201);
    }

    public function update(Request $request, $id)
    {
        try {
            $configurationSpecification = ConfigurationSpecification::find($id);

            if (!$configurationSpecification) {
                return response()->json([
                    'error' => 'Không tìm thấy bản ghi',
                    'status' => 404
                ]);
            }
            $configurationSpecification->update($request->all());
            // $configurationSpecification->save();
            return response()->json([
                'Data' => $configurationSpecification
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'error' => 'Lỗi',
                'status' => 500
            ]);
        }
    }

    public function destroy($id_device, $id_configuration_detail)
    {
        $configurationSpecification = ConfigurationSpecification::find([$id_device, $id_configuration_detail]);
        $configurationSpecification->delete();
        return response()->json(null, 204);
    }
}
