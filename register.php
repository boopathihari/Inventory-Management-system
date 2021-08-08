<!doctype html>
<html lang="en">

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
 

    <div class="container">

        <div class="row">
            <div class="col-md-4 mx-auto">
                <div class="marginTop">
                    <img src="./images/regg2.png" alt="Register" style="width:600px;">
                </div>
                <div class="mt-0">
                </div>
            </div>



            <div class="col-md-8 ">
                <div class="card ml-auto mt-5" style="width: 25rem;">
                    <div class="card-body">
                        <b>
                            <h5 class="card-title" style="font-weight: 700;font-size:28px; margin-left :120px">Register</h5>
                        </b>
                        <form id="register_form" onsubmit="return false" autocomplete="off">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="username">Full Name</label>
                                    <input name="username" type="name" class="form-control" id="username" placeholder="Enter Your name">
                                    <small id="u_error" class="form-text text-muted"></small>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                                <small id="e_error" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group">
                                <label for="password1">Password</label>
                                <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                <small id="p_error" class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label for="password2">Re-Enter Password</label>
                                <input type="password" class="form-control" id="password2" name="password2" placeholder="Password">
                                <small id="p2_error" class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label for="Usertype">User Type</label>
                                <select name="usertype" class="custom-select mr-sm-2 form-control" id="usertype">
                                    <option value="">Choose User type</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Other">Other</option>
                                </select>
                                <small id="t_error" class="form-text text-muted"></small>
                            </div>

                            <button type="submit" class="btn btn-primary" name="user_register">Register</button> <span>- or - </span>
                            <a href="index.php" class=""> Login</a>


                        </form>
                    </div>
                </div>
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