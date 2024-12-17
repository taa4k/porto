<!-- Hero Section -->
<section id="hero" class="hero section">

    <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 data-aos="fade-up" data-aos-delay="100">HELLO!</h2>
                <p data-aos="fade-up" data-aos-delay="200">WELCOME TO MY PERSONAL WEBSITE!</p>
                <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
                    <a href="#about" class="btn-get-started">Mari berkenalan!</a>
                    <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8"
                        class="glightbox btn-watch-video d-flex align-items-center"><i
                            class="bi bi-play-circle"></i><span>Watch Video</span></a>
                </div>

            </div>
        </div>
    </div>

</section><!-- /Hero Section -->

<!-- Clients Section -->
<section id="clients" class="clients section">

    <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
            <script type="application/json" class="swiper-config">
            {
                "loop": true,
                "speed": 600,
                "autoplay": {
                    "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                    "el": ".swiper-pagination",
                    "type": "bullets",
                    "clickable": true
                },
                "breakpoints": {
                    "320": {
                        "slidesPerView": 2,
                        "spaceBetween": 40
                    },
                    "480": {
                        "slidesPerView": 3,
                        "spaceBetween": 60
                    },
                    "640": {
                        "slidesPerView": 4,
                        "spaceBetween": 80
                    },
                    "992": {
                        "slidesPerView": 6,
                        "spaceBetween": 120
                    }
                }
            }
            </script>
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img s rc="assets/img/clients/client-2.png" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img src="assets/img/clients/client-7.png" class="img-fluid" alt="">
                </div>
                <div class="swiper-slide"><img src="assets/img/clients/client-8.png" class="img-fluid" alt="">
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </div>

</section><!-- /Clients Section -->

<!-- About Section -->
<section id="about" class="about section section-bg dark-background">

    <div class="container position-relative">

        <div class="row gy-5">

            <div class="content col-xl-5 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                <h3>MUHAMMAD ATHARIQ</h3>
                <p>
                    Halo Nama saya Muhammad Athariq biasanya di panggil Atta senang berjumpa dengan anda!
                </p>
                <a href="#" class="about-btn align-self-center align-self-xl-start"><span>About us</span> <i
                        class="bi bi-chevron-right"></i></a>
            </div>

            <div class="col-xl-7" data-aos="fade-up" data-aos-delay="200">
                <div class="row gy-4">

                    <div class="col-md-6 icon-box position-relative">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="" class="stretched-link">SEKOLAH TINGGI TEKNOLOGI DUMAI</a></h4>
                        <p>Saya berkuliah di Sekolah Tinggi Teknologi Dumai yang disingkat menjadi STT dengan jurusan
                            yang saya tekuni yaitu Teknik Informatika atau disingkat TI.
                        </p>
                    </div><!-- Icon-Box -->

                    <div class="col-md-6 icon-box position-relative">
                        <i class="bi bi-gem"></i>
                        <h4><a href="" class="stretched-link">HOBBY</a></h4>
                        <p>Hobby saya yaitu mendengarkan Musik, Bermain game dan Bermain motor.
                        </p>
                    </div><!-- Icon-Box -->

                    <div class="col-md-6 icon-box position-relative">
                        <i class="bi bi-broadcast"></i>
                        <h4><a href="" class="stretched-link">MEDIA SOSIAL</a></h4>
                        <p>Saya mempunyai media sosial loh silahkan di follow yaa!</p>
                    </div><!-- Icon-Box -->

                    <div class="col-md-6 icon-box position-relative">
                        <i class="bi bi-easel"></i>
                        <h4><a href="" class="stretched-link">WEBSITE</a></h4>
                        <p>Ini website pertama saya yang saya buat untuk mengasah skill saya dalam bidang IT ini, dan
                            kemungkinan saya akan membuat banyak website dan program di tunggu yaa!
                        </p>
                    </div><!-- Icon-Box -->

                </div>
            </div>

        </div>

    </div>

</section><!-- /About Section -->

<!-- Services Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>Ini adalah pict semua yang berkaitan dengan saya!</p>
    </div><!-- End Section Title -->

    <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">Me</li>
                <li data-filter=".filter-product">Hobby</li>
                <li data-filter=".filter-branding">Love</li>
                <li data-filter=".filter-books">Fav Song</li>
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/app-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery-app"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/product-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/portfolio/product-1.jpg" title="Product 1"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/branding-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/books-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Books 1</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/portfolio/books-1.jpg" title="Branding 1"
                                data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/app-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/product-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/portfolio/product-2.jpg" title="Product 2"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/books-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Books 2</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/portfolio/books-2.jpg" title="Branding 2"
                                data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/app-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/product-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Product 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/portfolio/product-3.jpg" title="Product 3"
                                data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Branding 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2"
                                data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                    <div class="portfolio-content h-100">
                        <img src="assets/img/portfolio/books-3.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Books 3</h4>
                            <p>Lorem ipsum, dolor sit amet consectetur</p>
                            <a href="assets/img/portfolio/books-3.jpg" title="Branding 3"
                                data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                    class="bi bi-zoom-in"></i></a>
                            <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                    class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div><!-- End Portfolio Item -->

            </div><!-- End Portfolio Container -->

        </div>

    </div>

</section><!-- /Portfolio Section -->