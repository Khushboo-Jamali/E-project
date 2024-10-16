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
  <link
    href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
    rel="stylesheet" />
  <!-- styles  -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap"
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

  <div class="home-section">
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
                <li><a class="dropdown-item" href="#">T-Shirt</a></li>
                <li><a class="dropdown-item" href="#">Hoodies</a></li>
                <li><a class="dropdown-item" href="#">Pants</a></li>
                <li><a class="dropdown-item" href="#">Soprts Shoes</a></li>
                <li><a class="dropdown-item" href="#">Smart Watch</a></li>
                <li><a class="dropdown-item" href="#">Glasess</a></li>
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


    <!-- about -->
    <div class="container" id="about">
      <h1>ABOUT US</h1>
      <div class="row" style="margin-top: 50px;">
        <div class="col-md-6 py-3 py-md-0">
          <div class="card">
            <img src="./image/about.png" alt="">
          </div>
        </div>
        <div class="col-md-6 py-3 py-md-0">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, vitae numquam aspernatur repellendus autem sint beatae, facilis quas deserunt iure natus minus ab deleniti eveniet neque quasi ullam id in alias consectetur quia nesciunt. Exercitationem vitae atque commodi architecto tenetur! Fugit necessitatibus nesciunt, eligendi tempora reprehenderit suscipit doloribus animi mollitia maiores? Numquam, est laborum dicta aperiam nobis deserunt libero non dolorem cum dolorum distinctio commodi iure, tenetur animi? Nam similique culpa consequuntur itaque quasi ipsa placeat ea perferendis est quo, ut eaque quis dolorem, aliquam iste reprehenderit provident neque magnam voluptatibus. Eaque provident omnis reiciendis ducimus, magni qui voluptatem quibusdam.</p>
        </div>
      </div>
    </div>
    <!-- about -->


    <!-- offer -->
    <div class="container" id="offer">
      <div class="row">
        <div class="col-md-4 py-3 py-md-0">
          <i class="fa-solid fa-cart-shopping"></i>
          <h5>Free Shipping</h5>
          <p>On order over $100</p>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <i class="fa-solid fa-truck"></i>
          <h5>Fast Delivery</h5>
          <p>World wide</p>
        </div>
        <div class="col-md-4 py-3 py-md-0">
          <i class="fa-solid fa-thumbs-up"></i>
          <h5>Big Choice</h5>
          <p>Of product</p>
        </div>
      </div>
    </div>
    <!-- offer -->






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
          &copy; Copyright <strong>Fashion</strong>.All Rights Reserved
        </div>
        <div class="credits">
          Designed By <a href="#">SA coding</a>
        </div>
      </div>
    </footer>
    <!-- footer -->

    <a href="#" class="arrow"><i><img src="./image/up-arrow.png" alt="" width="50px"></i></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./main.js"></script>
</body>

</html>