@extends('layouts.user_app')
@section('content')
<!-- /// Main Container /// -->
<div class="container">
    <!-- /// ABOUT SECTION /// -->
    <div id="about" class="large-margin cart">
    </div>
    <!-- /// CONTACT SECTION /// -->
    <div id="contact" class="large-margin">
        <div class="">
            <div class="row small-margin">
                <div class="col-md-11">
                    <p>We would love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer viverra laoreet dolor sit amet blandit. Ut suscipit nisl ut risus volutpat malesuada.</p>
                </div>
            </div>
            <div class="row">
                <div class="mx-auto col-md-8">
                    <h2 class="short-hr-left">Orders Details</h2>
                    <table class="table table-bordered order-details-table">
                        <thead>
                            <tr>
                                <th>Sn No.</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total Payment</th>
                                <th>Date & Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Cloud PI</td>
                                <td>4</td>
                                <td>599</td>
                                <td>2396</td>
                                <th>23/08/2021 15:30:12</th>
                            </tr>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div><!-- Main Container End -->
@endsection()