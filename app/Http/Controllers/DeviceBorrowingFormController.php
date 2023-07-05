<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeviceBorrowingForm;

class DeviceBorrowingFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = DeviceBorrowingForm::all();
        return response()->json($forms);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = DeviceBorrowingForm::create($request->all());
        return response()->json($form, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $form = DeviceBorrowingForm::find($id);
        return response()->json($form);
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
    public function update(Request $request, $id)
    {
        $form = DeviceBorrowingForm::find($id);
        $form->update($request->all());
        return response()->json($form);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $form = DeviceBorrowingForm::find($id);
        $form->delete();
        return response()->json(null, 204);
    }
}
