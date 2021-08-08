<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
    header("location:" . DOMAIN . "/");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Inventory ject</title>
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
    <div class="overlay">
        <div class="loader"></div>
    </div>
    <!-- Navbar -->
    <?php include_once("./templates/header.php"); ?>
    <br /><br />

    <div class="container">

        <form id="get_order_data" onsubmit="return false">

            <div class="form-group row">

                <div class="card mb-5 mx-auto" style="box-shadow:0 0 15px 0 lightgrey;">
                    <div class="card-header bgblue">
                        <h4 class="font-W">Make a new Order List</h4>
                    </div>

                    <div class="card-body">
                        <table align="center" style="width:800px;">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="text-align:center;">Item Name</th>
                                    <th style="text-align:center;">Total Quantity</th>
                                    <th style="text-align:center;">Quantity</th>
                                    <th style="text-align:center;">Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody id="invoice_item">
                                <!-- <tr>
		    <td><b id="number">1</b></td>
		    <td>
		        <select name="pid[]" class="form-control form-control-sm" required>
                 <option>Washing Machine</option>
		        </select>
		    </td>
		    <td><input name="tqty[]" readonly type="text" class="form-control form-control-sm"></td>   
		    <td><input name="qty[]" type="text" class="form-control form-control-sm" required></td>
		    <td><input name="price[]" type="text" class="form-control form-control-sm" readonly></td>
		    <td>Rs.1540</td>
		</tr> -->
                            </tbody>
                        </table>
                        <!--Table Ends-->
                        <center style="padding:10px;">
                            <button id="add" style="width:150px;" class="btn btn-outline-success"><i class="fas fa-cart-plus">&nbsp; &nbsp;</i>Add</button><span>&nbsp;</span>
                            <button id="remove" style="width:150px;" class="btn btn-outline-danger"><i class="fas fa-trash-alt">&nbsp; &nbsp;</i>Remove</button>
                        </center>
                    </div>
                    <!--Crad Body Ends-->
                </div> <!-- Order List Crad Ends-->



                <div class="card mb-8" style="box-shadow:0 0 25px 0 lightgrey; max-width: 100%;">
                    <div class="row no-gutters">
                        

                        <div class="col-md-8 ">
                            <div class="card-header bgblue">
                                <h4 class="font-white">New Orders</h4>
                            </div>
                            <div class="card-body">
                                <label class="col-sm-3 col-form-label" align="right">Order Date</label>
                                <div class="col-sm-6">
                                    <input type="text" id="order_date" name="order_date" readonly class="form-control form-control-sm" value="<?php echo date("Y-d-m"); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label" align="right">Customer Name*</label>
                                <div class="col-sm-6">
                                    <input type="text" id="cust_name" name="cust_name" class="form-control form-control-sm" placeholder="Enter Customer Name" required />
                                </div>
                            </div>

                            <p></p>
                            <div class="form-group row">
                                <label for="sub_total" class="col-sm-3 col-form-label" align="right">Sub Total</label>
                                <div class="col-sm-6">
                                    <input type="text" readonly name="sub_total" class="form-control form-control-sm" id="sub_total" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gst" class="col-sm-3 col-form-label" align="right">GST (18%)</label>
                                <div class="col-sm-6">
                                    <input type="text" readonly name="gst" class="form-control form-control-sm" id="gst" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="discount" class="col-sm-3 col-form-label" align="right">Discount</label>
                                <div class="col-sm-6">
                                    <input type="text" name="discount" class="form-control form-control-sm" id="discount" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="net_total" class="col-sm-3 col-form-label" align="right">Net Total</label>
                                <div class="col-sm-6">
                                    <input type="text" readonly name="net_total" class="form-control form-control-sm" id="net_total" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="paid" class="col-sm-3 col-form-label" align="right">Paid</label>
                                <div class="col-sm-6">
                                    <input type="text" name="paid" class="form-control form-control-sm" id="paid" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="due" class="col-sm-3 col-form-label" align="right">Due</label>
                                <div class="col-sm-6">
                                    <input type="text" readonly name="due" class="form-control form-control-sm" id="due" required />
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="payment_type" class="col-sm-3 col-form-label" align="right">Payment Method</label>
                                <div class="col-sm-6">
                                    <select name="payment_type" class="form-control form-control-sm" id="payment_type" required />
                                    <option>Cash</option>
                                    <option>Card</option>
                                    <option>Draft</option>
                                    <option>Cheque</option>
                                    </select>
                                </div>
                            </div>

                            <center>
                                <input type="submit" id="order_form" style="width:150px;" class="btn btn-primary" value="Order">
                                <input type="submit" id="print_invoice" style="width:150px;" class="btn btn-success d-none" value="Print Invoice">
                            </center>
                            <br/>
                            <br/>
                        </div>
                        <div class="col-md-4">
                            <img src="./images/order.png" class="card-img rounded mx-auto" alt="cart" style="width: 100%; margin-top:150px; ">
                        </div>


        </form>

    </div>
    </div>




    </div>


    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/order.js"></script>
</body>

</html>