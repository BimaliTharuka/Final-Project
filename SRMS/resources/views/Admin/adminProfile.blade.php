
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Profile</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/feather/feather.css">
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../../assets/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
    <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />

    <style>
    .header-text {
        position: relative;
        bottom: 45px; /* Adjust the top value as needed */
        text-align: center;
    }

    .profile-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative; /* Ensure button is positioned relative to this container */
        height: 100%;
        text-align: center;
    }
    .profile-image {
            width: 150px; /* Set width for rectangle */
            height: 150px; /* Set height for rectangle */
            object-fit: cover; /* Ensure the image covers the area */
            margin-bottom: 15px;
            border: 3px solid #007bff; /* Blue border color */
            border-radius: 5px; /* Optional: rounded corners */
        }
        
    .btn-select-photo {
        position: absolute;
        bottom: 20px; /* Adjust this value to position the button vertically within the profile container */
        left: 50%;
        transform: translateX(-50%); /* Center the button horizontally */
    }

</style>
  </head>
  <body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                <img src="https://www.saegis.ac.lk/wp-content/uploads/2023/02/Logo_n.jpg" alt="Logo" class="img-fluid" style="max-width: 150px;">
                <h3 class="text-center mb-0 header-text">Saegis Campus - Nugegoda</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Profile Image Section -->
                     <!--   <div class="col-md-3 text-center">
                        <h5 class="text-center">Admin Profile</h5>
                            <img src="path_to_profile_image_placeholder" alt="Profile Image" class="img-thumbnail">
                            <button class="btn btn-purple mt-2">Select Photo</button>
                        </div> -->
                        <!-- Profile Image Section -->
                        <div class="col-md-3 text-center profile-container">
                            <h5 class="text-center">Admin Profile</h5>
                            <img src="{{ asset('storage/' . (Auth::user()->profile_image ?? 'default.png')) }}" alt="Profile Image" class="profile-image">
                            <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                                @csrf
                                <!-- Hidden file input -->
                                <input type="file" name="profile_image" id="profileImageInput" style="display: none;" onchange="this.form.submit();">
                                <!-- Select Photo button -->
                                <button type="button" class="btn btn-purple mt-2" onclick="document.getElementById('profileImageInput').click();">Select Photo</button>
                            </form>
                        </div>
                        <!-- Form Section -->
                        <div class="col-md-9">
                            <form class="form-sample">
                            @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="first_name">First Name</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control" value="{{ old('first_name') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="last_name">Last Name</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control" value="{{ old('last_name') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name_with_initials">Name with Initials</label>
                                            <input type="text" name="name_with_initials" id="name_with_initials" class="form-control" value="{{ old('name_with_initials') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="contact_number">Contact Number</label>
                                            <input type="text" name="contact_number" id="contact_number" class="form-control" value="{{ old('contact_number') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="date_of_birth">Date of Birth</label>
                                            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ old('date_of_birth') }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender" class="form-control">
                                                <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                                <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="department">Department</label>
                                            <select name="department" id="department" class="form-control">
                                                <option value="Department 1" {{ old('department') == 'Department 1' ? 'selected' : '' }}>Department 1</option>
                                                <option value="Department 2" {{ old('department') == 'Department 2' ? 'selected' : '' }}>Department 2</option>
                                                <option value="Department 3" {{ old('department') == 'Department 3' ? 'selected' : '' }}>Department 3</option>
                                                <option value="Department 4" {{ old('department') == 'Department 4' ? 'selected' : '' }}>Department 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="position">Position</label>
                                            <input type="text" name="position" id="position" class="form-control" value="{{ old('position') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="join_date">Join Date</label>
                                            <input type="date" name="join_date" id="join_date" class="form-control" value="{{ old('join_date') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-md-12 d-flex justify-content-end align-items-end" style="height: 100%;">
                                <button type="button" class="btn btn-warning me-5">Edit</button>
                               <!-- <button type="submit" class="btn btn-success">Save</button> -->

                               <form method="POST" action="{{ route('admin.profile.update') }}">
                                     @csrf
                                      <!-- Form fields here -->
                              <button type="submit" class="btn btn-success">Save</button>
                                </form>
                                </div>


                                </div>
                            </form>
                        </div>
                    </div>                
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <script src="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <script src="../../assets/vendors/select2/select2.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/template.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../assets/js/file-upload.js"></script>
    <script src="../../assets/js/typeahead.js"></script>
    <script src="../../assets/js/select2.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>