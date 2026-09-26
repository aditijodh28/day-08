<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        return response()->json(
            Facility::with(['inspections', 'complaints'])->get()
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'location' => 'required|string|max:200',
            'cleanliness_score' => 'required|numeric|min:0|max:100',
            'odor_score' => 'required|numeric|min:0|max:100',
            'waste_level' => 'required|numeric|min:0|max:100',
            'water_availability' => 'required|boolean'
        ]);

        $facility = Facility::create($validated);

        return response()->json($facility, 201);
    }

    public function show(Facility $facility)
    {
        return response()->json(
            $facility->load(['inspections', 'complaints'])
        );
    }

    public function update(Request $request, Facility $facility)
    {
        $validated = $request->validate([
            'name' => 'sometimes|string|max:150',
            'location' => 'sometimes|string|max:200',
            'cleanliness_score' => 'sometimes|numeric|min:0|max:100',
            'odor_score' => 'sometimes|numeric|min:0|max:100',
            'waste_level' => 'sometimes|numeric|min:0|max:100',
            'water_availability' => 'sometimes|boolean'
        ]);

        $facility->update($validated);

        return response()->json($facility);
    }

    public function destroy(Facility $facility)
    {
        $facility->delete();

        return response()->json([
            'message' => 'Facility deleted successfully'
        ]);
    }
}