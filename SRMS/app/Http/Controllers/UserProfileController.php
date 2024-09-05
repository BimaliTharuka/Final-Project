<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
        $user = Auth::user(); // Get the authenticated user
        return view('Lecturer.lecturerProfile', compact('user'));
    }

    // Method to handle the form submission and update the lecturer  profile
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
        ]);

        // Get the authenticated user
        $user = Auth::user();

        // Update the user's profile information
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'initials' => $request->initials,
            'contact_number' => $request->contact_number,
            'address' => $request->address,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'department' => $request->department,
            'position' => $request->position,
            'join_date' => $request->join_date,
        ]);

        // Redirect back to the lecturer profile edit page with a success message
        return redirect()->route('lecturer.profile.edit')->with('success', 'lecturer  profile updated successfully');
    }




    // Method to display the admin profile form
    public function editAdminProfile()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('Admin.adminProfile', compact('user'));
    }

    // Method to handle the form submission and update the admin  profile
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
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validation rule for the image
        ]);
    
        // Get the authenticated user
        $user = Auth::user();
    
        // Handle the image upload
        if ($request->hasFile('profile_image')) {
            // Delete the old image if it exists
            if ($user->profile_image && \Storage::exists('public/' . $user->profile_image)) {
                \Storage::delete('public/' . $user->profile_image);
            }
    
            // Store the new image
            $imagePath = $request->file('profile_image')->store('profile_images', 'public');
            $user->profile_image = $imagePath;
        }
    
        // Update the user's profile information
        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'initials' => $request->initials,
            'contact_number' => $request->contact_number,
            'address' => $request->address,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'gender' => $request->gender,
            'department' => $request->department,
            'position' => $request->position,
            'join_date' => $request->join_date,
            'profile_image' => $user->profile_image ?? $user->profile_image, // Ensure profile_image is updated or remains unchanged
        ]);
    
        // Redirect back to the admin profile edit page with a success message
        return redirect()->route('admin.profile.edit')->with('success', 'Admin profile updated successfully');
    }
    
}
