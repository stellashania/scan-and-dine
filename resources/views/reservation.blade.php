@extends('layouts.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container  pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-3">Reservation for Member</h1>

            <form action="" method="POST">
                <div class="form-outline mb-4">
                    <label for="people" class="form-label text-md-right">Number of People</label>
                    <input type="text" id="people" name="people" class="form-control">
                </div>

                <div class="form-outline mb-4">
                    <label for="date" class="form-label text-md-right">Date</label>
                    <input type="date" id="date" name="date" class="form-control">
                </div>

                <div class="form-outline mb-4">
                    <label for="time" class="form-label text-md-right">Time</label>
                    <input type="time" id="time" name="time" class="form-control">
                </div>

                <div class="form-outline mb-4">
                    <label for="table" class="form-label text-md-right">Table Number</label>
                    <select name="table" id="table" class="form-control">
                        <option value="">Choose One</option>
                        <option value="1">Table 1</option>
                        <option value="2">Table 2</option>
                        <option value="3">Table 3</option>
                        <option value="4">Table 4</option>
                    </select>
                </div>

                <input type="submit" name="submit" value="Book Now" class="btn btn-success mb-4">
            </form>

        </div>
    </div>
    <!-- main content section ends here -->
@endsection
