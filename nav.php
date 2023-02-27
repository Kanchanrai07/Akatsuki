<?php
session_start(); ?>
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
</head>

<body>
    <section class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg" style="width:1250px">
                <div class="container-fluid" style="height:30px">
                    <a class="navbar-brand" href="#"><img src="images/logo.png" style="height:40px"></a>
                    <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button> -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                        </ul>
                        <div>
                            <?php
                            $count = 0;
                            if (isset($_SESSION['cart'])) {
                                $count = count($_SESSION['cart']);
                            }
                            ?>
                            <!-- <li class="nav-item"> -->
                            <a href="mycart.php" class="btn btn btn-dark"> My Cart (<?php echo $count; ?>)</a>
                        </div>
                    </div>
                </div>
        </div>
        </nav>
    </section>
</body>

</html>