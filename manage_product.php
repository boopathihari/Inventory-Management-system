<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inventory Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">


</head>

<body style="background-color: #e8f8fc ;">
	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br/><br/>
	<div class="ml-5 mr-5">
	<h4  class="bold">Manage Products :) </h4><br>
		<table class="table  rounded table-bordered border-primary ">
		    <thead class="thead-dark">
		      <tr>
		        <th>#</th>
		        <th>Product</th>
		        <th>Category</th>
		        <th>Brand</th>
		        <th>Price</th>
		        <th>Stock</th>
		        <th>Added Date</th>
		        <th>Status</th>
		        <th>Action</th>
		      </tr>
		    </thead>
		    <tbody id="get_product">
		      <!--<tr>
		        <td>1</td>
		        <td>Electronics</td>
		        <td>Root</td>
		        <td><a href="#" class="btn btn-success btn-sm">Active</a></td>
		        <td>
		        	<a href="#" class="btn btn-danger btn-sm">Delete</a>
		        	<a href="#" class="btn btn-info btn-sm">Edit</a>
		        </td>
		      </tr>-->
		    </tbody>
		  </table>
	</div>


	<?php
		include_once("./templates/update_products.php");
	?>
	
	
     <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/manage.js"></script>
</body>
</html>