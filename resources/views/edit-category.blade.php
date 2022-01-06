@extends('layouts.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-3">Edit Category</h1>

            <form action="/updateCategory/{{$selectedCategory->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-4 w-50">
                    <label for="name" class="form-label text-md-right">Category Name</label>
                    <input type="text" id="name" name="name" class="form-control" @error('name') is-invalid @enderror value="{{ old('name') ?? $selectedCategory->name}}" required autocomplete="name" autofocus>
                    @error('name')
                        {{-- <div class="text-danger">{{ $message }}</div> --}}
                        <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Select Image</label>
                    <input type="file" id="image" name="image" class="form-control-file" value="{{old('image') ?? $selectedCategory->image}}">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <input type="submit" name="submit" value="Add-Category" class="btn btn-success mb-4">
            </form>

        </div>
    </div>
    <!-- main content section ends here -->
@endsection
