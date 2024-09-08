<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\UserUpdatedMail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getUsers()
    {
        $users = User::all();
        return view('Admin.usermanagement', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'required',
            'studentId'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'phone_number'=>'required',
            'user_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        
        if ($validator->fails()) {
            $message = $validator->errors()->first();
            echo $message; 

        } else{
            
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->role = $request->role;
        $users->studentId=$request->studentId;
        $users->gender=$request->gender;
        $users->address=$request->address;
        $users->phone_number=$request->phone_number;

        $file = $request->file('user_image');
 
        $userImage = null;
        if($file) {
            $extension = $file->getClientOriginalExtension();
            $newExtension = strtolower($extension);
            $fileName = Str::slug($request->input('email')) . '-' . time() . '.' . $newExtension;
            $path = $file->storeAs('user_image', $fileName, 'public');
 
            $userImage = $path;
        }

        $users->user_image=$userImage;
        $users->save();

        $data=[
            'name'=> $users->name,
            'email'=>$users->email 

        ];

        Mail::to($users->email)->send(new UserUpdatedMail($data));
        

        return redirect()->route('user_management')->with('success', 'User created successfully.');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::findOrFail($id);
        return view('Admin.user_show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('Admin.user_edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[

            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'nullable|min:8',
            'role' => 'required',
            'studentId'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'phone_number'=>'required',
            'user_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($validator->fails()) {
            $message = $validator->errors()->first();
            echo $message; 
        }else{
            
        $users = User::findOrFail($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->role = $request->role;
        $users->studentId=$request->studentId;
        $users->gender=$request->gender;
        $users->address=$request->address;
        $users->phone_number=$request->phone_number;
         if ($request->filled('password')) {
            $users->password = Hash::make($request->password);
        }

        $file = $request->file('user_image');
 
                if($file) {
                    $extension = $file->getClientOriginalExtension();
                    $newExtension = strtolower($extension);
                    $fileName = Str::slug($request->input('email')) . '-' . time() . '.' . $newExtension;
                    $path = $file->storeAs('user_images', $fileName, 'public');
 
                    $users->user_image = $path;
                }

        $users->save();

        return redirect()->route('user_management')->with('success', 'User updated successfully.');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $users = User::findOrFail($id);
        $users->delete();

        return redirect()->route('user_management')->with('success', 'User deleted successfully.');
    }
}
