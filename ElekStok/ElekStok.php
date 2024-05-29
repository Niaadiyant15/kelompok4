<?php
    session_start();

    if(isset($_SESSION['Username'])) {
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>ElekStok.</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="Assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="webstyles.css" rel="stylesheet" />
    <!-- Alpine.Js-->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script defer src="jawaskrip.js"></script>
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">ElekStok</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Halaman Utama</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
                    <li class="nav-item"><a class="nav-link" href="keranjang_belanja.php"> BAYAR</a></li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <a href="keranjang_belanja.php">
                            <i class="bi-cart-fill me-1"></i>
                            Keranjang
                            <span class="badge bg-dark text-white ms-1 rounded-pill" id="cart-count">0</span>
                        </a>
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Toko ElekStok</h1>
                <p class="lead fw-normal text-white-50 mb-0">Selamat Datang, <?php echo $_SESSION['Username']?>! <br> Silakan Berbelanja, Be Smart Buyer.</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5" id="Product">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="Assets/photos/1.png" style="width: 450; height: 300;" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Laptop ROG Scar</h5>
                                <!-- Product price-->
                                Rp. 36,000.000
                            </div>
                        </div>
                        
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a onclick="increaseCartCount()" class="btn btn-outline-dark mt-auto" href="#">Masukkan Keranjang</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Dijual</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="Assets/photos/2.jpg" style="width: 450; height: 300;" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Laptop Asus Notebook V15</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">Rp 12,000.000</span>
                                2,000.000
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a onclick="increaseCartCount()" class="btn btn-outline-dark mt-auto" href="#">Diskon Habis Habisan!</a></div>
                        </div>
                    </div>
                </div>
                <!-- Add more product cards similarly -->
            </div>
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="Assets/photos/3.jpg" style="width: 450; height: 300;" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mouse Logitech</h5>
                                    <!-- Product price-->
                                    Rp. 100,000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a onclick="increaseCartCount()" class="btn btn-outline-dark mt-auto" href="#">Masukkan Keranjang</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="Assets/photos/4.jpg" style="width: 450; height: 300;" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mi Band Gen 4</h5>
                                    <!-- Product reviews-->
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        
                                    </div>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">Rp 13,000.000</span>
                                    Rp200,000
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a onclick="increaseCartCount()" class="btn btn-outline-dark mt-auto" href="#">Diskon Habis Habisan!</a></div>
                            </div>
                        </div>
                    </div>
        </div>
    </section>
    
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Kelompok 4 2024</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>
</php>

<?php
    }
    else
    {
        header("Location: index.php");
        exit();
    }
?>