@extends('layouts.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-4">Manage Category</h1>

            <!-- button to add admin -->
            <a href="add-category-form" class="btn btn-primary mb-4">Add Category</a>

            <table class="table table-striped table-hover">
                <thead>
                    {{-- <th class="col-md-1">No.</th>
                    <th class="col-md-3">Name</th>
                    <th class="col-md-4">Image</th>
                    <th class="col-md-2">Active</th>
                    <th class="col-md-4">Actions</th> --}}
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        {{-- <td>1</td> --}}
                        <td class="col-md-2">{{$category->name}}</td>
                        <td class="col-md-5">
                            <img src="../storage/assets/categories/{{$category->image}}" style="height: 10rem" alt="">
                        </td>
                        <td class="col-md-4">
                            <a href="/editCategory/{{$category->id}}" class="btn btn-success shadow-sm">Update Category</a>
                            <a href="/deleteCategory/{{$category->id}}" class="btn btn-danger shadow-sm">Delete Category</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

                {{-- <tr>
                    <td class="col-md-1">1.</td>
                    <td class="col-md-3">Nasi</td>
                    <td class="col-md-2">
                        <img src="../storage/assets/ketoprak.jpg" width="100%" alt="">
                    </td>
                    <td class="col-md-2">Yes</td>
                    <td class="col-md-4">
                        <a href="#" class="btn btn-success shadow-sm">Update Category</a>
                        <a href="#" class="btn btn-danger shadow-sm">Delete Category</a>
                    </td>
                </tr> --}}

                {{-- <tr>
                    <td class="col-md-1">1.</td>
                    <td class="col-md-1">Nasi</td>
                    <td class="col-md-2">
                        <img src="../storage/assets/ketoprak.jpg" width="100%" alt="">
                    </td>
                    <td class="col-md-1">No</td>
                    <td class="col-md-5">
                        <a href="#" class="btn btn-success shadow-sm">Update Category</a>
                        <a href="#" class="btn btn-danger shadow-sm">Delete Category</a>
                    </td>
                </tr> --}}
            </table>
        </div>
    </div>
    <!-- main content section ends here -->
@endsection
