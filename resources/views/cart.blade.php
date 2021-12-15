@extends('layouts.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-4">My Cart</h1>

            <table class="table table-striped table-hover">
                <thead>
                    <th class="col-md-1">No.</th>
                    <th class="col-md-2">Menu Name</th>
                    <th class="col-md-2">Quantity</th>
                    <th class="col-md-2">Price</th>
                    <th class="col-md-2">Subtotal</th>
                    <th class="col-md-3">Action</th>
                </thead>

                <tr>
                    <td class="col-md-1">1.</td>
                    <td class="col-md-2">Ketoprak</td>
                    <td class="col-md-2">1</td>
                    <td class="col-md-2">Rp 50.000</td>
                    <td class="col-md-2">Rp 50.000</td>
                    <td class="col-md-3">
                        <a href="#" class="btn btn-danger btn-sm px-3 shadow-sm">
                            <i class="fas fa-times"></i>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td class="col-md-1">1.</td>
                    <td class="col-md-2">Ketoprak</td>
                    <td class="col-md-2">1</td>
                    <td class="col-md-2">Rp 50.000</td>
                    <td class="col-md-2">Rp 50.000</td>
                    <td class="col-md-3">
                        <a href="#" class="btn btn-danger btn-sm px-3 shadow-sm">
                            <i class="fas fa-times"></i>
                        </a>
                    </td>
                </tr>
            </table>

            <h3 class="my-4">Total: Rp 100.000p</h3>

            <form action="paymentForm" method="GET">
                <input type="submit" name="submit" value="Pay Bill" class="btn btn-success mb-4">
            </form>
        </div>
    </div>
    <!-- main content section ends here -->
@endsection
