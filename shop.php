<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<style>
    .shop {

        background-color: black;
    }

    .cat {
        text-align: center;
        padding-top: 50px;
        font-size: 50px;
    }

    .shop-box {
        padding: 0 35px;
        cursor: pointer;
        margin-bottom: 10px;
    }

    .shop-box img {
        width: 80%;
        position: relative;
        margin-top: 65px;
        margin-bottom: 45px;
        height: 80%;
    }

    .shop-box h6 {
        color: #DE1827;
        position: absolute;
        top: 10%;
        width: 100%;
        margin-left: 8%;
        text-align: left;
        font-size: 60px;
    }

    .shop-box h5 {
        color: #DE1827;
        position: absolute;
        top: 20%;
        width: 100%;
        margin-left: 9%;
        text-align: left;
        font-size: 40px;
    }

    .fa-arrow-circle-right {
        font-size: 22px;
        position: absolute;
        top: 30%;
        color: #DE1827;
        width: 100%;
        margin-left: 10%;
        text-align: left;
        font-size: 40px;
    }

    .shop-box h4 {
        color: #DE1827;
        position: absolute;
        top: 80%;
        width: 100%;
        margin-left: 3%;
        text-align: left;
        font-size: 40px;
    }
</style>

<body>
    <section class="shop">
        <div class="contains">
            <h2 class="cat" style="color: white">Categories</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="shop-box">
                        <img src="images/wing.jpeg">
                        <h6>Akatsuki</h6>
                        <h5>Accessories</h5>
                        <a href="./accessories.php">

                            <i class='fas fa-arrow-circle-right'></i>
                        </a>
                        <h4>Start Shopping</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shop-box">
                        <img src="images/white_.jpg">
                        <h6>Akatsuki</h6>
                        <h5>Apperal</h5>
                        <a href="./clothing.php">

                            <i class='fas fa-arrow-circle-right'></i>
                        </a>
                        <h4>Start Shopping</h4>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="shop-box">
                        <img src="images/poster.jpg">
                        <h6>Akatsuki</h6>
                        <h5>Posters</h5>
                        <a href="./poster.php">
                            <i class='fas fa-arrow-circle-right'></i>
                        </a>
                        <h4>Start Shopping</h4>
                    </div>
                </div>
            </div>
    </section>
</body>