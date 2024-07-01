<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Event UMKM</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/logo3.jpg')}}" rel="icon">
  <link href="{{asset('assets/img/logo3.jpg')}}" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

  <style>
    .portfolio-item {
        position: relative;
        overflow: hidden; /* Ensure overflow is hidden to contain absolute positioned overlay */
    }

    .portfolio-image-wrapper {
        position: relative;
    }

    .portfolio-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.25); /* Black overlay with 25% opacity */
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
        box-sizing: border-box;
    }

    .portfolio-overlay h5 {
        color: #fff;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .portfolio-overlay p {
        color: #fff;
        font-size: 16px;
        margin-bottom: 0;
    }

    .portfolio-item:hover .portfolio-overlay {
        opacity: 1;
    }

  </style>

  <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
</head>

<body class="antialiased">
  <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
      @if (Route::has('login'))
          <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
              @auth
                  <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
              @else
                  <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                  @endif
              @endauth
          </div>
      @endif

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Event UMKM</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('login') }}" class="">Login</a></li>
          <li><a href="{{ route('register') }}">Register</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>



    </div>
  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">

        <div class="container" id="login">
        <div class="row gy-4">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
            <h1 class="" >Selamat Datang Sobat UMKM</h1>
            <p class="">Tidak hanya event, ini adalah pengalaman</p>
            <div class="d-flex">
              <a href="#about" class="btn-get-started">Get Started</a>
              <a href="https://youtu.be/Opksxsx8Sjw?si=_VC7S_Qhmo-mnNZT" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
            </div>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
            <img src="{{asset('assets/img/animasi2.png')}}" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- Clients Section -->
    <section id="clients" class="clients section">

      <div class="container" data-aos="zoom-in">

        <div class="swiper">
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
                  "slidesPerView": 5,
                  "spaceBetween": 120
                },
                "1200": {
                  "slidesPerView": 6,
                  "spaceBetween": 120
                }
              }
            }
          </script>
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-1.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-2.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-3.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-4.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-5.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-6.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-7.png')}}" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="{{asset('assets/img/clients/client-8.png')}}" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>

    </section><!-- /Clients Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 class="">About Us</h2>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              UMKM merupakan singkatan dari Usaha Mikro, Kecil, dan Menengah.
              Pada dasarnya, UMKM adalah arti usaha atau bisnis yang dilakukan oleh individu, kelompok, badan usaha kecil, maupun rumah tangga.
              Indonesia sebagai negara berkembang menjadikan UMKM sebagai pondasi utama sektor perekonomian masyarakat,
              hal ini dilakukan untuk mendorong kemampuan kemandirian dalam berkembang pada masyarakat khsusunya dalam sektor ekonomi.
              UMKM yang ada di Indonesia beragam dan memiliki khasnya masing-masing.
              Berikut ini adalah beberapa contoh bidang dalam UMKM:
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>UMKM juga berperan dalam perluasan kesempatan kerja.
              Seiring dengan terus meningkatnya angka penduduk di Indonesia,
              UMKM menjadi salah satu solusi dalam meningkatkan kualitas individu.
              Selain dapat menyerap tenaga kerja,
              UMKM bisa menjadi pendorong bagi masyarakat lain untuk ikut bersaing sehingga menciptakan usaha dan peluang baru bagi masyarakat lain. </p>
            <a href="https://www.gramedia.com/literasi/umkm/" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="section why-us" data-builder="section">

      <div class="container-fluid">

        <div class="row gy-4">

          <div class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1">

            <div class="content px-xl-5" data-aos="fade-up" data-aos-delay="100">
              <h3 class=""><span class="">Contoh </span><strong>UMKM Yang ada di Indonesia</strong></h3>
              <p class="">
                Berikut ini adalah beberapa contoh bidang dalam UMKM:
              </p>
            </div>

            <div class="faq-container px-xl-5" data-aos="fade-up" data-aos-delay="200">

              <div class="faq-item faq-active">

                <h3><span>01</span> UMKM Bidang Kuliner</h3>
                <div class="faq-content">
                  <p>Usaha di bidang kuliner memang tidak ada habisnya,
                    kita bisa berkreasi dengan berbagai macam ide untuk mengembangkan bisnis tersebut.
                    Begitu pula dengan UMKM, banyak sekali jenis UMKM dalam bidang kuliner.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>02</span> UMKM Bidang Kecantikan</h3>
                <div class="faq-content">
                  <p>Kosmetik adalah salah satu yang sangat diperlukan,
                    tidak hanya berkaitan dengan make up.
                    Namun juga skincare yang sangat dibutuhkan oleh masyarakat.
                    Saat ini, banyak muncul jenis-jenis kosmetik yang merupakan UMKM.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>03</span>UMKM Bidang Fashion</h3>
                <div class="faq-content">
                  <p>Bidang fashion juga selalu berkembang mengikuti trend atau zamannya.
                    Pakaian adalah barang yang sangat dibutuhkan oleh masyarakat,
                    sehingga bisnis jual beli pakaian selalu ramai.
                    Oleh karena itu, banyak sekali UMKM yang membuka usaha pakaian rumahan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>04</span> UMKM Bidang Agribisnis</h3>
                <div class="faq-content">
                  <p>Beberapa waktu ini banyak sekali masyarakat yang tertarik dengan bidang agribisnis.
                    Salah satu contohnya yaitu dengan tanaman hias,
                    banyak sekali masyarakat yang mulai mencari tanaman hias untuk koleksi. </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span>05</span>UMKM Bidang Otomotif</h3>
                <div class="faq-content">
                  <p>Meskipun terlihat sulit, tetapi kini sudah banyak UMKM yang menjajal dunia otomotif.
                    Tidak selalu mengenai mesin, usaha-usaha yang banyak dirintis UMKM di bidang ini seperti bengkel,
                    tempat pencucian motor atau mobil, rental mobil atau motor, sampai usaha jual beli barang-barang yang dibutuhkan oleh kendaraan.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div>

            </div>

          </div>

          <div class="col-lg-5 order-1 order-lg-2 why-us-img">
            <img src="{{asset('assets/img/pilihan_naya-removebg-preview.png')}}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>
        </div>

      </div>

    </section><!-- /Why Us Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">

      <img src="{{asset('assets/img/UmkM-Indonesia.webp')}}" alt="">



    </section><!-- /Call To Action Section -->

    <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Gallery</h2>
            <p></p>
        </div><!-- End Section Title -->

        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-2024">2024</li>
                    <li data-filter=".filter-2023">2023</li>
                    <li data-filter=".filter-2022">2022</li>
                </ul><!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($events as $event)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ date('Y', strtotime($event->created_at)) }}">
                            <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid" alt="" style="width: 100%; height: 200px; object-fit: cover;" data-bs-toggle="modal" data-bs-target="#imageModal{{ $event->id }}">
                            <div class="portfolio-info">
                                <h5>{{ $event->title }}</h5>
                                <p>More Details:</p>
                                <a href="{{ asset('storage/' . $event->image) }}" title="{{ $event->title }}" data-gallery="portfolio-gallery-{{ date('Y', strtotime($event->created_at)) }}" class="glightbox preview-link"></a>
                                <a href="#" target="_blank" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="modal fade" id="imageModal{{ $event->id }}" tabindex="-1" aria-labelledby="imageModalLabel{{ $event->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="imageModalLabel{{ $event->id }}">{{ $event->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="{{ asset('storage/' . $event->image) }}" class="img-fluid" alt="{{ $event->title }}">
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{ $event->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Modal -->
                    @endforeach
                </div><!-- End Portfolio Container -->
            </div>
        </div>
    </section><!-- /Portfolio Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Quotes</h2>
        <p></p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper">
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
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('assets/img/testimonials/nadiem.jpg')}}" class="testimonial-img" alt="">
                <h3>Nadiem Makarim</h3>
                <h4>Menteri Pendidikan, Kebudayaan, Riset dan Teknologi Indonesia</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Dalam bisnis, Kecepatan adalah kunci. jangan takut untuk bergerak cepat dan mengambil peluang yang ada di depan mata.</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('assets/img/testimonials/uno.jpg')}}" class="testimonial-img" alt="">
                <h3>Sandiaga Uno</h3>
                <h4>Menteri Pariwisata dan Ekonomi Kreatif</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Cara menyingkirkan kendala awal adalah Terus Optimis, Pantang menyerah & Selalu bersyukur</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="{{asset('assets/img/testimonials/aling.jpg')}}" class="testimonial-img" alt="">
                <h3>Aling Nur Naluri</h3>
                <h4>Wirausaha</h4>
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Menjalankan sebuah bisnis itu sangat bagus, Tapi ada yang lebih bagus daripada sekedar menjalankan bisnis yaitu menjadikan bisnis menjadi bisnis yang bermanfaat bagi banyak orang. <b>yang lebih keren dari hebat adalah bermanfaat</b></span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->
  </section><!-- /Why Us Section -->


  <!-- Services Section -->
  <section id="services" class="services section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Benefit</h2>
    </div><!-- End Section Title -->

    <div class="container">

      <div class="row gy-4">

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-activity icon"></i></div>
            <h4>Mengenalkan produk</h4>
            <p>Event merupakan salah satu metode pemasaran yang cukup efektif. Bagaimana tidak? melalui event, kamu bisa memperkenalkan produk yang kamu buat kepada calon konsumen lebih luas.</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-bounding-box-circles icon"></i></div>
            <h4>Memperluas Relasi & Mitra</h4>
            <p>Sebuah Event biasanya juga akan mengundang pihak yang mendukung perkembangan bisnis. Para umkm dapat memanfaatkan peluang tersebut untuk memperluas relasi, menemukan mitra bisnis untuk mengembangkan usaha para umkm.
            </p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
            <h4>Mencari Investor</h4>
            <p>Event juga menjadi kesempatan untuk mendapatkan investor. Tak jarang para pebisnis besar yang ingin menginvestasikan uangnya, mencari produk atau jenis usaha yang menarik di Event</p>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon"><i class="bi bi-broadcast icon"></i></div>
            <h4>Evaluasi Produk</h4>
            <p>kamu bisa mencari tahu apa saja kelebihan dan kekurangan produkmu di mata konsumen. Setelah mengetahui kelebihan dan kekurangan produkmu, kamu bisa melakukan inovasi produk dan bisa menentukan strategi bisnis baru.</p>
          </div>
        </div><!-- End Service Item -->

      </div>

    </div>

  </section><!-- /Services Section -->



    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>TUNGGU APA LAGI?</h2>
        <p></p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center"> <!-- Center the content within the row -->
            <div class="col-lg-7">
                    <div class="row gy-4">
                        <div class="col-md-15">

                        <div class="col-md-12 text-center">

                            <a href="#login" class="php-email-form" data-aos="fade-up" data-aos-delay="200"><button type="submit">Get Started</button></a>
                        </div>
                    </div>
                </form>
            </div><!-- End Contact Form -->
        </div>
    </div>


        </div>

      </div>

    </section><!-- /Contact Section -->
  </main>


  <footer id="footer" class="footer">



    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">PKL 2024</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">..</a>
      </div>
    </div>

  </footer>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modals = document.querySelectorAll('.modal');
        modals.forEach(function (modal) {
            modal.addEventListener('show.bs.modal', function (event) {
                var modalTrigger = event.relatedTarget;
                var eventId = modalTrigger.getAttribute('data-id');
                // Optionally load details via AJAX if needed
            });
        });
    });
</script>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
  <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>


</body>

</html>
