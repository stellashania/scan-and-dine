@extends('layouts.admin.app')

@section('content')
    <!-- main content section starts here -->
    <div class="container pt-5">
        <div class="container-fluid justify-content-center">
            <h1 class="my-4">Manage Reservation</h1>

            <table class="table table-striped table-hover">
                <thead>
                    <th class="col-md-1">No.</th>
                    <th class="col-md-1">Transaction ID</th>
                    <th class="col-md-1">Name</th>
                    <th class="col-md-2">Date and Time</th>
                    <th class="col-md-3">Orders</th>
                    <th class="col-md-2">Total</th>
                    <th class="col-md-2">Status</th>
                </thead>

                <tr>
                    <td class="col-md-1">1.</td>
                    <td class="col-md-1">123</td>
                    <td class="col-md-1">Stello Shanio</td>
                    <td class="col-md-2">4 November 2001 7:00</td>
                    <td class="col-md-3">
                        Nasi Uduk x1
                        Es teler 1x
                    </td>
                    <td class="col-md-2">Rp 100.000</td>
                    <td class="col-md-2 text-primary rounded font-weight-bold">On Going</td>
                </tr>

                <tr>
                    <td class="col-md-1">1.</td>
                    <td class="col-md-1">123</td>
                    <td class="col-md-1">Stello Shanio</td>
                    <td class="col-md-2">4 November 2001 7:00</td>
                    <td class="col-md-3">
                        Nasi Uduk x1
                        Es teler 1x
                    </td>
                    <td class="col-md-2">Rp 100.000</td>
                    <td class="col-md-2 text-success rounded font-weight-bold">Completed</td>
                </tr>
            </table>
        </div>
    </div>
<!-- main content section ends here -->
@endsection