<!doctype html>
<html lang="en">

  
<!--   This Can be Changed by Master Branch -->
  
  
  5
<head>
  <title>Inventory Project</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sen:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./css/style.css">



</head>

<body style=" background-image: url('./images/bg-01.jpg') ; background-repeat:no-repeat; background-size:cover;">
  <!-- Navbar -->

  <br>
  <br>

  <div class="container">
    <?php
    if (isset($_GET["msg"]) and !empty($_GET["msg"])) {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
       <?php echo $_GET["msg"] ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php

    }
    ?>
    <div class="card mx-auto mt-5 border border-danger " style="width: 25rem;">
      <img src="./images/signin-image.jpg" class="card-img-top mx-auto" style="width:50%;" alt="Loginimg">
      <div class="card-body">
        <b>
          <h5 class="card-title" style="font-weight: 700;font-size:28px; margin-left :120px">Login</h5>
        </b>
        <form id="form_login" onsubmit="return false">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email"  class="form-control" name="log_email" id="log_email" placeholder="Enter email">
            <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name = "log_password" id="log_password" placeholder="Password">
            <small id="p_error" class="form-text text-muted"></small>
          
          </div>
          <button type="submit" class="btn btn-primary">Login</button> <span>- or - </span>
          <a href="register.php"> Register?</a>
        </form>
      </div>
    </div>

  </div>




  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="./js/main.js"></script>

</body>

</html>
