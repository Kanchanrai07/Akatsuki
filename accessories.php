<?php include('nav.php');
// session_start(); 
?>
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
    <title>Apperal</title>
</head>
<style>
    .cloth {
        background-color: black;
        height: 600px;
    }

    .card {
        /* height: 5px; */
        margin-top: 50px;
        margin-left: 50px;
        border-color: white;
        background-color: black;
    }

    .card-body {
        background-color: black;
        color: white;
    }
</style>

<?php print_r($_SESSION['cart']) ?>

<body>
    <div class="cloth">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/ring.jpg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title"> Onepiece Ring</h5>
                            <p class="card-text">Price: Rs. 500</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-danger">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="ring">
                            <input type="hidden" name="Price" value="500">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/demon.jpeg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Demon Slayer Shoes</h5>
                            <p class="card-text">Price: Rs. 5000</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-danger">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="demon">
                            <input type="hidden" name="Price" value="5000">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/purse.avif" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Naruto Purse</h5>
                            <p class="card-text">Price: Rs. 800</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-danger">Add to Cart</button>
                            <input type='hidden' name='Item_Name' value='Purse'>
                            <input type='hidden' name='Price' value='800'>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/kunai.jpeg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kunai</h5>
                            <p class="card-text">Price: Rs. 600</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-danger">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="kunai">
                            <input type="hidden" name="Price" value="600">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>