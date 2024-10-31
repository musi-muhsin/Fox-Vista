<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $projects = Project::query();
        if ($request->search) {
            $projects = $projects->where('title', 'like', '%' . $request->search . '%');
        }
        $projects = $projects->orderBy('id', 'desc')->paginate(10);

        return view('backend.pages.projects.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'thumbnail' => 'image|max:1024',
        // ]);
        $project = new Project();
        $project->title = $request->title;
        $project->status = $request->status;
        $project->description = $request->description;
        $project->section = $request->section;
        if ($request->hasFile("thumbnail")) {
            $file = $request->file("thumbnail");
            $imageName = time() . rand(1, 99) . '.' .  $file->extension();

            $file->move(public_path('/uploads/projects'), $imageName);
            $project->thumbnail = $imageName;
        }
        if ($request->hasFile("image_1")) {
            $file = $request->file("image_1");
            $imageName = time() . rand(1, 99) . '.' .  $file->extension();

            $file->move(public_path('/uploads/projects'), $imageName);
            $project->image_1 = $imageName;
        }
        if ($request->hasFile("image_2")) {
            $file = $request->file("image_2");
            $imageName = time() . rand(1, 99) . '.' .  $file->extension();

            $file->move(public_path('/uploads/projects'), $imageName);
            $project->image_2 = $imageName;
        }
        $project->save();

        return redirect()->route('admin.projects.index')->with('success', 'Project created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::find($id);

        return view('backend.pages.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // $request->validate([
        //     'thumbnail' => 'image|max:1024',
        // ]);
        $project = Project::find($request->id);
        $project->title = $request->title;
        $project->description = $request->description;
        $project->section = $request->section;
        $project->status = $request->status;

        if ($request->hasFile("thumbnail")) {
            $file = $request->file("thumbnail");
            $imageName = time() . rand(1, 99) . '.' .  $file->extension();

            $file->move(public_path('/uploads/projects'), $imageName);
            $project->thumbnail = $imageName;
        }
        if ($request->hasFile("image_1")) {
            $file = $request->file("image_1");
            $imageName = time() . rand(1, 99) . '.' .  $file->extension();

            $file->move(public_path('/uploads/projects'), $imageName);
            $project->image_1 = $imageName;
        }
        if ($request->hasFile("image_2")) {
            $file = $request->file("image_2");
            $imageName = time() . rand(1, 99) . '.' .  $file->extension();

            $file->move(public_path('/uploads/projects'), $imageName);
            $project->image_2 = $imageName;
        }
        $project->save();

        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Project::find($id)->delete();

        return redirect()->route('admin.projects.index')->with('success', 'Project deleted successfully');
    }
}
