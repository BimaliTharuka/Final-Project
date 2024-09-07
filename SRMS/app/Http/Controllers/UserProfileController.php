<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    // Method to display the student profile form
    public function studentProfile()
    {
        return view('Student.studentProfile');
    }

    // Method to display the lecturer profile form
    public function editLecturerProfile()
    {
        $users = Auth::user(); // Get the authenticated user
        return view('Lecturer.lecturerProfile', compact('users'));
    }

    // Method to handle the form submission and update the lecturer profile
    public function updateLecturerProfile(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'initials' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'department' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'join_date' => 'required|date',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image upload
            'password' => 'nullable|string|min:6|confirmed', // Validate password update
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update the user's profile information
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->initials = $request->initials;
        $user->contact_number = $request->contact_number;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->date_of_birth = $request->date_of_birth;
        $user->gender = $request->gender;
        $user->department = $request->department;
        $user->position = $request->position;
        $user->join_date = $request->join_date;

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            // Delete old profile picture if exists
            if ($user->profile_picture && Storage::exists($user->profile_picture)) {
                Storage::delete($user->profile_picture);
            }

            // Store the new profile picture
            $path = $request->file('profile_picture')->store('profile_pictures');
            $user->profile_picture = $path;
        }

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        // Redirect back to the lecturer profile edit page with a success message
        return redirect()->route('lecturer.profile.edit')->with('success', 'Lecturer profile updated successfully');
    }

    // Method to display the admin profile form
    public function editAdminProfile()
    {
        $users = Auth::user(); // Get the authenticated user
        return view('Admin.adminProfile', compact('users'));
    }

    // Method to handle the form submission and update the admin profile
    public function updateAdminProfile(Request $request)
    {
        // Validate the form data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'initials' => 'required|string|max:255',
            'contact_number' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'department' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'join_date' => 'required|date',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate image upload
            'password' => 'nullable|string|min:6|confirmed', // Validate password update
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update the user's profile information
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->initials = $request->initials;
        $user->contact_number = $request->contact_number;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->date_of_birth = $request->date_of_birth;
        $user->gender = $request->gender;
        $user->department = $request->department;
        $user->position = $request->position;
        $user->join_date = $request->join_date;

        // Handle profile picture upload
        if ($request->hasFile('profile_picture')) {
            // Delete old profile picture if exists
            if ($user->profile_picture && Storage::exists($user->profile_picture)) {
                Storage::delete($user->profile_picture);
            }

            // Store the new profile picture
            $path = $request->file('profile_picture')->store('profile_pictures');
            $user->profile_picture = $path;
        }

        // Update password if provided
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        // Redirect back to the admin profile edit page with a success message
        return redirect()->route('admin.profile.edit')->with('success', 'Admin profile updated successfully');
    }
}
