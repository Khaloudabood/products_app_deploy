{{--Created by Thurya--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
 <div class="h1">order</div>
<body>
<div class="div">
   <img src="{{asset($product->img)}}" style="max-width:100%" alt=""></div>
<form>     Pick your Favorite color: <br><br>

<input type="color" name="upclick" value="#a52a2a"> Upclick<br><br>
<input type="color" name="downclick" value="#f5f5dc"> Downclick
</form>





<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    choose the country
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="#">Oman</a></li>
    <li><a class="dropdown-item" href="#">Sudia Arabia</a></li>
    <li><a class="dropdown-item" href="#">UAE</a></li>
  </ul>
</div>
<div style="text-transform: uppercase; text-overflow: ellipsis; overflow: hidden;">checkout securely now</div>


</body>
</html>
