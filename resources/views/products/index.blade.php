<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>

{{-- Form --}}
<div class="container">
    <div class="row pt-5">
    <h1>Add a product</h1>
    <form method= "post" action="/products/store">
      @csrf
    <div class="mb-3">
    <label for="product_name" class="form-label">Product name</label>
    <input type="text" class="form-control" id="product_name" aria-describedby="emailHelp" name="product_name" requierd>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" class="form-control" id="price" aria-describedby="emailHelp" name="price" requierd >
  <div class="mb-3"><br>
    <label for="size" class="form-label">Size</label>
    <input type="number" class="form-control" id="size" aria-describedby="emailHelp" name="size" requierd >
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" class="form-control" id="description" name="description" requierd>
  </div>
  Color<br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="product_color1" value="Red" name="product_color" requierd>
    <label class="form-check-label" for="inlineCheckbox1">Red</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="product_color2" value="Yellow" name="product_color" requierd>
    <label class="form-check-label" for="product_color">Yellow</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="product_color3" value="Pink" name="product_color" requierd>
    <label class="form-check-label" for="inlineCheckbox1">Pink</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="product_color4" value="Green" name="product_color" requierd>
    <label class="form-check-label" for="product_color">Green</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="product_color5" value="Perple" name="product_color" requierd>
    <label class="form-check-label" for="product_color">Perpel</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="product_color6" value="Orange" name="product_color" requierd>
    <label class="form-check-label" for="product_color">Orange</label>
  </div>

  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="product_color7" value="Blue" name="product_color" requierd>
    <label class="form-check-label" for="product_color">Blue</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="product_color8" value="Black" name="product_color" requierd>
    <label class="form-check-label" for="product_color">Black</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="product_color9" value="White" name="product_color" requierd>
    <label class="form-check-label" for="product_color">White</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="product_color10" value="Brown" name="product_color" requierd>
    <label class="form-check-label" for="product_color">Brown</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="checkbox" id="product_color11" value="Gray" name="product_color" requierd>
    <label class="form-check-label" for="product_color">Gray</label>
  </div><br><br>
  Gender<br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="product_section1" value="Male" name="product_section" requierd>
    <label class="form-check-label" for="product_section">Male</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio"  id="product_section2" value="Female" name="product_section" requierd>
    <label class="form-check-label" for="product_section">Female</label>
  </div>
<br><br>


Product Type<br>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio"  id="product_type1" value="Pags" name="product_type" requierd>
    <label class="form-check-label" for="product_type">Pags</label>
  </div>
  <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" id="product_type2" value="Shose" name="product_type" requierd>
    <label class="form-check-label" for="product_type">Shose</label>
  </div>
<br><br>

  <div class="mb-3">
  <label for="formfile" class="form-label">Attachment</label>
  <input class="form-control" type="file" id="formFile" name="attachment" >
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

{{-- #Form --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    Swal.fire({

      icon: 'success',
      title: 'Your work has been saved',
      text:'Press OK to continue',
      showConfirmButton: true,
    })
      </script>
</body>
</html>
