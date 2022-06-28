<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 

<style>
.addto {
  background-color: #676A67; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}
.addtocart:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}

.dropbtn {
  background-color: #6E726E;
  color: white;
  padding: 10px;
  font-size: 14px;
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #696969;
  min-width: 90px;
  box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 10px 12px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #B9B1B1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #696969;
}
</style>
</head>

<body>
    <div class="continer">
        <div class="row">
        <h1>The Shop</h1>
            <div class="dropdown">
                Show all filter <button class="dropbtn">choose the filter</button>
                <div class="dropdown-content">
                <a href="#">MOST POULAR</a>
                <a href="#">LOW PRICE TO HIGH PRICE</a>
                <a href="#">HIGH PRICE TO LOW PRICE 3</a>
            </div>
<br><br><br>

      <table >
          <tr align="center">
            <td><a href="defaultryt.asp">
            <img src="{{asset('images/sample1.jpg')}}" alt="Sample 1" style="width:50%;height:70%;">
            <br>Sample 1 <br> 29.99 OMR
            <br><button class="addto addtocart">Add to cart</button>
            </a>
            </td>
            <td><a href="defaultryt.asp">
            <img src="{{asset('images/sample2.jpg')}}" alt="Sample 2" style="width:50%;height:70%;">
            <br>Sample 2 <br> 29.99 OMR
            <br><button class="addto addtocart">Add to cart</button>
            </a></td>
            <td><a href="defaultryt.asp">
            <img src="{{asset('images/sample3.jpg')}}" alt="Sample 3" style="width:50%;height:70%;">
            <br>Sample 3 <br> 29.99 OMR
            <br><button class="addto addtocart">Add to cart</button>
            </a></td>
            <td><a href="defaultryt.asp">
            <img src="{{asset('images/sample4.jpg')}}" alt="Sample 4" style="width:50%;height:70%;">
            <br>Sample 4 <br> 29.99 OMR
            <br><button class="addto addtocart">Add to cart</button>
            </a></td>
          </tr>
          <tr align="center">
          <td><a href="defaultryt.asp">
            <img src="{{asset('images/sample5.jpg')}}" alt="Sample 5" style="width:50%;height:70%;">
            <br>Sample 4 <br> 29.99 OMR <br>
            <br><button class="addto addtocart">Add to cart</button>
            </a></td>
          </tr>
      </table>
       </div>
    </div>  
</body>
</html>