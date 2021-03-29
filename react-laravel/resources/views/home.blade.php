@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bookings') }}</div>
                <table style="width:100%">
                    <tr>
                        <th>Name</th>
                        <th>Booking Date</th>
                        <th>Flexibility</th>
                        <th>Vehicle Size</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>20/05/2021</td>
                        <td>+2</td>
                        <td>Small</td>
                        <td>+123 000 000 000</td>
                        <td>email@email.com</td>
                        <td>
                            <button class="btn btn-info">Accept</button>
                            <button class="btn btn-danger">Reject</button>
                        </td>
                      
                    </tr>
                    
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
