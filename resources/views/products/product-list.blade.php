{{--Created by Thurya--}}
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
    <div class="search">
            <input type="text" name="" id="">
            <i class="fa-solid fa-magnifying-glass"></i>

        </div>

      @forelse ($products as product)
        <div class="col md-6">
          <div class="card-header">{{$products->name}}</div>
          <div class="card-body"> <img src="{{asset($product->img)}}" style="max-width:100%" alt=""></div>
            <hr>

        </div>
      @else
      {{__(no Data)}}
    </div>

</div>

<div class="container">
    <div class="row">
      @forelse ($products as product)
        <div class="col md-6">
            <div class="alert alert-success">{{products->description}}</div>
            <hr>
            <ul>

          <li> {{$product->description}}</li>

        </ul>
        </div>
        @else
    </div>
    <div class="qib-container">

      <button type="button" class="minus qib-button">-</button>
    <div class="quantity buttons_added">
         <label class="screen-reader-text" for="quantity_62b98cfac8904">quantity</label> <input type="number" id="quantity_62b98cfac8904" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="الكمية" size="4" placeholder="" input mode="numeric"></div>
    <button type="button" class="plus qib-button">+</button></div>
</div>


<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">feed back</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<a herf="products/add-to-cart/{{products->id}}">
<button type="submit" name="add-to-cart" value="324" class="single_add_to_cart_button button alt">add to cart</button>

</a>
</body>
</html>
