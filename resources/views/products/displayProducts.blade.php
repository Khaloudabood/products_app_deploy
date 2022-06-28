<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>display products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
          <h4>   Currently Available:
             <a href="{{ url('products')}}" class="btn btn-primary btn-sm float-end">Add product</a>

          </h4>
            </div>

            <div class="card-body">
    <table class="table table-hover">
        <thead>
            <tr>
              <th scope="col">Product Name</th>
              <th scope="col">Color</th>
              <th scope="col">Price</th>
              <th scope="col">Type</th>
              <th scope="col">Section</th>
              <th scope="col">Image</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          @foreach ($products as $item)

          <tbody>
            <tr>

              <td>
                {{$item->product_name}}
              </td>
              <td>
                {{$item->product_color}}
              </td>
              <td>
                {{$item->price}}
              </td>
              <td>
                {{$item->product_type}}
              </td>
              <td>
                {{$item->product_section}}
              </td>
              <td>
              <img src="{{asset('images')}}/{{$item->img}}" width="70px" height="70px" alt="img">
              </td>
              <td>
                <a href="" class="btn btn-primary btn-sm">Edit</a>
              </td>
              <td>
                <a href="" class="btn btn-danger btn-sm">Delete</a>
              </td>

              @endforeach
            </tr>
          </tbody>
      </table>
    </div>
    </div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
