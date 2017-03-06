@extends('layouts.app')
@section('head')
    @parent

    <title>Example of Bootstrap 3 Panels with Table</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/js/auction/js.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 10px;
        }
    </style>

@endsection

@section('content')

    <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Brand Name</th>
                        <th class="text-center">Item name</th>
                        <th class="text-center">Item Quantity</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Total</th>
                        <th>�</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                    <tr>
                        <td class="col-sm-1 col-md-1" style="text-align: left">
                        <select>
                        
                            <option>adsad</option>
                        </select>
                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: left">
<select>
                        
                            <option>adsad</option>
                        </select>
                        </td>                        </td>
                        <td class="col-sm-1 col-md-1" style="text-align: left">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>$14.61</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-danger" id="remove">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></td>
                    </tr>
                    <tr>
                        <td> � </td>
                        <td> � </td>
                        <td> � </td>
                        <td> � </td>
                        <td><h5>�</h5></td>
                         <td class="col-sm-1 col-md-1">
                        <button type="button" class="btn btn-primary btn-default" id="add">
                            <span class="glyphicon glyphicon-remove"></span> Add
                        </button></td>
                    </tr>
                    <tr>
                        <td> � </td>
                        <td> � </td>
                        <td> � </td>
                        <td> � </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>$24.59</strong></h5></td>
                    </tr>
                    <tr>
                        <td> � </td>
                        <td> � </td>
                        <td> � </td>
                        <td> � </td>
                        <td><h5>Estimated shipping</h5></td>
                        <td class="text-right"><h5><strong>$6.94</strong></h5></td>
                    </tr>
                    <tr>
                        <td> � </td>
                        <td> � </td>
                        <td> � </td>
                        <td> � </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>$31.53</strong></h3></td>
                    </tr>
                    <tr>
                        <td> � </td>
                        <td> � </td>
                        <td> � </td>
                        <td> � </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Shopping
                        </button></td>
                        <td>
                        <button type="button" class="btn btn-success">
                            Checkout <span class="glyphicon glyphicon-play"></span>
                        </button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection