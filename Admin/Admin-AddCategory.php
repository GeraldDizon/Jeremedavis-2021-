<?php
session_start();
require('Admin-ViewCategory.php');
require('../Database/Query/AddCategory.php');
require('../Database/Query/DeleteCategory.php');
require('../Connection/AdminOnlyPageRedirect.php');
/*if (!isset($_SESSION['views'])) {
  $_SESSION['views'] = 0;
} else {
  $_SESSION['views']++;
}
 echo $_SESSION['views'];*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.7-dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../Css/Admin-Category.css">
  <script rel="stylesheet" type="text/javascript" src="../bootstrap-3.3.7-dist/js/jquery-1.12.2.min.js"></script>
  <script rel="stylesheet" type="text/javascript" src="../bootstrap-3.3.7-dist/js/npm.js"></script>
  <script rel="stylesheet" type="text/javascript" src="../bootstrap-3.3.7-dist/js/bootstrap.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="Admin-Registered-Accounts.php">Users</a></li>
        <li><a href="Admin-Inquiry.php">Inquiry</a></li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tables
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a href = "Admin-AddProduct.php">Collection</a></li>
                  <li role="presentation"><a href = "Admin-AddCategory.php">Category</a></li>
                  <li role="presentation"><a href = "Admin-AddShippingFee.php">Shipping</a></li>
                  <li role="presentation"><a href = "Admin-AddFeaturedItem.php">Featured</a></li>
                  <li role="presentation"><a href = "Admin-AddCarousel.php">Carousel</a></li>
                </ul>
            </li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Orders
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="Admin-Orders.php">Pending Orders</a></li>
                  <li><a href="Admin-Order-History.php">Orders Completed</a></li>
                </ul>
            </li>
          <li role="presentation"><a href = "../Logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-1 sidenav hidden-xs" id = "bottomHalf">
      <ul class="nav nav-pills nav-stacked">
        <li><a href="Admin-Registered-Accounts.php">Users</a></li>
        <li><a href="Admin-Inquiry.php">Inquiry</a></li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tables
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li role="presentation"><a href = "Admin-AddProduct.php">Collection</a></li>
                  <li role="presentation"><a href = "Admin-AddCategory.php">Category</a></li>
                  <li role="presentation"><a href = "Admin-AddShippingFee.php">Shipping</a></li>
                  <li role="presentation"><a href = "Admin-AddFeaturedItem.php">Featured</a></li>
                  <li role="presentation"><a href = "Admin-AddCarousel.php">Carousel</a></li>
                </ul>
            </li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Orders
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="Admin-Orders.php">Pending Orders</a></li>
                  <li><a href="Admin-Order-History.php">Orders Completed</a></li>
                </ul>
            </li>
          <li role="presentation"><a href = "../Logout.php">Logout</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-11">
      <div class = "container-fluid">
      <div class="row">
          <h4><img class = "Sub-Image" src = "../Images/Admin-Categories.png"> Add Categories</h4>
          <hr>
      	<form method = "POST">
	        <div class = "form-group input-group-sm">
	          <input type="text" class="form-control input-sm" name="category" placeholder="Product Category">
            <br>
	          <input type="submit" value = "Submit" name = "AddCategory" class = "btn_add_category">
	        </div>
	    </form>

		<table class="table text-center">
	        <thead>
	        <tr>
	          <th>Category</th>
	          <th>Action</th>
	        </tr>
	        </thead>
	        <tbody>
	          <?php foreach($categories as $row){?>	
            <tr>
	          <form method = "POST">

	          	  <input type = "hidden" name = "id" value = "<?php echo $row['id'] ?>">
	              <td><?php echo $row['ProductCategories'] ?></td>
	              <td>
                  <button type="submit" name="DeleteCategory"  align = "right"><img src="../Images/Trash-Icon.png" alt="Delete" class = "EmailSent" ></button>
	              </td>

	          </form>
            </tr>
	          <?php } ?>
	        </tbody>
	    </table>
      <?php
      if($rowCount >= 5){ 
        $items = $rowCount/5;
        $items = ceil($items);
        for($x = 1; $x <= $items; $x++){?>
          <a href = "Admin-AddCategory.php?page=<?php echo $x; ?>"><?php echo $x. " "; ?></a>
      <?php } 
      }
      ?>
      </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>

