@extends('layouts.admin.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-3">Add Category</h1>

            <form action="" method="POST">
                <div class="form-outline mb-4 w-50">
                    <label for="name" class="form-label text-md-right">Menu Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>

                <div class="form-outline mb-4 w-50">
                    <label for="description" class="form-label text-md-right">Description</label>
                    <textarea type="text" id="description" name="description" class="form-control" rows="3"></textarea>
                </div>

                <div class="form-outline mb-4 w-50">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" id="price" name="price" class="form-control">
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Select Image</label>
                    <input type="file" id="image" name="image" class="form-control-file">
                </div>

                <div class="form-outline mb-4 w-50">
                    <label for="table" class="form-label text-md-right">Table Number</label>
                    <select name="table" id="table" class="form-control">
                        <option value="">Choose One</option>
                        <option value="1">Category 1</option>
                        <option value="2">Category 2</option>
                        <option value="3">Category 3</option>
                        <option value="4">Category 4</option>
                    </select>
                </div>

                <div class="form-outline mb-4">
                    <p class="form-label mb-1">Active Status</p>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="active" id="active" value="Yes" checked>
                        <label class="form-check-label" for="active">
                          Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="active" id="active" value="No" checked>
                        <label class="form-check-label" for="active">
                          No
                        </label>
                    </div>
                </div>

                <input type="submit" name="submit" value="Add Menu" class="btn btn-success mb-4">
            </form>
            
        </div>
    </div>
    <!-- main content section ends here -->
@endsection