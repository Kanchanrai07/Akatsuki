<?php
require("connection.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>
<style>
    div.header {
        display: flex;
        justify-content: space-between;
        font-family: poppins;
        align-items: center;
        padding: 0px 60px;
        background-color: black;
        color: white;
    }

    body {
        margin: 0px;
    }

    div.header button {
        background-color: #DE1827;
        font-size: 16px;
        font-weight: 550;
        padding: 8px 12px;
        border: 2px solid white;
        border-radius: 5px;
        color: white;
    }
</style>

<body>
    <div class="header">
        <h1>WELCOME ADMIN </h1>
        <form method="POST">
            <button href="product.php">Product</button>
            <button name="logout">LOG OUT</button>
        </form>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table text-center ">
                    <thead>
                        <tr>
                            <th scope="col">Order Id</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone No</th>
                            <th scope="col">Address</th>
                            <th scope="col">Pay Mode</th>
                            <th scope="col">Orders</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM `order_manager`";
                        $user_result = mysqli_query($con, $query);
                        while (
                            $user_fetch = mysqli_fetch_assoc($user_result)
                        ) {
                            echo "  <tr>
                            <td>$user_fetch[Order_id]</td>
                            <td>$user_fetch[Full_Name]</td>
                            <td>$user_fetch[Phone_No]</td>
                            <td>$user_fetch[Address]</td>
                             <td>$user_fetch[Pay_Mode]</td>
                            <td>
                             <table class='table text-center'>
                    <thead>
                        <tr>
                            <th scope='col'>Item Name</th>
                            <th scope='col'>Price</th>
                            <th scope='col'>Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                    ";
                            $order_query = "SELECT * FROM `user_orders` WHERE 'Order_id'='$user_fetch[Order_id]'";
                            $order_result = mysqli_query($con, $order_query);
                            while ($order_fetch = mysqli_fetch_assoc($order_result)) {
                                echo "
                        <tr>
                        <td>$order_fetch[Item_Name]</td>
                         <td>$order_fetch[Price]</td>
                          <td>$order_fetch[Quantity]</td>
                    </tr>
                        ";
                            }
                            echo "
                    </tbody>
                    </table>
                            </td>
                        </tr>";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header("location:admin_login.php");
    }
    ?>

</body>

</html>