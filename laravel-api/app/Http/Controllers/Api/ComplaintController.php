<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Complaint;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    public function index()
    {
        return response()->json(
            Complaint::with('facility')->get()
        );
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'facility_id' => 'required|exists:facilities,id',
            'user_id' => 'nullable|exists:users,id',
            'complaint_text' => 'required|string',
            'status' => 'nullable|in:Pending,In Progress,Resolved'
        ]);

        $complaint = Complaint::create($validated);

        return response()->json($complaint, 201);
    }

    public function show(Complaint $complaint)
    {
        return response()->json(
            $complaint->load('facility')
        );
    }

    public function update(
        Request $request,
        Complaint $complaint
    ) {
        $validated = $request->validate([
            'complaint_text' => 'sometimes|string',
            'status' => 'sometimes|in:Pending,In Progress,Resolved'
        ]);

        $complaint->update($validated);

        return response()->json($complaint);
    }

    public function destroy(Complaint $complaint)
    {
        $complaint->delete();

        return response()->json([
            'message' => 'Complaint deleted successfully'
        ]);
    }
}