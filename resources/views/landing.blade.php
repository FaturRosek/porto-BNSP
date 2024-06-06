<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fanovo Store</title>
    <link rel="shortcut icon" href="./assets/images/logo.png" type="image/svg+xml" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&family=Open+Sans&display=swap"
        rel="stylesheet" />
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}
</head>

<body>
    <header class="header" data-header>
        <div class="container">
            <div class="overlay" data-overlay></div>

            <a href="#" class="logo">
                <img src="./assets/images/logo2.png" alt="logo" class="logo-img" />
            </a>
            <nav class="navbar" data-navbar>
                <ul class="navbar-list">
                    <li>
                        <a href="#home" class="navbar-link" data-nav-link>Home</a>
                    </li>
                    <li>
                        <a href="#list-laptop" class="navbar-link" data-nav-link>Produk</a>
                    </li>
                    <li>
                        <a href="#footer" class="navbar-link" data-nav-link>Contact us</a>
                    </li>
                </ul>
            </nav>

            <div class="header-actions">
                <a href="{{ url('/login') }}" class="btn" aria-labelledby="aria-label-txt">
                    <ion-icon name="person-outline"></ion-icon>
                    <span id="aria-label-txt">Login</span>
                </a>

                <button class="nav-toggle-btn" data-nav-toggle-btn aria-label="Toggle Menu">
                    <span class="one"></span>
                    <span class="two"></span>
                    <span class="three"></span>
                </button>
            </div>
        </div>
    </header>

    <main>
        <article>
            <section class="section hero" id="home">
                <div class="container">
                    <div class="hero-content">
                        <h2 class="h1 hero-title">Fanovo Store</h2>

                        <p class="hero-text">
                            Enjoy shopping in this marketplace!
                        </p>
                    </div>
                    <div class="hero-banner"></div>

                </div>
            </section>
            <section class="section featured-car" id="list-laptop">
                <div class="container">
                    <div class="title-wrapper">
                        <h2 class="h2 section-title">List Laptop</h2>
                    </div>

                    <ul class="featured-car-list">
                        <li>
                            <div class="featured-car-card">
                                <figure class="card-banner">
                                    <img src="./assets/images/car-1.jpg" alt="Toyota RAV4 2021" loading="lazy"
                                        width="440" height="300" class="w-100" />
                                </figure>

                                <div class="card-content">
                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">Toyota RAV4</a>
                                        </h3>

                                        <data class="year" value="2021">2021</data>
                                    </div>

                                    <ul class="card-list">
                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 People</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Hybrid</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">6.1km / 1-litre</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">Automatic</span>
                                        </li>
                                    </ul>

                                    <div class="card-price-wrapper">
                                        <p class="card-price"><strong>$440</strong> / month</p>

                                        <button class="btn fav-btn" aria-label="Add to favourite list">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn">Rent now</button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="featured-car-card">
                                <figure class="card-banner">
                                    <img src="./assets/images/car-2.jpg" alt="BMW 3 Series 2019" loading="lazy"
                                        width="440" height="300" class="w-100" />
                                </figure>

                                <div class="card-content">
                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">BMW 3 Series</a>
                                        </h3>

                                        <data class="year" value="2019">2019</data>
                                    </div>

                                    <ul class="card-list">
                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 People</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Gasoline</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">8.2km / 1-litre</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">Automatic</span>
                                        </li>
                                    </ul>

                                    <div class="card-price-wrapper">
                                        <p class="card-price"><strong>$350</strong> / month</p>

                                        <button class="btn fav-btn" aria-label="Add to favourite list">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn">Rent now</button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="featured-car-card">
                                <figure class="card-banner">
                                    <img src="./assets/images/car-3.jpg" alt="Volkswagen T-Cross 2020" loading="lazy"
                                        width="440" height="300" class="w-100" />
                                </figure>

                                <div class="card-content">
                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">Volkswagen T-Cross</a>
                                        </h3>

                                        <data class="year" value="2020">2020</data>
                                    </div>

                                    <ul class="card-list">
                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 People</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Gasoline</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">5.3km / 1-litre</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">Automatic</span>
                                        </li>
                                    </ul>

                                    <div class="card-price-wrapper">
                                        <p class="card-price"><strong>$400</strong> / month</p>

                                        <button class="btn fav-btn" aria-label="Add to favourite list">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn">Rent now</button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="featured-car-card">
                                <figure class="card-banner">
                                    <img src="./assets/images/car-4.jpg" alt="Cadillac Escalade 2020" loading="lazy"
                                        width="440" height="300" class="w-100" />
                                </figure>

                                <div class="card-content">
                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">Cadillac Escalade</a>
                                        </h3>

                                        <data class="year" value="2020">2020</data>
                                    </div>

                                    <ul class="card-list">
                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 People</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Gasoline</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">7.7km / 1-litre</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">Automatic</span>
                                        </li>
                                    </ul>

                                    <div class="card-price-wrapper">
                                        <p class="card-price"><strong>$620</strong> / month</p>

                                        <button class="btn fav-btn" aria-label="Add to favourite list">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn">Rent now</button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="featured-car-card">
                                <figure class="card-banner">
                                    <img src="./assets/images/car-5.jpg" alt="BMW 4 Series GTI 2021" loading="lazy"
                                        width="440" height="300" class="w-100" />
                                </figure>

                                <div class="card-content">
                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">BMW 4 Series GTI</a>
                                        </h3>

                                        <data class="year" value="2021">2021</data>
                                    </div>

                                    <ul class="card-list">
                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 People</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Gasoline</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">7.6km / 1-litre</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">Automatic</span>
                                        </li>
                                    </ul>

                                    <div class="card-price-wrapper">
                                        <p class="card-price"><strong>$530</strong> / month</p>

                                        <button class="btn fav-btn" aria-label="Add to favourite list">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn">Rent now</button>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="featured-car-card">
                                <figure class="card-banner">
                                    <img src="./assets/images/car-6.jpg" alt="BMW 4 Series 2019" loading="lazy"
                                        width="440" height="300" class="w-100" />
                                </figure>

                                <div class="card-content">
                                    <div class="card-title-wrapper">
                                        <h3 class="h3 card-title">
                                            <a href="#">BMW 4 Series</a>
                                        </h3>

                                        <data class="year" value="2019">2019</data>
                                    </div>

                                    <ul class="card-list">
                                        <li class="card-list-item">
                                            <ion-icon name="people-outline"></ion-icon>

                                            <span class="card-item-text">4 People</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="flash-outline"></ion-icon>

                                            <span class="card-item-text">Gasoline</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="speedometer-outline"></ion-icon>

                                            <span class="card-item-text">7.2km / 1-litre</span>
                                        </li>

                                        <li class="card-list-item">
                                            <ion-icon name="hardware-chip-outline"></ion-icon>

                                            <span class="card-item-text">Automatic</span>
                                        </li>
                                    </ul>

                                    <div class="card-price-wrapper">
                                        <p class="card-price"><strong>$490</strong> / month</p>

                                        <button class="btn fav-btn" aria-label="Add to favourite list">
                                            <ion-icon name="heart-outline"></ion-icon>
                                        </button>

                                        <button class="btn">Rent now</button>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </article>
    </main>

    <!--
    - #FOOTER
  -->

    <footer class="footer" id="footer">
        <div class="container">

            <div class="footer-bottom">
                <ul class="social-list">
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="https://www.instagram.com/rs_ftr" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-skype"></ion-icon>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="mail-outline"></ion-icon>
                        </a>
                    </li>
                </ul>

                <p class="copyright">
                    &copy; 2024 <a href="#">FaturRs</a>. All Rights Reserved
                </p>
            </div>
        </div>
    </footer>

    <!--
    - custom js link
  -->
    <script src="./assets/js/script.js"></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
