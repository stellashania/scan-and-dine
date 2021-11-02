@extends('layouts.admin.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-4">Manage Menu</h1>

            <!-- button to add admin -->
            <a href="add-menu" class="btn btn-primary mb-4">Add Menu</a>

            <table class="table table-striped table-hover">
                <thead>
                    <th class="col-md-1">No.</th>
                    <th class="col-md-2">Name</th>
                    <th class="col-md-2">Price</th>
                    <th class="col-md-2">Image</th>
                    <th class="col-md-1">Active</th>
                    <th class="col-md-4">Actions</th>
                </thead>

                <tr>
                    <td class="col-md-1">1.</td>
                    <td class="col-md-2">Nasi Uduk</td>
                    <td class="col-md-2">Rp 50.000</td>
                    <td class="col-md-2">
                        <img src="../storage/assets/ketoprak.jpg" width="100%"  alt="">
                    </td>
                    <td class="col-md-1">Yes</td>
                    <td class="col-md-5">
                        <a href="#"
                            class="btn btn-success shadow-sm">Update Menu</a>
                        <a href="#"
                            class="btn btn-danger shadow-sm">Delete Menu</a>
                    </td>
                </tr>

                <tr>
                    <td class="col-md-1">1.</td>
                    <td class="col-md-2">Nasi Uduk</td>
                    <td class="col-md-1">Rp 50.000</td>
                    <td class="col-md-2">
                        <img src="../storage/assets/ketoprak.jpg" width="100%"  alt="">
                    </td>
                    <td class="col-md-1">Yes</td>
                    <td class="col-md-4">
                        <a href="#"
                            class="btn btn-success shadow-sm">Update Menu</a>
                        <a href="#"
                            class="btn btn-danger shadow-sm">Delete Menu</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
<!-- main content section ends here -->
@endsection