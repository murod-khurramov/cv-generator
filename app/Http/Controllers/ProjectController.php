<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return Project::all();
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        Project::factory()->create([
            'user_id' => $request->user()->id,
            'name' => $request['name'],
            'description' => $request['description'],
            'source_link' => $request['source_link'],
            'demo_link' => $request['demo_link'],
        ]);

        return response()->json([
            'message' => 'Project created successfully',
            'status' => 'success',
        ], 201);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Http\JsonResponse
    {
        $project = Project::query()->findOrFail($id);
        return response()->json($project);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): \Illuminate\Http\JsonResponse
    {
        $project = Project::query()->findOrFail($id);
        $project->update([
            'user_id' => auth()->id(),
            'name' => $request['name'],
            'description' => $request['description'],
            'source_link' => $request['source_link'],
            'demo_link' => $request['demo_link'],
        ]);
        return response()->json([
            'message' => 'Project updated successfully',
            'status' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): \Illuminate\Http\JsonResponse
    {
        $project = Project::query()->findOrFail($id);
        $project->delete();

        return response()->json([
            'message' => 'Project deleted successfully',
            'status' => 'success',
        ]);
    }
}
