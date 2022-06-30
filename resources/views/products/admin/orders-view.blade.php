<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">Order View
                            <a href = "{{ url('orders') }}" class="btn btn-warning float-end">Back</a>
                        </h4>
                    </div>

                 <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 order-details">
                            <h4>Shipping Details</h4>
                            <hr>
                            <label for="">First Name</label>
                            <div class="bordered">name</div>
                            <label for="">Email</label>
                            <div class="bordered">someone@gmail.com</div>
                            <label for="">Contact NO.</label>
                            <div class="bordered">8970988908</div>
                            <label for="">Shipping Address</label>
                            <div class="bordered">
                                Address1,<br>
                                Address2,<br>
                                City,<br>
                                State,<br>
                                Country,<br>
                            </div>
                            <label for="">Zip Code</label>
                            <div class="bordered">A2343</div>
                    </div>
                    <div class="col-md-6">
                       <h4> Order Details</h4>
                       <hr>
                       <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Image</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item )
                            <tr>
                            <td>{{$item->products->product_name}}</td>
                            <td>{{$item->Price}}</td>
                            <td>
                                <img src="{{asset('images')}}/{{$item->products->img}}" width="70px" height="70px" alt="img">
                            </td>
                            </tr>
                            @endforeach
                        </tbody>
                       </table>
                       <h4 class="px-2">Total : <span class="float-end">{{$orders->total_price}}</span> </h4>

                       <div class="mt-3">
                        <form method="post" action ="">
                            @csrf

                       <label for="">Order Status</label>
                       <select class="form-select" name="orders_status">
                        <option {{$orders->status == '0'? 'selected' : ''}} value="0">Pending</option>
                        <option {{$orders->status == '1'? 'selected' : ''}} value="1">Completed</option>

                      </select>
                      <div type="submit" class="btn btn-primary">Update</div>
                       </div>
                    </div>
               </div>
           </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
