<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inspection;
use Illuminate\Http\Request;

class InspectionController extends Controller
{
    public function index()
    {
        return response()->json(
            Inspection::with('facility')->get()
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'facility_id' => 'required|exists:facilities,id',
            'user_id' => 'nullable|exists:users,id',
            'inspection_date' => 'required|date',
            'cleanliness_score' => 'required|numeric|min:0|max:100',
            'odor_score' => 'required|numeric|min:0|max:100',
            'waste_level' => 'required|numeric|min:0|max:100',
            'remarks' => 'nullable|string'
        ]);

        $inspection = Inspection::create($validated);

        return response()->json($inspection, 201);
    }

    public function show(Inspection $inspection)
    {
        return response()->json(
            $inspection->load('facility')
        );
    }

    public function update(
        Request $request,
        Inspection $inspection
    ) {
        $validated = $request->validate([
            'facility_id' => 'sometimes|exists:facilities,id',
            'inspection_date' => 'sometimes|date',
            'cleanliness_score' => 'sometimes|numeric|min:0|max:100',
            'odor_score' => 'sometimes|numeric|min:0|max:100',
            'waste_level' => 'sometimes|numeric|min:0|max:100',
            'remarks' => 'nullable|string'
        ]);

        $inspection->update($validated);

        return response()->json($inspection);
    }

    public function destroy(Inspection $inspection)
    {
        $inspection->delete();

        return response()->json([
            'message' => 'Inspection deleted successfully'
        ]);
    }
}