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
            <div class="alert alert-success">{{user->products[0]->img}}</div>
            <hr>
            <ul>
          @foreach($user->products as $product)
          <il> {{$issue->img}}</il>
          @endforeach
        </ul>
        </div>
    </div>

</div>

<div class="container">
    <div class="row">
        @foreach  ($users as $item)
        <div class="col md-6">
            <div class="alert alert-success">{{user->products[0]->description}}</div>
            <hr>
            <ul>
          @foreach($user->products as $product)
          <il> {{$product->description}}</il>
          @endforeach
        </ul>
        </div>
    </div>
<<<<<<< HEAD

=======
    <div class="qib-container"> <button type="button" class="minus qib-button">-</button>
    <div class="quantity buttons_added">
         <label class="screen-reader-text" for="quantity_62b98cfac8904">quantity</label> <input type="number" id="quantity_62b98cfac8904" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="الكمية" size="4" placeholder="" inputmode="numeric"></div>
    <button type="button" class="plus qib-button">+</button></div>
>>>>>>> adf470af3b297f3dc57d651d403b8436feb8e444
</div>



<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>

<<<<<<< HEAD
<button type="submit" value="Submit" >add to the bascket</button>
=======
<button type="submit" name="add-to-cart" value="324" class="single_add_to_cart_button button alt">add to cart</button>


>>>>>>> adf470af3b297f3dc57d651d403b8436feb8e444
</body>
</html>
