@extends('layouts.app')
@section('head')
@parent
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<link href="/css/auction/css.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

@endsection
@section('content')


<div class="container" style="padding-top: 20px;">
<h1 class="page-header">Start Auction</h1>
="<div class="row">




      <form class="form-horizontal" role="form" action="{{url('insert_start_Auction')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}

                  <!-- left column -->
          <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="text-center">
                  <img src="/img/img.jpg" class="avatar img-responsive img-thumbnail"  alt="Item">
                  <h6>Upload a photo of an item...</h6>
                  <input type="file" name="image" class="text-center center-block well well-sm">
              </div>
          </div>

    
<!-- edit form column -->

<div class="col-md-8 col-sm-6 col-xs-12 personal-info">

    <div class="form-group">
        <label class="col-lg-3 control-label">seller name:</label>
        <div class="col-lg-8">
        <input class="form-control" value="name" name="name" type="text">
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Auction Category</label>
        <div class="col-lg-8">
            <div class="ui-select">
                <select id="Auction_category" class="form-control" name="category">
                    <option value="fruit">fruit products</option>
                    <option value="vegetable">vegetable products</option>
                    <option value="diary">diary products</option>
                    <option value="grainary">grainary products</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Product name:</label>
        <div class="col-lg-8">
        <input class="form-control" value="product" type="text"name="product">
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Start Price:</label>
        <div class="col-lg-8">
        <input class="form-control" value="starting price" type="text" name="starting_price"  maxlength="10">
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">End time:</label>
        <div class="col-lg-8">
            <input class="form-control" type="datetime-local" name="endtime">
        </div>

    </div>


    <div class="form-group">
        <label class="col-lg-3 control-label">Description:</label>
        <div class="col-lg-8">
            <textarea class="form-control" value="description" name="description"  rows=3 COLS=30 >
            </textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="col-lg-3 control-label">Quantity</label>
        <div class="col-lg-8">
            <input type="text"  class="form-control" value="1"  name="quantity" maxlength="10" onkeypress='return event.charCode >= 48 && event.charCode <= 57'/>
        </div>
    </div>


    <div class="form-group">
        <label class="col-md-3 control-label"></label>
        <div class="col-md-8">
        <input class="btn btn-primary" value="Submit" type="submit">
        <span></span>
        <input class="btn btn-default" value="Cancel" type="reset">
        </div>
    </div>
</div>

      </form>
</div>
</div>

@endsection