@extends('layouts.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-4">Manage Menu</h1>

            <!-- button to add admin -->
            <a href="add-menu-form" class="btn btn-primary mb-4">Add Menu</a>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($menus as $menu)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $menu->name }}</td>
                            <td class="col-md-3">{{ $menu->description }}</td>
                            <td>{{ $menu->price }}</td>
                            <td>
                                <img src="../storage/assets/menus/{{ $menu->image }}" style="height: 10rem; width: 15rem;"
                                    alt="">
                            </td>
                            <td>
                                <a href="/editMenu/{{ $menu->id }}" class="btn btn-success shadow-sm">Update Menu</a>
                                <a href="/deleteMenu/{{ $menu->id }}" class="btn btn-danger shadow-sm">Delete Menu</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- main content section ends here -->
@endsection
