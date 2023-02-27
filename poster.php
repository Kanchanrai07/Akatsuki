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



<body>
    <div class="cloth">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/karma.jpeg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Assasination classroom</h5>
                            <p class="card-text">Price: Rs. 150</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-danger">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Assasination">
                            <input type="hidden" name="Price" value="150">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/karma.jpg" class="card-img-top" style="height: 265px">
                        <div class="card-body text-center">
                            <h5 class="card-title">Handsome karma</h5>
                            <p class="card-text">Price: Rs. 150</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-danger">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="Karma">
                            <input type="hidden" name="Price" value="150">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/fairy.jpg" class="card-img-top" style="height: 265px">
                        <div class="card-body text-center">
                            <h5 class="card-title">Fairy Tale</h5>
                            <p class="card-text">Price: Rs. 150</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-danger">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="fairy">
                            <input type="hidden" name="Price" value="150">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/haikyu.jpeg" class="card-img-top" style="height: 265px">
                        <div class="card-body text-center">
                            <h5 class="card-title">Haikyu</h5>
                            <p class="card-text">Price: Rs. 150</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-danger">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="haikyu">
                            <input type="hidden" name="Price" value="150">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>