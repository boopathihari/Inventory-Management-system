<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
    header("location:" . DOMAIN . "/");
}
?>


<!doctype html>
<html lang="en">

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

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card border-light">
                    <img src="./images/photo_2021-06-02_11-16-21.jpg" class="card-img-top mx-auto mt-3 profile" alt="profilePhoto">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: 700; font-size:20px; color:#29a2f8">Profile Info</h5>
                        <p class="card-text"><b> Username: </b><?php echo $_SESSION["username"]; ?></p>
                        <p class="card-text"><b> Usertype: </b> Admin</p>
                        <p class="card-text"><b> Last Login:</b> <?php echo $_SESSION["last_login"]; ?></p>
                        <a href="#" class="btn btn-primary">Edit Profile</a>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="card mb-3 border-light" style="max-width: 100% ;height:100% ">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="./images/welcome.png" style="width: 300px;" class="card-img margin-top" alt="Wwlcome">
                        </div>
                        <div class="col-md-8 mt-1">
                            <div class="card-body ">
                                <h5 class="card-title" style="font-weight: 700; font-size:30px">Welcome Admin</h5>
                                <p class="card-text">Hi Boopathi Hari, Here You can Manage Your Categories , Brands, Products and also make Invoices and Create new Orders</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>


                            </div>
                            <div class="img-left">
                                <a href="new_order.php" type="button" class="btn btn-primary px-5">New Order</a>
                                <img src="./images/thank you.png" style="width: 180px;" class="card-img " alt="Wwlcome">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5 mt-5">
        <div class="row ">

            <div class="col-md-4">
                <div class="card shadow border-light">
                    <img src="./images/category.png" class="card-img-top mx-auto" style="width:60% ;" alt="Manage">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: 700;">Manage Categories</h5>
                        <p class="card-text">Here You can Manage Your Categories and you can Add new Parent and Sub Categories.</p>
                        <a href="#" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#form_category"><i class="far fa-plus-square">&nbsp;</i>Add Categories</a>
                        <a href="manage_categories.php" class="btn btn-primary btn-sm"><i class="fas fa-tasks">&nbsp;</i>Manage Categories</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ">
                <div class="card shadow border-light">
                    <img src="./images/Brands.png" class="card-img-top mx-auto" style="width:60% ;" alt="Manage">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: 700;">Brands</h5>
                        <p class="card-text ">Here You can Manage Your Brands and Add New Brands.</p>
                        <br>
                        <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#form_brand"><i class="far fa-plus-square">&nbsp;</i>Add Brands</a>
                        <a href="manage_brand.php" class="btn btn-primary btn-sm"><i class="fas fa-tasks">&nbsp;</i>Manage the Brands</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow border-light">
                    <img src="./images/product.png" class="card-img-top mx-auto" style="width:60% ;" alt="Manage">
                    <div class="card-body">
                        <h5 class="card-title" style="font-weight: 700;">Products</h5>
                        <p class="card-text">Here You can Manage Your Products and You add new Products and also Customize your Products.</p>
                        <a href="#" class="btn btn-primary btn-sm " data-toggle="modal" data-target="#form_product"><i class="far fa-plus-square">&nbsp;</i>Add Products</a>
                        <a href="manage_product.php" class="btn btn-primary btn-sm"><i class="fas fa-tasks">&nbsp;</i>Manage Products</a>
                    </div>
                </div>
            </div>

        </div>
    </div>


   


    <?php include_once('./templates/product.php')?>
    <?php include_once('./templates/category.php')?>
    <?php include_once('./templates/brand.php')?>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>