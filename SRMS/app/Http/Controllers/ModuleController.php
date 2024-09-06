<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ModuleController;

class ModuleController extends Controller
{
    // Display a listing of the modules
    public function index()
    {
        $modules = Module::all();
        return view('Admin.module_management', compact('modules'));
    }
    
    // Show the form for creating a new module
    public function create()
    {
        return view('Admin.module_create');
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
        return view('Admin.module_edit', compact('module'));
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
