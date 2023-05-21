<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RequireTable;
class RequireController extends Controller
{
    public function index()
    {
        $requires = RequireTable::all();
        return response()->json($requires);
    }

    public function show($require_id)
    {
        $requires = RequireTable::find($require_id);
        return response()->json($requires);
    }

    public function store(Request $request)
    {
        $requires = RequireTable::create($request->all());
        return response()->json($requires, 201);
    }

    public function update(Request $request, $require_id)
    {
        $requires = RequireTable::find($require_id);
        $requires->update($request->all());
        return response()->json($requires);
    }

    public function destroy($require_id)
    {
        $requires = RequireTable::find($require_id);
        $requires->delete();
        return response()->json(null, 204);
    }
}
