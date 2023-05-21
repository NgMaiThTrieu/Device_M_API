<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReportEmail;
class ReportEmailController extends Controller
{
    public function index()
    {
        $reportEmails = ReportEmail::all();
        return response()->json($reportEmails);
    }

    public function show($email_id)
    {
        $reportEmail = ReportEmail::find($email_id);
        return response()->json($reportEmail);
    }

    public function store(Request $request)
    {
        $reportEmail = ReportEmail::create($request->all());
        return response()->json($reportEmail, 201);
    }

    public function update(Request $request, $email_id)
    {
        $reportEmail = ReportEmail::find($email_id);
        $reportEmail->update($request->all());
        return response()->json($reportEmail);
    }

    public function destroy($email_id)
    {
        $reportEmail = ReportEmail::find($email_id);
        $reportEmail->delete();
        return response()->json(null, 204);
    }
}
