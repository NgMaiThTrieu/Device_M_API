<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BorrowingDetail;
class BorrowingDetailController extends Controller
{
    public function index()
    {
        $details = BorrowingDetail::all();
        return response()->json($details);
    }

    public function show($borrowing_id)
    {
        $detail = BorrowingDetail::find($borrowing_id);
        return response()->json($detail);
    }

    public function store(Request $request)
    {
        $detail = BorrowingDetail::create($request->all());
        return response()->json($detail, 201);
    }

    public function update(Request $request, $borrowing_id)
    {
        $detail = BorrowingDetail::find($borrowing_id);
        $detail->update($request->all());
        return response()->json($detail);
    }

    public function destroy($borrowing_id)
    {
        $detail = BorrowingDetail::find($borrowing_id);
        $detail->delete();
        return response()->json(null, 204);
    }
}
