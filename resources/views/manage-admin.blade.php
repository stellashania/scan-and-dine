@extends('layouts.admin.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-3">Manage Admin</h1>

            <!-- button to add admin -->
            <a href="add-admin" class="btn btn-primary my-3">Add Admin</a>

            <table class="table table-striped">
                <thead>
                    <th class="col-md-1">No.</th>
                    <th class="col-md-2">Name</th>
                    <th class="col-md-2">Email</th>
                    <th class="col-md-1">Phone</th>
                    <th class="col-md-6">Actions</th>
                </thead>

                <tr>
                    <td class="col-md-1">1.</td>
                    <td class="col-md-2">Stello Shanio</td>
                    <td class="col-md-2">stello@gmail.com</td>
                    <td class="col-md-1">123455689</td>
                    <td class="col-md-6">
                        <a href="#"
                            class="btn btn-primary shadow-sm">Change Password</a>
                        <a href="#"
                            class="btn btn-success shadow-sm">Update Admin</a>
                        <a href="#"
                            class="btn btn-danger shadow-sm">Delete Admin</a>
                    </td>
                </tr>

                <tr>
                    <td class="col-md-1">1.</td>
                    <td class="col-md-2">Stello Shanio</td>
                    <td class="col-md-2">stello@gmail.com</td>
                    <td class="col-md-1">123455689</td>
                    <td class="col-md-6">
                        <a href="#"
                            class="btn btn-primary shadow-sm">Change Password</a>
                        <a href="#"
                            class="btn btn-success shadow-sm">Update Admin</a>
                        <a href="#"
                            class="btn btn-danger shadow-sm">Delete Admin</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
<!-- main content section ends here -->
@endsection
