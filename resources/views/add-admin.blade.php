@extends('layouts.admin.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container  pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-3">Add Admin</h1>

            <form action="" method="POST">
                <div class="form-outline mb-4">
                    <label for="name" class="form-label text-md-right">Full Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>

                <div class="form-outline mb-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>

                <div class="form-outline mb-4">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                
                <div class="form-outline mb-4">
                    <label for="phonenum" class="form-label">Phone Number</label>
                    <input type="text" id="phonenum" name="phonenum" class="form-control">
                </div>

                <input type="submit" name="submit" value="Add Admin" class="btn btn-success mb-4">
            </form>
            
        </div>
    </div>
    <!-- main content section ends here -->
@endsection
