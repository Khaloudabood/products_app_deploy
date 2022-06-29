<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<body>

<div class="container">
    <div class="row">
        @foreach  ($users as $item)
        <div class="col md-6">
            <div class="alert alert-success">{{$user->products[0]->img}}</div>
            <hr>
            <ul>
          @foreach($user->products as $product)
          <li> {{$issue->img}}</li>
          @endforeach
        </ul>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        @foreach  ($users as $item)
        <div class="col md-6">
            <div class="alert alert-success">{{$user->products[0]->description}}</div>
            <hr>
            <ul>
          @foreach($user->products as $product)
          <li> {{$product->description}}</li>
          @endforeach
        </ul>
        </div>
    </div>
</div>



<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<button type="submit" value="Submit" >add to the bascket</button>
</body>
</html>
