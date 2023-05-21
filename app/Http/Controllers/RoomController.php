<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $room= Room::all();
        return response()->json($room);
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
        $room = Room::create($request->all());
        return response()->json($room, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($room_id)
    {
        $room= Room::find ($room_id);
        return response()->json($room);
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
    public function update(Request $request, $room_id)
    {
        $room = Room::find($room_id);
        $room->update($request->all());
        return response()->json($room);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($room_id)
    {
        $room = Room::find($room_id);
        $room->delete();
        return response()->json(null, 204);
    }
}
