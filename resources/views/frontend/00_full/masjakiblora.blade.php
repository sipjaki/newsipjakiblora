@include('frontend.00_masjakibloraweb.header')

<body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
  <!-- ! Start Header -->
  
  @include('frontend.00_masjakibloraweb.menunavbar')

  <!-- ! End Header -->
  <!-- ! Start Landing -->
  <main>
   

    <div class="breadcrumbs sticked-header-offset" style="background: url(/assets/masjakiblora/images/bangunanblora.jfif) center left;" >
      <div class="page-header d-flex align-items-center">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <img src="/assets/icon/pupr.png" alt="Technoit" class="img-fluid" style="margin-right:5px; width:12%;">
              <img src="/assets/icon/logokabupatenblora.png" alt="Technoit" class="img-fluid" style="width:12%; margin-right:7px;">
              {{-- <h2 data-aos="fade-up" data-aos-delay="300">Our Blogs</h2> --}} <br>
              <p style="color: black;" data-aos="fade-up" data-aos-delay="400">Dinas Pekerjaan Umum dan Penataan Ruang <br> Pemerintah Kabupaten Blora Provinsi Jawa Tengah </p>
            </div>
          </div>
        </div>
      </div>

      <nav aria-label="breadcrumb" style="background:#09ff00d7 ">
        <div class="container">
          <ol class="breadcrumb" data-aos-delay="700">
            <li class="breadcrumb-item Home">
              <a href="/" style="color: black">
                <marquee style="width: 100%;" behavior="scroll" direction="center" scrollamount="12" scrolldelay="0">
                  Selamat Datang di Mas Jaki DPUPR Kabupaten Blora | Sistem Informasi Pembina Jasa Konstruksi Kabupaten Blora
                </marquee>
              </a>
              
            </li>
          </ol>
        </div>
      </nav>
    </div>
      
     

    <div class="blogs" id="blogs">
      <div class="header" data-aos="fade-up" data-aos-delay="100">
        <div class="title" style="color: green">Berita Jasa Konstruksi Kab Blora </div>
        {{-- <p class="para">Lorem ipsum dolor sit amet</p> --}}
      </div>
      <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">
          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="container">
              <div class="row">
                <!-- Card 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                      <img src="/assets/masjakiblora/images/blog-1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <p>Berita 1</p>
                      <p class="card-text">How to host website on any hosting provider?</p>
                      <p>William Bla</p>
                      <p>Feb 1, 2022</p>
                    </div>
                  </div>
                </div>
                <!-- Card 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                      <img src="/assets/masjakiblora/images/blog-1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <p>Berita 2</p>
                      <p class="card-text">How to host website on any hosting provider?</p>
                      <p>William Bla</p>
                      <p>Feb 1, 2022</p>
                    </div>
                  </div>
                </div>
                <!-- Card 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                      <img src="/assets/masjakiblora/images/blog-1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <p>Berita 3</p>
                      <p class="card-text">How to host website on any hosting provider?</p>
                      <p>William Bla</p>
                      <p>Feb 1, 2022</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="container">
              <div class="row">
                <!-- Card 4 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                      <img src="/assets/masjakiblora/images/blog-1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <p>Berita 4</p>
                      <p class="card-text">How to host website on any hosting provider?</p>
                      <p>William Bla</p>
                      <p>Feb 1, 2022</p>
                    </div>
                  </div>
                </div>
                <!-- Card 5 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                      <img src="/assets/masjakiblora/images/blog-1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <p>Berita 5</p>
                      <p class="card-text">How to host website on any hosting provider?</p>
                      <p>William Bla</p>
                      <p>Feb 1, 2022</p>
                    </div>
                  </div>
                </div>
                <!-- Card 6 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                  <div class="card" data-aos="fade-up" data-aos-delay="100">
                    <div class="box">
                      <img src="/assets/masjakiblora/images/blog-1.jpg" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                      <p>Berita 6</p>
                      <p class="card-text">How to host website on any hosting provider?</p>
                      <p>William Bla</p>
                      <p>Feb 1, 2022</p>
                    </div>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      
        <!-- Carousel controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
      
    </div>
    <!-- ! Start Services -->
    {{-- <div class="services py-5" id="services">
      <div class="container">
        <div data-aos="fade-up" data-aos-delay="100">
          <img src="/assets/masjakiblora/images/service-design.svg" alt="">
          <h4>Application Design</h4>
          <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="200">
          <img src="/assets/masjakiblora/images/service-hosting.svg" alt="">
          <h4>Web Hosting</h4>
          <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="500">
          <img src="/assets/masjakiblora/images/service-social.svg" alt="">
          <h4>Social Media</h4>
          <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="100">
          <img src="/assets/masjakiblora/images/service-seo.svg" alt="">
          <h4>SEO Optimization</h4>
          <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="200">
          <img src="/assets/masjakiblora/images/service-cloud.svg" alt="">
          <h4>Cloud Server</h4>
          <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
        <div data-aos="fade-up" data-aos-delay="500">
          <img src="/assets/masjakiblora/images/service-secure.svg" alt="">
          <h4>Data Security</h4>
          <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div> --}}
    <!-- ! End Services -->
    <!-- ! Start About Us -->
    {{-- <div class="about-us" id="about-us">
      <div class="header" data-aos="fade-up" data-aos-delay="100">
        <div class="title">Why Choose Us</div>
        <p class="para">Lorem ipsum dolor sit amet</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-12 left">
            <div class="row">
              <div class="col-lg-12 box" data-aos="fade-up" data-aos-delay="100">
                <div class="text">
                  <h4>Experience</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <img src="/assets/masjakiblora/images/icon-1.svg" alt="">
              </div>
              <div class="col-lg-12 box" data-aos="fade-up" data-aos-delay="400">
                <div class="text">
                  <h4>Products</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <img src="/assets/masjakiblora/images/icon-2.svg" alt="">
              </div>
              <div class="col-lg-12 box" data-aos="fade-up" data-aos-delay="500">
                <div class="text">
                  <h4>Approach</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
                <img src="/assets/masjakiblora/images/icon-3.svg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 center">
            <div class="row">
              <div class="col-lg-4 col-sm-12" data-aos="fade-up" data-aos-delay="500">
                <img src="/assets/masjakiblora/images/features.jpg" alt="" class="middle">
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12 right">
            <div class="row">
              <div class="col-lg-12 box" data-aos="fade-up" data-aos-delay="100">
                <img src="/assets/masjakiblora/images/icon-4.svg" alt="">
                <div class="text">
                  <h4>Pricing</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
              </div>
              <div class="col-lg-12 box" data-aos="fade-up" data-aos-delay="400">
                <img src="/assets/masjakiblora/images/icon-5.svg" alt="">
                <div class="text">
                  <h4>Delivery</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
              </div>
              <div class="col-lg-12 box" data-aos="fade-up" data-aos-delay="500">
                <img src="/assets/masjakiblora/images/icon-6.svg" alt="">
                <div class="text">
                  <h4>Support</h4>
                  <p>Ronsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- ! End About Us -->
    <!-- ! Start Protfolio -->
    {{-- <div class="protofolio" id="protofolio">
      <div class="header" data-aos="fade-up" data-aos-delay="100">
        <div class="title">Our Protfolio</div>
        <p class="para">Lorem ipsum dolor sit amet</p>
      </div>
      <div class="container" data-aos="fade-up" data-portfolio-filter="*" data-portfolio-layout="masonry"
        data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">
        <div class="buttons">
          <button type="button" data-cat="all" class="btn btn-primary rounded-5 rounded-end active">All</button>
          <button type="button" data-cat="app-des" class="btn btn-primary rounded-0">Design</button>
          <button type="button" data-cat="app-dev" class="btn btn-primary rounded-0">Development</button>
          <button type="button" data-cat="brand" class="btn btn-primary rounded-0">Branding</button>
          <button type="button" data-cat="it-sol" class="btn btn-primary rounded-5 rounded-start">It</button>
        </div>
        <div class="photos">
          <div class="container">
            <div class="photo all app-des" data-aos="fade-up" data-aos-delay="100">
              <img src="/assets/masjakiblora/images/product-1.jpg" alt="">
            </div>
            <div class="photo all app-dev" data-aos="fade-up" data-aos-delay="200">
              <img src="/assets/masjakiblora/images/product-2.jpg" alt="">
            </div>
            <div class="photo all brand" data-aos="fade-up" data-aos-delay="400">
              <img src="/assets/masjakiblora/images/product-3.jpg" alt="">
            </div>
            <div class="photo all it-sol" data-aos="fade-up" data-aos-delay="100">
              <img src="/assets/masjakiblora/images/product-4.jpg" alt="">
            </div>
            <div class="photo all app-des" data-aos="fade-up" data-aos-delay="200">
              <img src="/assets/masjakiblora/images/product-5.jpg" alt="">
            </div>
            <div class="photo all brand" data-aos="fade-up" data-aos-delay="500">
              <img src="/assets/masjakiblora/images/product-6.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    <!-- ! End Protfolio -->

    <!-- ! Start Testimonials -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="header" data-aos="fade-up" data-aos-delay="100">
          <div class="title" style="color: green">Himbauan Dinas Terkait</div>
          {{-- <button type="submit" class="btn btn-success rounded-pill"><span style="color:white; font-size:16px;">Himbauan Dinas Terkait</span></button> --}}

<p style="color: black;">Dinas PUPR Blora mengimbau pelaku usaha jasa konstruksi untuk memanfaatkan Sistem Informasi Pembina Jasa Konstruksi sebagai sumber utama informasi regulasi, pembinaan, dan pemantauan proyek. Sistem ini mendukung transparansi dan efisiensi dalam pengelolaan data jasa konstruksi sesuai peraturan yang berlaku.</p>
        </div>
        <div class="swiper slides-3 swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden"
          data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper" aria-live="off"
            style="transform: translate3d(-3904px, 0px, 0px); transition-duration: 0ms;">
            <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" role="group"
              aria-label="4 / 4" style="width: 936px; margin-right: 40px;" data-swiper-slide-index="3">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="/assets/masjakiblora/images/testimonial-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Fizzi Brandon</h3>
                      <h4>Freelancer</h4>
                      <div class="stars">
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="fa-solid fa-quote-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <!-- Testimonial Item 1 -->
            <div class="swiper-slide swiper-slide-duplicate-next" role="group" aria-label="1 / 4"
              style="width: 936px; margin-right: 40px;" data-swiper-slide-index="0">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="/assets/masjakiblora/images/testimonial-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Jhone Doe</h3>
                      <h4>CFO</h4>
                      <div class="stars">
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled far fa-star"></i>
                        <i class="filled far fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="fa-solid fa-quote-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <!-- Testimonial Item 2 -->
            <div class="swiper-slide" role="group" aria-label="2 / 4" style="width: 936px; margin-right: 40px;"
              data-swiper-slide-index="1">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="/assets/masjakiblora/images/testimonial-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Afa Rose</h3>
                      <h4>Web Designer</h4>
                      <div class="stars">
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled far fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="fa-solid fa-quote-right"></i>
                  </p>
                </div>
              </div>
            </div>

            <!-- Testimonial Item 3 -->
            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="3 / 4"
              style="width: 936px; margin-right: 40px;" data-swiper-slide-index="2">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <div class="d-flex align-items-center info-box">
                    <img src="/assets/masjakiblora/images/testimonial-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                    <div>
                      <h3>Keena Lara</h3>
                      <h4>Store Owner</h4>
                      <div class="stars">
                        <i class="filled fas fa-star"></i>
                        <i class="filled fas fa-star"></i>
                        <i class="filled far fa-star"></i>
                        <i class="filled far fa-star"></i>
                        <i class="filled far fa-star"></i>
                      </div>
                    </div>
                  </div>
                  <p>
                    <i class="fa-solid fa-quote-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus.
                    Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam.
                    <i class="fa-solid fa-quote-right"></i>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ! End Testimonials -->
    <!-- ! Start Status -->
    <div class="status" style="background: url(/assets/masjakiblora/images/hero-bg.jpg) center left;">
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-sm-12 box">
            <img src="/assets/masjakiblora/images/complete-projects.svg" alt="">
            <span class="number" data-prog="232">0
            </span>
            {{-- <h4>Pelatihan</h4> --}}
            <p>Jumlah Pelatihan Pekerja</p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 box">
            <img src="/assets/masjakiblora/images/complete-projects.svg" alt="">
            <span class="number" data-prog="521">0
            </span>
            {{-- <h4>Bimbingan Teknis</h4> --}}
            <p>Jumlah Bimbingan Teknis Pekerja</p>
          </div>
          <div class="col-lg-4 col-md-6 col-sm-12 box">
            <img src="/assets/masjakiblora/images/complete-projects.svg" alt="">
            <span class="number" data-prog="453">0
            </span>
            {{-- <h4>Hours Of Support</h4> --}}
            <p>Jumlah Workshop Pekerja</p>
          </div>
        </div>
      </div>
    </div>
    <!-- ! End Status -->
    
    <!-- ! Start Team -->
    <div class="team" id="team">
      <div class="header" data-aos="fade-up" data-aos-delay="100">
        <div class="title" style="color: green">Dinas Pekerjaan Umum & Penataan Ruang Pemerintah Kab Blora</div>
        {{-- <p class="para">Lorem ipsum dolor sit amet</p> --}}
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-12 box" data-aos="fade-up">
            <img src="/assets/masjakiblora/images/team-1.jpg" alt="">
            <h5>Jhone Bi</h5>
            <p>Application Manager</p>
            {{-- <div class="social" data-aos="fade-up" data-aos-delay="400">
              <a href="https://github.com/GziXnine" target="_blank"><i class="fa-brands fa-github"></i></a>
              <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.linkedin.com/in/1ahmed-allam/" target="_blank"><i
                  class="fa-brands fa-linkedin"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div> --}}
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 box" data-aos="fade-up">
            <img src="/assets/masjakiblora/images/team-2.jpg" alt="">
            <h5>Sani Awesome</h5>
            <p>Social Media</p>
            {{-- <div class="social" data-aos="fade-up" data-aos-delay="400">
              <a href="https://github.com/GziXnine" target="_blank"><i class="fa-brands fa-github"></i></a>
              <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.linkedin.com/in/1ahmed-allam/" target="_blank"><i
                  class="fa-brands fa-linkedin"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div> --}}
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 box" data-aos="fade-up">
            <img src="/assets/masjakiblora/images/team-3.jpg" alt="">
            <h5>Andrio Willi</h5>
            <p>Content Writer</p>
            {{-- <div class="social" data-aos="fade-up" data-aos-delay="400">
              <a href="https://github.com/GziXnine" target="_blank"><i class="fa-brands fa-github"></i></a>
              <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.linkedin.com/in/1ahmed-allam/" target="_blank"><i
                  class="fa-brands fa-linkedin"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div> --}}
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 box" data-aos="fade-up">
            <img src="/assets/masjakiblora/images/team-4.jpg" alt="">
            <h5>Afa Jonson</h5>
            <p>Business Manager</p>
            {{-- <div class="social" data-aos="fade-up" data-aos-delay="400">
              <a href="https://github.com/GziXnine" target="_blank"><i class="fa-brands fa-github"></i></a>
              <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
              <a href="https://www.linkedin.com/in/1ahmed-allam/" target="_blank"><i
                  class="fa-brands fa-linkedin"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
    <!-- ! End Team -->
    
    <!-- ! Start Discuss -->
    <div class="discuss" style="background: url(/assets/masjakiblora/images/hero-bg.jpg) center left;">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h3>Pendaftaran Sertifikasi Tenaga Ahli</h3>
        <p>
          Pendaftaran Sertifikasi Tenaga Ahli Kabupaten Blora adalah sistem pendaftaran bagi warga Kabupaten Blora yang ingin mendapatkan sertifikat keahlian di bidang tertentu. Peserta hanya perlu mengisi formulir, mengunggah dokumen, dan memberikan informasi tentang keahlian yang dimiliki. Sertifikasi ini bertujuan untuk meningkatkan kualitas tenaga kerja di Kabupaten Blora dan memberikan pengakuan resmi atas kemampuan yang dimiliki.
        </p>
        <a href="/">
        <button type="submit" class="btn btn-success rounded-pill"><i class="fas fa-users mr-2" style="margin-right: 5px"></i> Daftar</button>
      </a>
      </div>
    </div>
    <!-- ! End Discuss -->

    <!-- ! Start FAQ's -->
    <div class="faqs" id="faqs">
      <div class="header" data-aos="fade-up" data-aos-delay="100">
        <div class="title" style="color: green">FAQ's Jasa Konstruksi</div>
        <p class="para">Pertanyaan Seputar Jasa Konstruksi Pemerintah Kabupaten Blora Provinsi Jawa Tengah</p>
      </div>
      <div class="container" data-aos="fade-up">
        <div class="row gy-4">
          <div class="col-lg-12">
            <div class="accordion accordion-flush" id="faqlist">
              
              <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                    <span class="num"><i class="fa-solid fa-circle-arrow-right"></i></span>
                    Apa itu Sistem Informasi Pembina Jasa Konstruksi Pemerintah Kabupaten Blora?
                  </button>
                </h3>
                <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Sistem ini adalah platform digital yang digunakan untuk mempermudah pengelolaan dan pengawasan sektor jasa konstruksi di Kabupaten Blora, termasuk pelaksanaan proyek dan pembinaan pelaku usaha konstruksi.
                  </div>
                </div>
              </div>
      
              <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                    <span class="num"><i class="fa-solid fa-circle-arrow-right"></i></span>
                    Siapa yang dapat menggunakan sistem ini?
                  </button>
                </h3>
                <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Sistem ini dapat digunakan oleh Pemerintah Kabupaten Blora, pelaku usaha jasa konstruksi, serta masyarakat yang membutuhkan informasi terkait sektor konstruksi di daerah.
                  </div>
                </div>
              </div>
      
              <div class="accordion-item" data-aos="fade-up" data-aos-delay="500">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                    <span class="num"><i class="fa-solid fa-circle-arrow-right"></i></span>
                    Apa tujuan utama dari sistem ini?
                  </button>
                </h3>
                <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Tujuan utama sistem ini adalah untuk meningkatkan transparansi, akuntabilitas, dan efisiensi dalam pengelolaan sektor jasa konstruksi serta mendukung peningkatan kualitas proyek konstruksi di Kabupaten Blora.
                  </div>
                </div>
              </div>
      
              <div class="accordion-item" data-aos="fade-up" data-aos-delay="600">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-4">
                    <span class="num"><i class="fa-solid fa-circle-arrow-right"></i></span>
                    Bagaimana cara mendaftar sebagai pelaku usaha konstruksi?
                  </button>
                </h3>
                <div id="faq-content-4" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Pelaku usaha dapat mendaftar dengan mengunjungi situs resmi, mengisi formulir pendaftaran, dan mengunggah dokumen yang diperlukan seperti izin usaha dan sertifikat keahlian.
                  </div>
                </div>
              </div>
      
              <div class="accordion-item" data-aos="fade-up" data-aos-delay="700">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-5">
                    <span class="num"><i class="fa-solid fa-circle-arrow-right"></i></span>
                    Apakah data yang dimasukkan dalam sistem ini aman?
                  </button>
                </h3>
                <div id="faq-content-5" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Ya, sistem ini dilengkapi dengan teknologi keamanan untuk menjaga kerahasiaan dan integritas data pribadi pengguna sesuai dengan regulasi perlindungan data yang berlaku.
                  </div>
                </div>
              </div>
      
              <div class="accordion-item" data-aos="fade-up" data-aos-delay="800">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-6">
                    <span class="num"><i class="fa-solid fa-circle-arrow-right"></i></span>
                    Bagaimana cara memberikan umpan balik atau melaporkan pengaduan terkait proyek konstruksi?
                  </button>
                </h3>
                <div id="faq-content-6" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Masyarakat dan pelaku usaha dapat memberikan umpan balik atau melaporkan pengaduan melalui fitur pengaduan yang tersedia dalam sistem untuk ditindaklanjuti oleh pihak berwenang.
                  </div>
                </div>
              </div>
      
              <div class="accordion-item" data-aos="fade-up" data-aos-delay="900">
                <h3 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-7">
                    <span class="num"><i class="fa-solid fa-circle-arrow-right"></i></span>
                    Apakah sistem ini dapat diakses melalui perangkat mobile?
                  </button>
                </h3>
                <div id="faq-content-7" class="accordion-collapse collapse" data-bs-parent="#faqlist">
                  <div class="accordion-body">
                    Ya, sistem ini dapat diakses melalui perangkat mobile baik Android maupun iOS, dengan antarmuka yang memudahkan pengguna untuk mengakses berbagai fitur secara praktis.
                  </div>
                </div>
              </div>
      
            </div>
          </div>
        </div>
      </div>
      

        </div>
        </section>
      </div>
    </div>
    <!-- ! End FAQ's -->
    <!-- ! Start Blogs -->
   
    <!-- ! End Blogs -->
  </main>
  <!-- ! Start Footer -->


    @include('frontend.00_masjakibloraweb.footer1')
    @include('frontend.00_masjakibloraweb.footer')
