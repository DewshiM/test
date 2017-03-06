@extends('layouts.app')

@section('head')
    @parent
    <title xmlns="http://www.w3.org/1999/html">Bootstrap Example</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
        .row.content {height: 1500px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }


        /* On small screens, set height to 'auto' for sidenav and grid */
        @media screen and (max-width: 767px) {
            .sidenav {
                height: auto;
                padding: 15px;
            }
            .row.content {height: auto;}
        }
    </style>

@endsection


@section('content')

    <center> <h4>Grainary Auctions</h4></center>


    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav">
                <div>
                    </br></br>
                </div>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
              <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
                </div>

                <div>
                    </br>
                </div>

                <h4>Categories</h4>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active">
                        <a href="buyerAucHome">Home</a></li>
                    <li><a href="buyerAucFruit">Fruit</a></li>
                    <li><a href="buyerAucVeg">Vegitable</a></li>
                    <li><a href="buyerAucDiary">Diary</a></li>
                    <li><a href="buyerAucGrainary">Grainary</a></li>
                </ul><br>

            </div>


            <div class="col-sm-9">










                <!-- BEGIN PRODUCTS -->

                <?php
                $mytime = Carbon\Carbon::now();
                ?>


                <?php

                // $data = DB::table('start_auction')->where('seller_name', 'kasun')->first();
                //$data = DB::table('start_auction')->pluck('seller_name', 'kasun');
                $data = DB::table('start_auction')
                        ->where('end_time','>',$mytime)
                        ->where('category','grainary')
                        ->get();


                foreach ( $data as $value )
                {
                ?>

                <div class="col-md-3 col-sm-6">
<span class="thumbnail">
<img src="storage/app/upload/images <?php echo $value->image; ?>" alt="...">




<h4><?php echo $value->product_name; ?></h4>

  <div>  Seller   :<?php echo $value->seller_name; ?></br> </div>
      <div>   Quantity :<?php echo $value->quantity; ?></br> </div>
        <p class="price">Starting Price:<?php  echo '$'.$value->starting_price; ?></p>
    </br>
    <div>end at   :<?php echo $value->end_time; ?></br> </div>

    <hr class="line">

<div class="row">

    <div class="col-md-6 col-sm-6">
        <a href="buyerBidProduct" class="btn btn-success right"> BID ITEM</a>
    </div>
</div>
    		</span>




                </div>

                <?php
                }
                ?>

                        <!-- 2nd row -->

                <!-- END PRODUCTS -->

            </div>





        </div>
    </div>



@endsection
