@extends('layouts.main')

@section('content')

<main class="main ">
    <!-- Hero Section -->
    <section id="hero" class="hero section ">
        <div class="container" id="login">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1>Welcome, {{ auth()->user()->name }}!</h1>
                    <p>More Experience! More Money!</p>
                    <a href="#portfolio" class="btn btn-light col-lg-3 p-auto font-bold rounded" style="color: darkblue">Get Started</a>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/img/Animasi6.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section><!-- /Hero Section -->


    <!-- Gallery Section -->
    <section id="portfolio" class="portfolio section mt-5">
        <div class="container section-title" data-aos="fade-up">
            <h2 id="gallery" class="mt-3">Event</h2>
        </div>
        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            @foreach($categories as $category)
                <li data-filter=".category-{{ $category->id }}">{{ $category->name }}</li>
            @endforeach
        </ul>

        <div class="container mt-5">
            <div class="row col-10 mx-auto">
                <div class="col-md-5">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            @foreach($events as $index => $event)
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
                        <div class="carousel-inner text-dark">
                            @foreach($events as $index => $event)
                                <div class="carousel-item category-{{ $event->category_id }} {{ $index == 0 ? 'active' : '' }}" data-category="category-{{ $event->category_id }}">
                                    <img src="{{ Storage::url($event->image) }}" class="d-block mx-auto carousel-image" alt="{{ $event->title }}">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-5 p-3">
                    @foreach($events as $index => $event)
                        <div class="slide-description d-flex flex-column justify-content-between category-{{ $event->category_id }} {{ $index == 0 ? 'active' : 'd-none' }}" id="slide-description-{{ $index }}">
                            <h3 class="mt-3">{{ $event->title }}</h3>
                            <p class="mt-3 event-description">{{ $event->description }}</p>
                            <div class="d-flex justify-content-center mt-3 mb-3">
                                <a href="{{ route('regis.form-registrasi', $event->id) }}" class="btn btn-primary me-2">Daftar</a>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registrationsModal{{ $event->id }}">List</button>
                            </div>
                        </div>

                        <!-- Modal for Event Registrations -->
                        <div class="modal fade" id="registrationsModal{{ $event->id }}" tabindex="-1" aria-labelledby="registrationsModalLabel{{ $event->id }}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="registrationsModalLabel{{ $event->id }}">List Yang mengikuti {{ $event->title }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>UMKM</th>
                                                    <th>Number</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($event->approvedRegistrations as $registration)
                                                    <tr>
                                                        <td>{{ $registration->name }}</td>
                                                        <td>{{ $registration->umkm }}</td>
                                                        <td>{{ $registration->number }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Modal -->
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <style>
        .carousel-image {
            max-width: 100%;
            max-height: 600px;
            object-fit: contain;
        }
        .d-none {
            display: none;
        }
    </style>

 <script>
    document.addEventListener('DOMContentLoaded', function() {
        var filterButtons = document.querySelectorAll('.portfolio-filters li');
        var carouselItems = document.querySelectorAll('.carousel-item');
        var slideDescriptions = document.querySelectorAll('.slide-description');
        var carouselIndicators = document.querySelectorAll('.carousel-indicators button');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                var filterValue = this.getAttribute('data-filter').substring(1); // get the category class
                var filterClass = filterValue === '*' ? '' : filterValue;

                // Filter carousel items and update their visibility
                var firstVisibleItem = null;
                carouselItems.forEach((item, index) => {
                    if (filterClass === '' || item.classList.contains(filterClass)) {
                        item.classList.remove('d-none');
                        if (!firstVisibleItem) firstVisibleItem = item; // Capture the first visible item
                    } else {
                        item.classList.add('d-none');
                    }
                });

                // Reset carousel to the first visible item
                if (firstVisibleItem) {
                    carouselItems.forEach(item => item.classList.remove('active'));
                    firstVisibleItem.classList.add('active');
                }

                // Filter slide descriptions
                slideDescriptions.forEach(description => {
                    if (filterClass === '' || description.classList.contains(filterClass)) {
                        description.classList.remove('d-none');
                    } else {
                        description.classList.add('d-none');
                    }
                });

                // Reset slide descriptions to the first visible one
                var firstVisibleDescription = document.querySelector('.slide-description:not(.d-none)');
                if (firstVisibleDescription) {
                    slideDescriptions.forEach(description => description.classList.remove('active'));
                    firstVisibleDescription.classList.add('active');
                }

                // Update carousel indicators visibility and active state
                var visibleIndex = 0;
                carouselIndicators.forEach((indicator, index) => {
                    if (filterClass === '' || carouselItems[index].classList.contains(filterClass)) {
                        indicator.classList.remove('d-none');
                        indicator.setAttribute('data-bs-slide-to', visibleIndex);
                        if (visibleIndex === 0) {
                            indicator.classList.add('active');
                        } else {
                            indicator.classList.remove('active');
                        }
                        visibleIndex++;
                    } else {
                        indicator.classList.add('d-none');
                    }
                });

                // Set the first visible indicator as active
                var firstVisibleIndicator = document.querySelector('.carousel-indicators button:not(.d-none)');
                if (firstVisibleIndicator) {
                    firstVisibleIndicator.classList.add('active');
                }
            });
        });

        // Trigger click on the active filter to initialize the carousel state
        document.querySelector('.portfolio-filters .filter-active').click();
    });

</script>

<section id="testimonials" class="testimonials section">
    <div class="container section-title" data-aos="fade-up">
        <h2>Rating</h2>
        <p>Other User rating</p>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($ratings as $rating)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <!-- Adjust image source and other details as per your requirement -->
                        <img src="{{asset('assets/img/profile.png')}}" class="testimonial-img" alt="">
                        <h3>{{ $rating->name }}</h3>
                        <!-- Display rating dynamically -->
                        <div class="stars">
                            @for ($i = 1; $i <= $rating->rating; $i++)
                            <i class="bi bi-star-fill"></i>
                            @endfor
                        </div>
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            <span>{{ $rating->message }}</span>
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                    </div>
                </div><!-- End swiper-slide -->
                @endforeach
            </div><!-- End swiper-wrapper -->
            <!-- Add pagination if needed -->
            <div class="swiper-pagination"></div>
            <!-- Add navigation buttons if needed -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div><!-- End swiper-container -->
    </div><!-- End container -->
</section><!-- End testimonials section -->

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });

</script>


</section>
    <!-- Contact Section -->
    <!-- Rate Section -->
<!-- Rate and Contact Section -->
<section id="rate-contact" class="contact section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Rate Us & Contact Us</h2>
      <p>Give us your feedback or get in touch with us</p>
    </div>
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4 justify-content-center">
        <div class="col-lg-7">
          <div class="row gy-4">
            <div class="col-md-6 text-center">
              <a href="{{ route('rate.create') }}" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <button type="submit">Rate Us Now</button>
              </a>
            </div>
            <div class="col-md-6 text-center">
              <a href="{{ route('lina.contact-us.create') }}" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                <button type="submit">Contact Us Now</button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /Rate and Contact Section -->


</main>

<style>
    .carousel-image {
        height: 450px;
        object-fit: cover;
    }

    .event-description {
        max-height: 100px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 4; /* number of lines to show */
        -webkit-box-orient: vertical;
    }

    .slide-description {
        height: 100%; /* Ensure the slide description takes the full height of the container */
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const descriptions = document.querySelectorAll('.slide-description');
        const carousel = new bootstrap.Carousel(document.querySelector('#carouselExampleIndicators'));

        carousel._element.addEventListener('slide.bs.carousel', function (event) {
            descriptions.forEach((desc, index) => {
                if (index === event.to) {
                    desc.classList.remove('d-none');
                } else {
                    desc.classList.add('d-none');
                }
            });
        });
    });
</script>
@endsection
