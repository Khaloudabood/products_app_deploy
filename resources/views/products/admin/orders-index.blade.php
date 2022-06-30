<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4 class="text-white">New Orders</h4>
                    </div>
                 <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Order date</th>
                                <th>Tracking Number</th>
                                <th>Total Price</th>
                               <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @foreach ($orders as $item)
                        <tbody>

                            <tr>
                                <td>{{ date('Y-m-d', strtotime($item ->created_at)) }}</td>
                                <td>{{ $item->number_of_items }}</td>
                                <td>{{$item->total_price}}</td>
                                <td>{{$item->status == '0' ?'pending'  : 'completed'}}</td>
                                <td>
                                    <a href="{{ url('products/admin/view-order/' . $item->id)}}" class="btn btn-primary"> View </a>
                                </td>

                            </tr>
                        </tbody>
                        @endforeach
                    </table>

               </div>
           </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
