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

    .card-img {
        height: 80%;
    }
</style>



<body>
    <div class="cloth">
        <div class="row">
            <div class="col-lg-3" style="height:100%">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/zoro.webp" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Zoro Cosplay</h5>
                            <p class="card-text">Price: Rs. 1500</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-danger">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="zoro">
                            <input type="hidden" name="Price" value="1500">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/kakegurai.jpeg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Kakegurai Cosplay</h5>
                            <p class="card-text">Price: Rs. 2500</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-danger">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="kakegurai">
                            <input type="hidden" name="Price" value="2500">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/akat.jpeg" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Akatsuki Cosplay</h5>
                            <p class="card-text">Price: Rs. 1200</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-danger">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="akatsuki">
                            <input type="hidden" name="Price" value="1200">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method="POST">
                    <div class="card">
                        <img src="images/attack.webp" class="card-img-top">
                        <div class="card-body text-center">
                            <h5 class="card-title">Attack on Titan Cosplay</h5>
                            <p class="card-text">Price: Rs. 1200</p>
                            <button type="submit" name="Add_To_Cart" class="btn btn-danger">Add to Cart</button>
                            <input type="hidden" name="Item_Name" value="attack">
                            <input type="hidden" name="Price" value="1200">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>