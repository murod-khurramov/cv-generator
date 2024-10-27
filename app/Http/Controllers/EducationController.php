<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Education::all();
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
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $education = Education::factory()->create([
            'user_id' => request()->user()->id,
            'name' => request('name'),
            'description' => request('description'),
            'start_date' => request('start_date'),
            'end_date' => request('end_date'),
        ]);

        return response()->json([
            'message' => 'Education created successfully',
            'status' => 'success',
        ], 201);
    }

    /**
     * Display the specified resource.
     * @param string $id
     * @return JsonResponse
     */
    public function show(string $id): \Illuminate\Http\JsonResponse
    {
        return response()->json(Education::query()->findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\JsonResponse
    {
        $experience = Education::query()->findOrFail($id);
        $experience->update([
            'name' => $request['name'],
            'description' => $request['description'],
            'start_date' => $request['start_date'],
            'end_date' => $request['end_date'],
        ]);

        return response()->json([
            'message' => 'Education updated successfully',
            'status' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        $education = Education::query()->findOrFail($id);
        $education->delete();

        return response()->json([
            'message' => 'Education deleted successfully',
            'status' => 'success',
        ]);
    }
}
