<header>
    <!-- Topbar / Marquee -->
    <div class="top-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="marquee L text-dark text-center smallfnt overflow-hidden p-2 font-helvetica">
                        Diwali sale is open now. Buy early for the best discounts! Happy Diwali....!!!!
                        &nbsp; <i class="bi bi-whatsapp text-success"></i> +91 9999999999
                        &nbsp; <i class="bi bi-telephone text-primary"></i> +91 8888888888, +91 7777777777
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navbar-contact -->
    <section class="nav-contact p-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 align-self-center">
                    <!-- address -->
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3 text-center text-md-right align-self-center">
                            <img src="images/location.png" alt="location icon" title="demo traders"
                                class="img-fluid nav-icons">
                        </div>
                        <div class="col-12 col-md-9 col-lg-9 text-center text-md-left">
                            <h2 class="heading4 text-red font-weight-bold ">Location</h2>
                            <h3 class="heading5">1234,Demo Street,Sivakasi</h3>
                        </div>
                    </div>
                </div>
                <!-- logo -->
                <div class="col-12 col-md-4 col-lg-4 align-self-center">
                    <a class="logo-link d-flex justify-content-center" href="index.php">
                        <img class="logo img-fluid" src="./images/logo.png" alt="Demo Traders" title="Demo Traders">
                    </a>
                </div>
                <div class="col-12 col-md-4 col-lg-4 align-self-center">
                    <!-- email & Phone -->
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3 text-center text-md-right align-self-center">
                            <img src="images/phone.png" alt="phone icon" title="demo traders"
                                class="img-fluid nav-icons">
                        </div>
                        <div class="col-12 col-md-9 col-lg-9 text-center text-md-left">
                            <h2 class="heading4 text-red font-weight-bold">Phone</h2>
                            <h3 class="heading5">+91 99999 99999</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-3 col-lg-3 text-center text-md-right align-self-center">
                            <img src="images/mail.png" alt="mail icon" title="demo traders" class="img-fluid nav-icons">
                        </div>
                        <div class="col-12 col-md-9 col-lg-9 text-center text-md-left">
                            <h2 class="heading4 text-red font-weight-bold">Mail</h2>
                            <h3 class="heading5">contact@demotraders.com</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navbar with Logo -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top text-dark bg-red">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar"
                aria-controls="myNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="bi bi-list nav-icon text-main "> Menu</span>
            </button>
            <div id="myNavbar" class="collapse navbar-collapse justify-content-center text-dark">
                <ul class="navbar-nav mx-auto text-uppercase">
                    <li class="nav-item px-2 font-weight-bold <?php if ($page == "home") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item px-2 font-weight-bold <?php if ($page == "about") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item px-2 font-weight-bold <?php if ($page == "products") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
                    <li class="nav-item px-2 font-weight-bold <?php if ($page == "safety") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="safety.php">Safety Tips</a>
                    </li>
                    <li class="nav-item px-3 font-weight-bold <?php if ($page == "contact") {
                        echo "active";
                    } ?>">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


</header>
<script src="js/jquery.min.js"></script>
<script src="js/marquee.js"></script>
<script>
    $('.L').marquee({
        duration: 16000,
        gap: 150,
        delayBeforeStart: 0,
        direction: 'left',
        duplicated: false,
        pauseOnHover: true
    });
</script>