<?php
include './customers/config.php';
if (isset($_POST['addfeed'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $phone = $_POST['contact'];
    $msg = $_POST['msg'];
    $sql = "INSERT INTO `feedback`( `fullname`, `email`, `contact`, `mesg`)
  VALUES ('$fname','$email','$phone','$msg')";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        header('location:contact.php?Feedback_Added_Successfully');
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashion</title>
    <link rel="shortcut icon" type="image" href="./image/logo2.png" />
    <link rel="stylesheet" href="style.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
    <!-- bootstrap links -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous" />
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
        rel="stylesheet" />
    <link
        href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
        rel="stylesheet" />

    <!-- fonts links -->
</head>
<style>
    /* CSS Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        overflow-x: hidden;
        /* Prevent horizontal scrolling */
    }

    :root {
        --main-color: #fd4646;
        --sec-color: #4946fd;
        --text-color: #171427;
        --bg-color: #fff;
    }

    /* Add your existing CSS styles here */
    #cart-icon {
        font-size: 1.8rem;
        cursor: pointer;
    }

    /* CART  */
    .cart {
        position: absolute;
        top: 0;
        right: -100%;
        width: 360px;
        height: 100vh;
        overflow-y: auto;
        padding: 20px;
        background-color: var(--bg-color);
        box-shadow: -2px solid 4px hsl(0 4% 15% / 10%);
        border: 1px solid var(--main-color);
        transition: 1.5s;
    }

    .cart.active {
        right: 0;
        transition: 0.5s;
    }

    .cart-title {
        text-align: center;
        font-size: 1.5rem;
        font-weight: 600;
        margin-top: 2rem;
    }

    .cart-box {
        display: grid;
        grid-template-columns: 32% 50% 18%;
        align-items: center;
        gap: 1rem;
        margin-top: 1rem;
    }

    .cart-img {
        width: 100px;
        height: 100px;
        object-fit: contain;
        padding: 10px;
    }

    .detail-box {
        display: grid;
        row-gap: 0.5rem;
    }

    .cart-product-title {
        font-size: 1rem;
        text-transform: uppercase;
    }

    .cart-price {
        font-weight: 500;
    }

    .cart-quantity {
        border: 1px solid var(--text-color);
        outline-color: var(--main-color);
        width: 2.4rem;
        text-align: center;
        font-size: 1rem;
    }

    .cart-remove {
        font-size: 24px;
        color: var(--main-color);
        cursor: pointer;
    }

    .total {
        display: flex;
        justify-content: flex-end;
        margin-top: 1.5rem;
        border-top: 1px solid var(--text-color);
    }

    .total-title {
        font-size: 1rem;
        font-weight: 600;
    }

    .total-price {
        margin-left: 0.5rem;
    }

    .order-btn {
        display: flex;
        margin: 1.5rem auto 0 auto;
        padding: 12px 20px;
        border: none;
        background-color: var(--sec-color);
        color: var(--bg-color);
        font-size: 1rem;
        font-weight: 500;
        cursor: pointer;
    }

    .btn-buy {
        display: flex;
        margin: 1.5rem auto 0 auto;
        padding: 12px 20px;
        border: none;
        background-color: var(--sec-color);
        color: var(--bg-color);
        font-size: 1rem;
        font-weight: 500;
        cursor: pointer;
    }

    .btn-buy:hover {
        background-color: var(--text-color);
    }

    #cart-close {
        position: absolute;
        top: 1rem;
        right: 0.8rem;
        font-size: 2rem;
        color: var(--text-color);
        cursor: pointer;
    }

    /* SHOP SECTION  */
    .shop {
        margin-top: 2rem;
    }

    .section-title {
        font-style: 1.5rem;
        font-weight: 600;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .shop-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, auto));
        gap: 1.5rem;
    }

    .product-box {
        position: relative;
    }

    .product-box:hover {
        padding: 10px;
        border: 1px solid var(--text-color);
        transition: 0.4s;
    }

    .product-img {
        width: 100%;
        aspect-ratio: 1/1;
        object-fit: cover;
        margin-bottom: 0.5rem;
    }

    .product-title {
        font-size: 1.1rem;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }

    .product-price {
        font-weight: 500;
    }

    .add-cart {
        position: absolute;
        bottom: 0;
        right: 0;
        background-color: var(--text-color);
        color: var(--bg-color);
        padding: 10px;
        cursor: pointer;
    }

    .add-cart:hover {
        background-color: hsl(249, 32%, 17%);
    }

    /* SHOP SECTION  */
    .shop {
        margin-top: 2rem;
    }

    .section-title {
        font-style: 1.5rem;
        font-weight: 600;
        text-align: center;
        margin-bottom: 1.5rem;
    }

    .shop-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, auto));
        gap: 1.5rem;
    }

    .product-box {
        position: relative;
    }

    .product-box:hover {
        padding: 10px;
        border: 1px solid var(--text-color);
        transition: 0.4s;
    }

    .product-img {
        width: 100%;
        aspect-ratio: 1/1;
        object-fit: cover;
        margin-bottom: 0.5rem;
    }

    .product-title {
        font-size: 1.1rem;
        font-weight: 600;
        text-transform: uppercase;
        margin-bottom: 0.5rem;
    }

    .product-price {
        font-weight: 500;
    }

    .add-cart {
        position: absolute;
        bottom: 0;
        right: 0;
        background-color: var(--text-color);
        color: var(--bg-color);
        padding: 10px;
        cursor: pointer;
    }

    .add-cart:hover {
        background-color: hsl(249, 32%, 17%);
    }

    /* ================ RESPONSIVE & BREAKPOINTS ============= */
    @media (max-width: 1080px) {
        .nav {
            padding: 15px;
        }

        .container {
            width: 90%;
            margin: 0 auto;
        }

        section {
            padding: 3rem 0 2rem;
        }

        .shop {
            margin-top: 2rem;
        }
    }

    /* For Medium Devices */
    @media (max-width: 400px) {
        .nav {
            padding: 11px;
        }

        .logo {
            font-size: 1rem;
        }

        .cart {
            width: 320px;
        }
    }

    /* For Small Devices */
    @media (max-width: 360px) {
        .shop {
            margin-top: 1rem;
        }

        .cart {
            width: 280px;
        }
    }
</style>

<body>
    <!-- top navbar -->
    <div class="top-navbar">
        <div class="top-icons">
            <i class="fa-brands fa-twitter"></i>
            <i class="fa-brands fa-facebook-f"></i>
            <i class="fa-brands fa-instagram"></i>
        </div>
        <div class="other-links">
            <button id="btn-login"><a href="./customers/login.php">Login</a></button>
            <button id="btn-signup"><a href="./customers/signup.php">Sign up</a></button>

            <i class="fa-solid fa-user"></i>
            <i class="bx bx-shopping-bag" id="cart-icon"></i>
        </div>
    </div>
    <!-- top navbar -->

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./image/logo.png" alt="" width="180px" /></a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars" style="color: white"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="clothe.php">Clothe</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="navbarDropdown"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Category
                        </a>
                        <ul
                            class="dropdown-menu"
                            aria-labelledby="navbarDropdown"
                            style="background-color: #1c1c50">
                            <li><a class="dropdown-item" href="clothe.php">T-Shirt</a></li>
                            <li><a class="dropdown-item" href="clothe.php">Hoodies</a></li>
                            <li><a class="dropdown-item" href="clothe.php">Pants</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>

                <form class="d-flex">
                    <input
                        class="form-control me-2"
                        type="search"
                        placeholder="Search"
                        aria-label="Search" />
                    <button
                        class="btn btn-outline-success"
                        type="submit"
                        id="search-btn">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <!-- contact -->
    <div class="container" id="contact">
        <h1 class="text-center">CONTACT US</h1>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fas fa-phone"> Phone</i>
                    <h6>+00000000000000000</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fa-solid fa-envelope"> Email</i>
                    <h6>example@gmail.com</h6>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <i class="fa-solid fa-location-dot"> Address</i>
                    <h6>Karachi Sinfh Pakistan</h6>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 30px;">
            <form action="" method="post">
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" class="form-control form-control" placeholder="Name" name="fname">
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input type="text" class="form-control form-control" placeholder="Email" name="email">
                </div>
                <div class="col-md-4 py-3 py-md-0">
                    <input type="number" class="form-control form-control" placeholder="Phone" name="contact">
                </div>
                <div class="form-group" style="margin-top: 30px;">
                    <textarea class="form-control" id="" rows="5" placeholder="Message" name="msg"></textarea>
                </div>
                <div id="messagebtn" class="text-center"><button name="addfeed">Add Feedback</button></div>
            </form>
        </div>
    </div>
    <!-- contact -->









    <!-- footer -->
    <footer id="footer" style="margin-top: 50px;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 footer-content">
                        <h3>Fashion</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus, hic?</p>
                        <p>
                            Karcahi <br>
                            Sindh <br>
                            Pakistan <br>
                        </p>
                        <strong><i class="fas fa-phone"></i> Phone: <strong>+000000000000000</strong></strong><br>
                        <strong><i class="fa-solid fa-envelope"></i> Email: <strong>example@gmail.com</strong></strong>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Usefull Links</h4>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Privacy policay</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi, rem!</p>
                        <ul>
                            <li><a href="#">Smart phone</a></li>
                            <li><a href="#">Smart watch</a></li>
                            <li><a href="#">Airpods</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Network</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem, ad?</p>
                        <div class="socail-links mt-3">
                            <a href="#" class="twiiter"><i class="fa-brands fa-twitter"></i></a>
                            <a href="#" class="twiiter"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#" class="twiiter"><i class="fa-brands fa-google-plus"></i></a>
                            <a href="#" class="twiiter"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#" class="twiiter"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="container py-4">
            <div class="copyright">
                &copy; Copyright <strong>Online Shop</strong>.All Rights Reserved
            </div>
            <div class="credits">
                Designed By <a href="#">Aptech Students</a>
            </div>
        </div>
    </footer>
    <!-- footer -->

    <a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>