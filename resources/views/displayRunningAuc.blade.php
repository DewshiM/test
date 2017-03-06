@extends('layouts.app')
@section('head')
@parent

<title>Example of Bootstrap 3 Panels with Table</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
        margin: 10px;
    }
</style>

@endsection
@section('content')

        <!--
    <div class="container">
        <div class="row">
            <h2>Welcome to Auction</h2>
            <ul class="ds-btn">
                <br><br>
              //  <?php
           /*    foreach ( $data as $value )
                {


                    echo $value->seller_name;
                    echo $value->product_name;
                    echo $value->quantity;
                    echo $value->starting_price;

                    echo '<br>';
                    echo '<br>';
                }
           */
                ?>

            </ul>
        </div>
    </div>

   -->


    <form name="kidinfo">
        <div class="bs-example">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">Kids Details</div>
                <div class="panel-body">
                    <p>The following table contains some personal information about kids.</p>
                </div>
                <!-- Table -->
                <table class="table">
                    <thead>
                    <tr>
                        <th>seller_name</th>
                        <th>product_name</th>
                        <th>quantity</th>
                        <th>starting_price</th>
                        <th>end_time</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    $mytime = Carbon\Carbon::now();
                    ?>

                    <?php

                   // $data = DB::table('start_auction')->where('seller_name', 'kasun')->first();
                    //$data = DB::table('start_auction')->pluck('seller_name', 'kasun');
                    $data = DB::table('start_auction')->where('end_time','>',$mytime)->get();


                    foreach ( $data as $value )
                    {
                    ?>

                    <tr>
                        <td><?php echo $value->seller_name; ?></td>
                        <td><?php echo $value->product_name; ?></td>
                        <td><?php echo $value->quantity; ?></td>
                        <td><?php  echo $value->starting_price; ?></td>
                        <td><?php  echo $value->end_time; ?></td>
                        <td><a href="farmerAucHome">more info...</a></td>
                    </tr>

                    <?php
                    }z
                    ?>

                    </tbody>
                </table>
            </div>
            <!-- Button -->
            <div class="form-group">
                <div>
                    <button id="paybutton" name="payselected" class="btn btn-primary;">Pay</button>
                </div>
            </div>
        </div>

    </form>



@endsection