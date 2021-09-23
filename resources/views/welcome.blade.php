<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FUJITSU ECOSYSTEM</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Vendor CSS Files -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


    @livewireStyles

    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</head>

<body>
    <!-- ======= TOP BAR ======= -->
    <section id="topbar" class="d-flex align-items-center fixed-top topbar-transparent">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div
                class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
                <a class="topcontent" href="https://apps.ts.fujitsu.com/ecosystem/public/index.aspx"
                    target="_blank"><i class="bi bi-arrow-right d-flex align-items-center"><span>Fujitsu
                            Ecosystem</span></i></a>
                <a class="topcontent" href="https://apps.ts.fujitsu.com/ecosystem/public/index.aspx"
                    target="_blank"><i class="bi bi-arrow-right ms-4 d-none d-lg-flex align-items-center"><span>Fujitsu
                            Belgium</span></i></a>
            </div>
            <div class="header-social-links d-none d-md-flex align-items-center">
                <a href="https://www.linkedin.com/company/fujitsu-belgium/" target="_blank" class="linkedin"><i
                        class="bi bi-linkedin"></i></i></a>
                <a href="https://www.instagram.com/befujitsu/" target="_blank" class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="https://twitter.com/FujitsuBelgium" target="_blank" class="twitter"><i
                        class="bi bi-twitter"></i></a>
                <a href="https://www.facebook.com/FujitsuBelgium" target="_blank" class="facebook"><i
                        class="bi bi-facebook"></i></a>
            </div>
        </div>
    </section>
    <!-- ======= HEADER ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
            <div class="logo me-auto">
                <a href="#" class="logo me-auto me-lg-0"><img src="img/LOGO.png" alt="" class="img-fluid"></a>
            </div>
            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto " href="#videos">Videos</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">News</a></li>
                    <li><a class="nav-link scrollto" href="#agenda">Agenda</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
        </div>
    </header>
    <!-- ======= HERO ======= -->
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active"
                        style="background-image: url('{{ asset('img/homeslide/slide3.png') }}');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">Find the best partners !</h2>
                                <p class="animate__animated animate__fadeInUp">Place a Challenge and solve an already
                                    identified customer problem or <br> build co-innovation solutions to deliver to the
                                    market and accelerate revenue together. </p>
                                <div>
                                    <a href="https://apps.ts.fujitsu.com/ecosystem/public/challengesearch.aspx"
                                        target="_blank"
                                        class="btn-menu animate__animated animate__fadeInUp scrollto">Create
                                        challenge</a>
                                    <a href="/download_local/?file=Fujitsu_Ecosystem.pdf" target="_blank"
                                        class="btn-menu animate__animated animate__fadeInUp scrollto">Discover
                                        Ecosystem</a>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Slide 1 -->
                    <div class="carousel-item"
                        style=" background-image: url('{{ asset('img/homeslide/slide1.jpg') }}');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">What's the Fujitsu Ecosystem Platform
                                    ?</h2>
                                <p class="animate__animated animate__fadeInUp">A changed view of collaboration: <br> Not
                                    with
                                    the vendor at the center but
                                    with equal collaboration between stakeholders to realize new market opportunities
                                </p>
                                <div>
                                    <a href="https://apps.ts.fujitsu.com/ecosystem/public/partnersearch.aspx"
                                        target="_blank"
                                        class="btn-menu animate__animated animate__fadeInUp scrollto">Search
                                        Partners</a>
                                    <a href="https://apps.ts.fujitsu.com/ecosystem/public/index.aspx" target="_blank"
                                        class="btn-book animate__animated animate__fadeInUp scrollto">Discover
                                        platform</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item"
                        style=" background-image: url('{{ asset('img/homeslide/slide2.png') }}');">
                        <div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown">What’s your superpower ?</h2>
                                <p class="animate__animated animate__fadeInUp">
                                    Unleash your superpower in Fujitsu’s Partner Ecosystem! <br> As a partner, you can
                                    share your expertise – and call on the
                                    skills of other partners worldwide to complement your capabilities</p>
                                <div>
                                    <a href="https://apps.ts.fujitsu.com/UserRegistration-Public" target="_blank"
                                        class="btn-menu animate__animated animate__fadeInUp scrollto">MY SUPERPOWER
                                        !</a>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                </a>

                <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                </a>

            </div>
        </div>
    </section>
    <main id="main">

        <!-- ======= VIDEOS ======= -->
        <section id="videos" class="portfolio">
            <div class="container">

                <div class="section-title text-center">
                    <h2>VIDEOS</h2>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center">
                    <li data-filter="*" class="filter-active">Latest</li>
                    <li data-filter=".successful-challenge">CHALLENGE</li>
                    <li data-filter=".ecosystem-general">ECOSYSTEM</li>
                    <li data-filter=".partners">Partners</li>
                </ul>

                <div class="row portfolio-container">
                    @foreach ($video as $e)
                        <div class="video portfolio-item {{ $e->category }}">
                            <div class="portfolio-info">
                                <h4>{{ $e->title }}</h4>
                                <p>{{ $e->subtitle }}</p>
                                <a href="img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox preview-link" title="App 1"><i
                                        class="bx bx-plus"></i></a>

                            </div>
                            <div class="video-container">

                                <iframe src="{{ $e->link }}">
                                </iframe>

                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </section>

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">

            <div class="container" data-aos="fade-up">

                <div class="section-title text-center">
                    <h2>NEWS</h2>
                </div>

                {{-- <ul id="testimonials-flters" class="d-flex justify-content-center">
                    <li data-filter="*" class="filter-active">Latest</li>
                    <li data-filter=".event">Event</li>
                    <li data-filter=".partners">Partner</li>
                    <li data-filter=".successful-challenge">CHALLENGE</li>
                    <li data-filter=".ecosystem-general">ECOSYSTEM</li>
                </ul> --}}


                <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="swiper-wrapper">
                        {{-- @foreach ($blog as $e)
                            <div class="swiper-slide {{ $e->category }}">
                                <div class="testimonial-item">
                                    <div class="post-box">
                                        <div class="post-img"><img src="img/{{ $e->path }}"
                                                class="img-fluid" alt=""></div>
                                        <span class="post-date">{{ $e->date }}</span>
                                        <h3 class="post-title">{{ $e->title }}</h3>
                                        <a href="{{ $e->link }}"
                                            class="readmore stretched-link mt-auto"><span>Read
                                                More</span><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach --}}

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="post-box">
                                    <div class="post-img"><img src="img/news/news1.jpg" class="img-fluid"
                                            alt=""></div>
                                    <span class="post-date">Fri, August 06</span>
                                    <h3 class="post-title">Building single point of contact solution for
                                        international law enforcement cooperation</h3>
                                    <a href="https://apps.ts.fujitsu.com/ecosystem/member/challengedetail.aspx?challenge=12" target="_blank" class="readmore stretched-link mt-auto"><span>Read
                                            More</span><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="post-box">
                                    <div class="post-img"><img src="img/news/jasnarock.jpg" class="img-fluid"
                                            alt=""></div>
                                    <span class="post-date">Fri, July 02</span>
                                    <h3 class="post-title">Fujitsu and Jasna Rok announced their new longterm
                                        partnership</h3>
                                    <a href="https://www.fujitsu.com/be/about/resources/news/press-releases/2021/fujitsu-belgium-and-jasna-rok-announce-partnership.html" target="_blank" class="readmore stretched-link mt-auto"><span>Read
                                            More</span><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="post-box">
                                    <div class="post-img"><img src="img/news/b2e.jpg" class="img-fluid"
                                            alt=""></div>
                                    <span class="post-date">Sat, August 11</span>
                                    <h3 class="post-title">A new model, “Business to Everyone” (#B2E), focuses on
                                        the needs of all people, whether if it’s employees, customers, citizens or
                                        society at large</h3>
                                    <a href="https://www.fujitsu.com/hk/vision/insights/21-the-world-at-an-inflection-point/" target="_blank" class="readmore stretched-link mt-auto"><span>Read
                                            More</span><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="post-box">
                                    <div class="post-img"><img src="img/news/incrius.png" class="img-fluid"
                                            alt=""></div>
                                    <span class="post-date">Tue, September 02</span>
                                    <h3 class="post-title">Incrius joins Partnership Ecosystem. A new SUPERPOWER !
                                    </h3>
                                    <a href="https://apps.ts.fujitsu.com/ecosystem/public/partnerdetail.aspx?partner=434225" target="_blank" class="readmore stretched-link mt-auto"><span>Read
                                            More</span><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="post-box">
                                    <div class="post-img"><img src="img/news/healthcare.jpg"
                                            class="img-fluid" alt=""></div>
                                    <span class="post-date">Fri, July 2</span>
                                    <h3 class="post-title">Work Reform for Healthcare Professionals Essential for
                                        Safe Healthcare Service</h3>
                                    <a href="https://www.fujitsu.com/jp/microsite/fujitsutransformationnews-en/2021-06-18/02/" target="_blank" class="readmore stretched-link mt-auto"><span>Read
                                            More</span><i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- End Testimonials Section -->

        <!-- ======= agenda Section ======= -->
        <section id="agenda" class="agenda">

            <div class="container">

                <div class="section-title text-center">
                    <h2>AGENDA</h2>
                </div>

                <livewire:calendar />

            </div>

        </section><!-- End agenda Section -->
        <section id="newsletter">
            <div class="newsletter-content">

                <div class="container">

                    <div class="section-title text-center">
                        <h2>NEWSLETTER</h2>
                        <h4>subscribe to our newsletter to be informed of our latest news!</h4>
                    </div>


                    <div class="row form-newsletter justify-content-center">
                        <div class="col-lg-6">
                            <form action="{{ URL('/newsletter') }}" method="post">
                                @csrf
                                <input type="email" name="email" placeholder="Enter your Email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>

                </div>
            </div>

        </section>
        <section id="about">

            <section id="who" class="who">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="section-title text-center col-lg-6 col-sm-12">
                            <h1>WHO IS<br><span style="font-size: 62px;">Fujitsu?</span></h1>
                        </div>

                        <div class="content col-lg-6 col-sm-12 text-center">

                            <p>Fujitsu is a global information and communication technology (ICT) company, offering a
                                full
                                range of
                                technology products, solutions and services worldwide</p>

                            <p>
                                Fujitsu is the No.1 IT service provider in Japan and among the largest IT Service
                                providers
                                in World.
                                Trough innovation and experience in ICT, we help shape the future of society, by
                                building
                                the data-driven
                                enterprise
                            </p>

                            <p>
                                Co-creating and collaborating to offer a complete solution to today’s challenges, that
                                is
                                the future. And
                                that future starts here.
                            </p>

                        </div>
                    </div>

                </div>
            </section>
            <section id="services" class="services">
                <div class="container">

                    <div class="row mb-4 text-center">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="ri-folder-shield-2-line"></i></div>
                                <h3 class="title">Secure/protect data and infrastructure?</h3>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon"><i class="ri-split-cells-vertical"></i></div>
                                <h3 class="title">Provide a true vertical solution?</h3>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon"><i class="ri-line-chart-fill"></i></div>
                                <h3 class="title">Analyze business directions for your customers?</h3>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon"><i class="ri-lightbulb-line"></i></div>
                                <h3 class="title">Innovate fresh approaches to old problems?</h3>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                                <div class="icon"><i class="ri-customer-service-line"></i></div>
                                <h3 class="title">Be a service champ</h3>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon"><i class="ri-upload-cloud-2-line"></i></div>
                                <h3 class="title">Offer expert advice on the cloud?</h3>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon"><i class="ri-compasses-2-fill"></i></div>
                                <h3 class="title">Design, install, manage, host, provide, or sell the right
                                    architecture?</h3>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon"><i class="ri-psychotherapy-line"></i></div>
                                <h3 class="title">Create value from data through AI capabilities?</h3>
                            </div>
                        </div>

                    </div>

                </div>
            </section>

            <section id="why" class="why">

                <div class="container">
                    <div class="row align-items-center">

                        <div class="content text-center col-9">

                            <p>Fujitsu Technology Solutions offers a place where partners can advertise their out of the
                                box, innovative
                                projects. This way you can share your unique skills and capabilities with the world.</p>
                            <p>The Fujitsu partner portal, our very own Partnership Ecosystem, works like a matching
                                service, where
                                companies showcase their capabilities and challenges in order to connect with others who
                                have
                                complementary skills.</p>
                            <p>We have a close network of over 1000 valued business partners all over Belgium of which
                                300
                                are Fujitsu
                                certified. All types of partners, Fujitsu experts and end users come together on one
                                single
                                platform.</p>
                            <p>Together we let your enterprise transform digitally. Unlock the value of your data across
                                edge, core and
                                cloud with best-in-class technology and our unique co-creation approach.</p>
                            <p>The concept is simply: community building. Become part of that community and let our
                                vision
                                power your
                                vision!</p>
                            <p>Find out more below.</p>

                        </div>
                        <div class="section-title text-center col-3">
                            <h1>WHY CHOOSE<br><span style="font-size: 62px;">Fujitsu?</span></h1>
                        </div>

                    </div>

                </div>
            </section>

        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Fujitsu</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">QforGrowth</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @livewireScripts
    @stack('scripts')

    <!-- Vendor JS Files -->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/glightbox/js/glightbox.min.js"></script>
    <script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="vendor/php-email-form/validate.js"></script>
    <script src="vendor/purecounter/purecounter.js"></script>
    <script src="vendor/swiper/swiper-bundle.min.js"></script>

    <!-- Template Main JS File -->
    <script src="js/main.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/script.js"></script>
</body>

</html>
