<?php include('nav.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akatsuki</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Cart</title>
</head>
<style>
    .contain {
        background-color: black;
        height: 600px;
    }

    /* .row {
        background-color: black;
    } */
</style>

<body>
    <div class="contain">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-dark my-5">
                <h1 style="color:white">MY CART </h1>
            </div>
            <div class="col-lg-9">
                <table class="table">
                    <thead class="text-center" style="color:white">
                        <tr>
                            <th scope="col">Serial No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="text-center" style="color:white">
                        <?php
                        // $total = 0;
                        if (isset($_SESSION['cart'])) {
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $sr = $key + 1;
                                // $total = $total + $value['Price'];
                                echo "
                            <tr>
                            <td>$sr</td>
                             <td>$value[Item_Name]</td> 
                             <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
                              <td>
                             <input class='text-center iquantity'  onchange='subTotal();' type='number' value='$value[Quantity]' min='1' max='10'>
                        </td>
                             <td class='itotal'></td>
                              <form action='manage_cart.php' method='POST'>
                              <td><button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove</button></td>
                            <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
                              </form>
                            </tr>
                        ";
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-3">
                <div class="border bg-dark rounded p-4">
                    <h4 style="color:white">Grand Total:</h4>
                    <h5 style="color:white" class="text-right" id="gtotal"></h5>
                    <br>
                    <?php
                    if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {
                    ?>
                        <form action="purchase.php" method="POST">
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="full_name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="number" name="phone_no" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>


                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="pay_mod" value="COD" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Online Payment
                                </label>
                            </div>
                            <div class="form-check" style="color:white">
                                <input class="form-check-input" type="radio" name="pay_mode" value="COD" id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Cash on Delivery
                                </label>
                            </div>
                            <button class="btn btn-danger btn-block" name="purchase">Make Purchase</button>
                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script>
        var gt = 0;
        var iprice = document.getElementsByClassName('iprice');
        var iquantity = document.getElementsByClassName('iquantity');
        var itotal = document.getElementsByClassName('itotal');
        var gtotal = document.getElementById('gtotal');

        function subTotal() {
            gt = 0;
            for (i = 0; i < iprice.length; i++) {
                itotal[i].innerText = (iprice[i].value) * (iquantity[i].value);
                gt = gt + (iprice[i].value) * (iquantity[i].value);
            }
            gtotal.innerText = gt;

        }

        subTotal();
    </script>
</body>

</html>