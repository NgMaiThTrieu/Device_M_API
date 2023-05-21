<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Disposal;
class DisposalController extends Controller
{
    public function index()
    {
        $disposals = Disposal::all();
        return response()->json($disposals);
    }

    public function show($id_disposal)
    {
        $disposal = Disposal::find($id_disposal);
        return response()->json($disposal);
    }

    public function store(Request $request)
    {
        $disposal = Disposal::create($request->all());
        return response()->json($disposal, 201);
    }

    public function update(Request $request, $id_disposal)
    {
        $disposal = Disposal::find($id_disposal);
        $disposal->update($request->all());
        return response()->json($disposal);
    }

    public function destroy($id_disposal)
    {
        $disposal = Disposal::find($id_disposal);
        $disposal->delete();
        return response()->json(null, 204);
    }
}
