@extends('layouts.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-3">Edit Menu</h1>

            <form action="/updateMenu/{{ $selectedMenu->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-outline mb-4 w-50">
                    <label for="name" class="form-label text-md-right">Menu Name</label>
                    <input type="text" id="name" name="name" class="form-control" @error('name') is-invalid @enderror
                        value="{{ old('name') ?? $selectedMenu->name }}" required autocomplete="name" autofocus>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-outline mb-4 w-50">
                    <label for="description" class="form-label text-md-right">Description</label>
                    <textarea type="text" id="description" name="description" class="form-control" rows="3"
                        @error('description') is-invalid @enderror required autocomplete="description"
                        autofocus>{{ old('description') ?? $selectedMenu->description }}</textarea>
                    {{-- <input id="description" type="textarea" class="form-control @error('description') is-invalid @enderror"
                        name="description" value="{{ old('description') ?? $selectedMenu->description }}" required
                        autocomplete="description" autofocus> --}}
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-outline mb-4 w-50">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" id="price" name="price" class="form-control" @error('price') is-invalid @enderror
                        value="{{ old('price') ?? $selectedMenu->price }}" required autocomplete="price" autofocus>
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-outline mb-4 w-50">
                    <label for="category_id">Menu Category</label>
                    <select name="category_id" id="category_id" class="select">
                        <option hidden>Choose Category</option>
                        @foreach ($categories as $category)
                            {{-- @if (old('selectedMenu->category_id') == $category->id)
                                <option value="{{$category->id}}" selected>{{ $category->name }}</option>
                                
                            @else
                            <option value="{{$category->id}}">{{ $category->name }}</option>
                            @endif --}}
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="image" class="form-label">Select Image</label>
                    <input type="file" id="image" name="image" class="form-control-file"
                        value="{{ old('image') ?? $selectedMenu->image }}">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <input type="submit" name="submit" value="Add-Menu" class="btn btn-success mb-4">
            </form>

        </div>
    </div>
    <!-- main content section ends here -->
@endsection
