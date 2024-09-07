<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ModuleController;

class ModuleController extends Controller
{
    // Display a listing of the modules
    public function index()
    {
        $modules = Module::with('course')->get();
        return view('Admin.module_management', compact('modules'));
    }
    
    // Show the form for creating a new module
    public function create()
    {
        $courses = Course::all();
        return view('Admin.module_create', compact('courses'));
    }

    // Store a newly created module in the database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'course_id' => 'required|exists:courses,id',
        ]);

        Module::create($request->all());

        return redirect()->route('modules.index')->with('success', 'Module created successfully.');
    }

    // Show the form for editing a module
    public function edit(Module $module)
    {
        $courses = Course::all();
        return view('Admin.module_edit', compact('module','courses'));
    }

    // view the module
    public function show(Module $module)
    {
        
        return view('Admin.module_view', compact('module'));
    }

    // Update a module in the database
    public function update(Request $request, Module $module)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable',
            'course_id' => 'required|exists:courses,id',
        ]);

        $module->update($request->all());

        return redirect()->route('modules.index')->with('success', 'Module updated successfully.');
    }

    // Delete a module from the database
    public function destroy(Module $module)
    {
        $module->delete();

        return redirect()->route('modules.index')->with('success', 'Module deleted successfully.');
    }

}
