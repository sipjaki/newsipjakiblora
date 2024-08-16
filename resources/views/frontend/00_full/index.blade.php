@include('frontend.00_atas.header')


{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}

<section id="sec-0">
    
    @include('frontend.00_atas.header1')
    
        <header>
<div class="container" style="z-index: 9999">
    @include('frontend.00_atas.header2_navbar')
    </div>        
            
        </header>
    
{{-- ======================================================================================================================= --}}
{{-- ======================================================================================================================= --}}
   



    <!-- Main News Slider Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                  
                    @foreach ($data as $item )
                        
                    
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <a href="/portalberita/{{ $item->judul}}">
                            <img class="img-fluid h-100" src="{{$item->gambar}}" style="object-fit: cover;">
                        
                        </a>
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="/portalberita/{{ $item->judul}}">News</a>
                                {{-- <a class="text-white" href="">Jan 01, 2045</a> --}}
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" style="font-size: 24px;" href="/portalberita/{{ $item->judul}}">{{ $item->judul }}</a>
                        </div>
                    </div>
                    
                    
                    @endforeach
                    


                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    @foreach ($data->slice(-4) as $item)
        
                        <div class="col-md-6 px-0">
                            <a href="/portalberita/{{$item->judul}}">

                                <div class="position-relative overflow-hidden" style="height: 250px;">
                                    <img class="img-fluid w-100 h-100" src="{{$item->gambar}}" style="object-fit: cover;">
                                    <div class="overlay">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="/portalberita/{{$item->judul}}">News</a>
                                        {{-- <a class="text-white" href=""><small>Jan 01, 2045</small></a> --}}
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/portalberita/{{$item->judul}}">{{ $item->judul }}</a>
                                </div>
                            </a>

                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <a href="">
                        <div class="d-flex justify-content-between">
                            <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">News</div>
                            <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            @foreach ($data as $item)
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="">{{$item->judul}}</a></div>
                            @endforeach
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">Layanan Kami</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">


                @foreach ( $data_layanankami as $item )
                    
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{$item->gambar}}" style="object-fit: cover; padding:10px;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="">{{ $item->program}}</a> <br>
                            <a class="text-white" href=""><small>{{ $item->keterangan}}</small></a>
                        </div>
                        {{-- <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a> --}}
                    </div>
                </div>
                
                @endforeach

                
            </div>
                    <!-- Popular News Start -->
                    <div class="mb-3 mt-4">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">KEGIATAN SERTIFIKASI JASA KONSTRUKSI </h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            
                            @foreach ($data_kegiatanjaskon as $item )
                                
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Pemerintah Kabupaten Bandung Barat</a>
                                        <a class="text-body" href=""><small><span style="color: #000000">{{$item->tanggal}}</span></small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">{{ $item->judul_kegiatan}}</a>
                                </div>
                            </div>
                            
                            @endforeach
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Comming Soon</a>
                                        {{-- <a class="text-body" href=""><small>Jan 01, 2045</small></a> --}}
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">PELATIHAN BIMBINGAN TEKNIS .... </a>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <!-- Popular News End -->


        </div>
        
    </div>


    <br><br><br>
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    {{-- <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Latest News</h4>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="/assets/portalberita/img/news-700x435-1.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="/assets/portalberita/img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="/assets/portalberita/img/news-700x435-2.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                    <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                        rebum clita rebum dolor stet amet justo</p>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="/assets/portalberita/img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="/assets/portalberita/img/ads-728x90.png" alt=""></a>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="/assets/portalberita/img/news-700x435-3.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="/assets/portalberita/img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="/assets/portalberita/img/news-700x435-4.jpg" style="object-fit: cover;">
                                <div class="bg-white border border-top-0 p-4">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                            href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h4 d-block mb-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                                <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                                    <div class="d-flex align-items-center">
                                        <img class="rounded-circle mr-2" src="/assets/portalberita/img/user.jpg" width="25" height="25" alt="">
                                        <small>John Doe</small>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                        <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-2.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-3.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-4.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="/assets/portalberita/img/ads-728x90.png" alt=""></a>
                        </div>
                        <div class="col-lg-12">
                            <div class="row news-lg mx-0 mb-3">
                                <div class="col-md-6 h-100 px-0">
                                    <img class="img-fluid h-100" src="/assets/portalberita/img/news-700x435-5.jpg" style="object-fit: cover;">
                                </div>
                                <div class="col-md-6 d-flex flex-column border bg-white h-100 px-0">
                                    <div class="mt-auto p-4">
                                        <div class="mb-2">
                                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                                href="">Business</a>
                                            <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                        </div>
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                        <p class="m-0">Dolor lorem eos dolor duo et eirmod sea. Dolor sit magna
                                            rebum clita rebum dolor stet amet justo</p>
                                    </div>
                                    <div class="d-flex justify-content-between bg-white border-top mt-auto p-4">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle mr-2" src="/assets/portalberita/img/user.jpg" width="25" height="25" alt="">
                                            <small>John Doe</small>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <small class="ml-3"><i class="far fa-eye mr-2"></i>12345</small>
                                            <small class="ml-3"><i class="far fa-comment mr-2"></i>123</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-2.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-3.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-4.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                                <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Fans</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                                <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                                <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Connects</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                                <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                                <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Subscribers</span>
                            </a>
                            <a href="" class="d-block w-100 text-white text-decoration-none" style="background: #055570;">
                                <i class="fab fa-vimeo-v text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                                <span class="font-weight-medium">12,345 Followers</span>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Ads Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Advertisement</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <a href=""><img class="img-fluid" src="/assets/portalberita/img/news-800x500-2.jpg" alt=""></a>
                        </div>
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-2.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-3.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-4.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="/assets/portalberita/img/news-110x110-5.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Business</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">Lorem ipsum dolor sit amet elit...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Popular News End --> --}}

                    <!-- Newsletter Start -->
                    {{-- <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                        </div>
                        <div class="bg-white text-center border border-top-0 p-3">
                            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                            <div class="input-group mb-2" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                                </div>
                            </div>
                            <small>Lorem ipsum dolor sit amet elit</small>
                        </div>
                    </div> --}}
                    <!-- Newsletter End -->

                    <!-- Tags Start -->
                    {{-- <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tags</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                            <div class="d-flex flex-wrap m-n1">
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Politics</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Corporate</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Health</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Education</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Science</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Business</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Foods</a>
                                <a href="" class="btn btn-sm btn-outline-secondary m-1">Travel</a>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Tags End -->

                    
                </div>
            </div>
        
        </div>

    </div>
    <!-- News With Sidebar End -->
    <!-- News With Sidebar End -->
{{-- ================================================================================================================================= --}}
{{-- ================================================================================================================================= --}}
{{-- ================================================================================================================================= --}}
        
        
        
    </section>


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}



  <section class="service-style-three pb-70" id="sec-7">
                        
      <div class="container">
        <h2 style="
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 20px;
    text-transform: uppercase;
    text-align: center;
    border: 2px solid black;
    padding: 10px;
    border-radius: 25px;
    width: 500px;
    margin-left: 325px;
    background: linear-gradient(to right, #f0f0f0, #e0e0e0);
    transition: background 0.5s ease, color 0.5s ease;
" onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow )'; this.style.color='white';">

Layanan Jasa Konstruksi <i class="fas fa-arrow down"></i>
</h2>


        <div class="row">

            <div class="col-lg-4 col-sm-6">
                <div class="service-card text-center">
                    <div class="service-img urban">
                    </div>
                    <div class="service-content">
                        <img src="/assets/bahan2/img/s1.svg"/>
                            <h3>Infrastruktur Perkotaan</h3>
                            <p style="color: darkgreen; text-align: justify;">
                                Infrastruktur perkotaan adalah sistem dan fasilitas dasar yang mendukung kehidupan di kota, termasuk transportasi, listrik, air, sanitasi, kesehatan, pendidikan, dan layanan publik lainnya. Ini memastikan kota berfungsi dengan baik dan meningkatkan kualitas hidup penduduk.
                            </p>
                            
                            <a href="/404" style="
                            font-family: 'Lato', sans-serif;
                            font-weight: 700;
                            font-size: 12px;
                            color: #333;
                            margin-bottom: 20px;
                            text-transform: uppercase;
                            text-align: center;
                            border: 2px solid black;
                            padding: 5px 15px;
                            border-radius: 25px;
                            width: 500px;
                            background: linear-gradient(to right, #f0f0f0, #e0e0e0);
                            transition: background 0.5s ease, color 0.5s ease;
                        " onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow )'; this.style.color='white';">
                                Read More
                            </a>
                            </div>
                        </div>
                        </div>
                
                
            <div class="col-lg-4 col-sm-6">
                <div class="service-card text-center">
                   <div class="service-img road">            
                    </div>
                    <div class="service-content">
                    <img src="/assets/bahan2/img/s2.svg"/>
                                <h3>Infrastruktur Jalan</h3>
                                <p style="color: darkgreen; text-align: justify;">
                                    Infrastruktur jalan mencakup jalan, jalan tol, jembatan, dan terowongan yang mendukung mobilitas dan perdagangan. Ini meningkatkan efisiensi transportasi, mengurangi kemacetan, meningkatkan keselamatan, dan mendukung pertumbuhan ekonomi serta kesejahteraan masyarakat.
                                </p>
                                <a href="/404" style="
                                font-family: 'Lato', sans-serif;
                                font-weight: 700;
                                font-size: 12px;
                                color: #333;
                                margin-bottom: 20px;
                                text-transform: uppercase;
                                text-align: center;
                                border: 2px solid black;
                                padding: 5px 15px;
                                border-radius: 25px;
                                width: 500px;
                                background: linear-gradient(to right, #f0f0f0, #e0e0e0);
                                transition: background 0.5s ease, color 0.5s ease;
                            " onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow )'; this.style.color='white';">
                                    Read More
                                </a>
                                </div>
                                </div>
                                </div>

            <div class="col-lg-4 col-sm-6">
               <div class="service-card text-center">
                    <div class="service-img industrial">
                    </div>
                    
                    <div class="service-content">
                        <img src="/assets/bahan2/img/s3.svg"/>
                        <h3>Infrastruktur Industri</h3>
                        <p style="color: darkgreen; text-align: justify;">
                            Infrastruktur industri mencakup pabrik, gudang, jalur distribusi, dan fasilitas produksi yang mendukung manufaktur dan logistik. Ini penting untuk efisiensi operasional, peningkatan produktivitas, dan mendukung pertumbuhan ekonomi serta daya saing industri.
                        </p>
                        <a href="/404" style="
                        font-family: 'Lato', sans-serif;
                        font-weight: 700;
                        font-size: 12px;
                        color: #333;
                        margin-bottom: 20px;
                        text-transform: uppercase;
                        text-align: center;
                        border: 2px solid black;
                        padding: 5px 15px;
                        border-radius: 25px;
                        width: 500px;
                        background: linear-gradient(to right, #f0f0f0, #e0e0e0);
                        transition: background 0.5s ease, color 0.5s ease;
                    " onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow )'; this.style.color='white';">
                            Read More
                        </a>
                        </div>
                        </div>
                        </div>
    
    
            <div class="col-lg-4 col-sm-6">
                <div class="service-card text-center">
                    <div class="service-img construction">
                    </div>
                        <div class="service-content">
                      <img src="/assets/bahan2/img/s4.svg"/>
                        <h3>Teknik Konstruksi</h3>
                        <p style="color: darkgreen; text-align: justify;" >
                            Teknik konstruksi mencakup perencanaan, desain, dan pengelolaan proyek pembangunan infrastruktur. Ini melibatkan penggunaan teknologi dan metodologi untuk memastikan konstruksi yang efisien, aman, dan sesuai spesifikasi, mendukung pertumbuhan ekonomi dan pembangunan berkelanjutan.
                        </p>
                        <a href="/404" style="
                        font-family: 'Lato', sans-serif;
                        font-weight: 700;
                        font-size: 12px;
                        color: #333;
                        margin-bottom: 20px;
                        text-transform: uppercase;
                        text-align: center;
                        border: 2px solid black;
                        padding: 5px 15px;
                        border-radius: 25px;
                        width: 500px;
                        background: linear-gradient(to right, #f0f0f0, #e0e0e0);
                        transition: background 0.5s ease, color 0.5s ease;
                    " onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0 )'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow )'; this.style.color='white';">
                            Read More
                        </a>
                        </div>
                        </div>
                        </div>


            <div class="col-lg-4 col-sm-6">
                <div class="service-card text-center">
                    <div class="service-img structure">
                    </div>
                            <div class="service-content">
                            <img src="/assets/bahan2/img/s5.svg"/>
                            <h3>Teknik Struktur</h3>
                            <p style="color: darkgreen; text-align: justify;">
                                Teknik struktur mencakup perencanaan, analisis, dan desain struktur bangunan seperti gedung dan jembatan. Ini berkaitan dengan aspek kekuatan, stabilitas, dan keselamatan, yang krusial untuk memastikan kehandalan dan keberlanjutan konstruksi infrastruktur yang mendukung kehidupan sehari-hari dan pertumbuhan ekonomi masyarakat.
                            </p>
                            
                            <a href="/404" style="
                            font-family: 'Lato', sans-serif;
                            font-weight: 700;
                            font-size: 12px;
                            color: #333;
                            margin-bottom: 20px;
                            text-transform: uppercase;
                            text-align: center;
                            border: 2px solid black;
                            padding: 5px 15px;
                            border-radius: 25px;
                            width: 500px;
                            background: linear-gradient(to right, #f0f0f0, #e0e0e0);
                            transition: background 0.5s ease, color 0.5s ease;
                        " onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0 )'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow)'; this.style.color='white';">
                                Read More
                            </a>
                            </div>
                            </div>
                            </div>                        
                            
            <div class="col-lg-4 col-sm-6">
                    <div class="service-card text-center">
                    <div class="service-img water">
                    </div>
                    <div class="service-content">
                    <img src="/assets/bahan2/img/s6.svg"/>
                    <h3>Teknik Rekayasa Air & Limbah</h3>
                    <p style="color: darkgreen; text-align: justify;">
                        Teknik Rekayasa Air & Limbah mencakup perencanaan, desain, dan manajemen sistem air bersih dan limbah. Fokusnya adalah penggunaan teknologi untuk pengolahan air dan pengelolaan limbah, yang krusial untuk mendukung kehidupan sehat dan lingkungan yang berkelanjutan dalam masyarakat dan industri.
                    </p>

                      <a href="/404" style="
                            font-family: 'Lato', sans-serif;
                            font-weight: 700;
                            font-size: 12px;
                            color: #333;
                            margin-bottom: 20px;
                            text-transform: uppercase;
                            text-align: center;
                            border: 2px solid black;
                            padding: 5px 15px;
                            border-radius: 25px;
                            width: 500px;
                            background: linear-gradient(to right, #f0f0f0, #e0e0e0);
                            transition: background 0.5s ease, color 0.5s ease;
                        " onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow)'; this.style.color='white';">
                                Read More
                            </a>

                    </div>
                    </div>
                    </div>
                    </div>
                    </div>
    </section>
        
    {{-- ------------------------------------------------------------------------------ --}}
    {{-- ------------------------------------------------------------------------------ --}}
    {{-- ------------------------------------------------------------------------------ --}}

    {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
{{-- 
    <section class="facilities-section">
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-5 offset-lg-1 p-0">
    <div class="facililties-text pt-100 pb-70">
    <div class="section-title">
    {{-- <span>Fasilitas Layanan</span> --}}
    {{-- <h2>Faslilitas Layanan Konstruksi</h2>
    <p>
        Fasilitas layanan konstruksi mencakup perencanaan, desain, pembangunan, dan pemeliharaan bangunan serta infrastruktur, memastikan proyek selesai tepat waktu, sesuai anggaran, dan memenuhi standar kualitas serta keselamatan.
        </div>
    <ul>
    <li>Kontraktor</li>
    <li>Konsultan Perencana</li>
    <li>Konsultan Desain</li>
    <li>Manajemen Proyek</li>
    <li>Pengawas Konstruksi</li>
    <li>Penyedia Material</li>
    <li>Penyedia Peralatan</li>
    <li>Tenaga Kerja</li>
    <li>Layanan Inspeksi Lapangan</li>
    <li>Pemeliharaan dan Perbaikan</li>
    </ul>
    <div style="margin-top: 25px;" >
    
        <a href="/404" style="
        font-family: 'Lato', sans-serif;
        font-weight: 700;
        font-size: 14px;
        color: #333;
        margin-bottom: 20px;
        text-transform: uppercase;
        text-align: center;
        border: 2px solid black;
        padding: 5px 15px;
        border-radius: 25px;
        width: 500px;
        background: linear-gradient(to right, #f0f0f0, #e0e0e0);
        transition: background 0.5s ease, color 0.5s ease;
    " onmouseover="this.style.background='linear-gradient(to right, black, yellow)'; this.style.color='white';" onmouseout="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='#333';">
            <i class="fas fa-phone me-2"></i> Contact Us
        </a>
    </div>
    </div>
    </div>
    <div class="col-lg-6 p-0">
    <div class="facilities-img">
    </div>
    </div>
    </div>
    </div>
    </section> --}}
  --}}
    
{{-- --------------------------------------------------------------------------- --}}
{{-- --------------------------------------------------------------------------- --}}
{{-- --------------------------------------------------------------------------- --}}


{{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}

{{-- 
    <section id="sec-1">
        <div class="container">
            <article>
                <h1>Welcome to our company</h1>
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate deserunt magni sint mollitia similique corporis quis voluptatibus, eos tempora ealias illo nemo excepturi blanditiis vitae impedit minus tempore praesentium harum. <br><br>Quis, temporibus dolorum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit maxime minima quod eius aspernatur. Accusantium sed sunt corrupti sapiente deleniti?</p>
                <a href="#">Show More</a>
            </article>
            <aside><img src="/assets/bahan1/Images/img1.png" alt="man"></aside>
        </div>
    </section>
    <section id="sec-2">
        <div class="container">
            <h1> why choose us?</h1>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ducimus, voluptatibus perferendis voluptates quidem magni illo odit velit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, expedita tenetur? Pariatur itaque eveniet nam possimus omnis veniam cupiditate provident.</P>
            <article>
                <figure>
                    <div><img src="/assets/bahan1/Images/ico1.png" alt=""></div>
                    <div class="cont">
                        <h2>we deliver quality</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A iste ad illum, ducimus asperiores necessitatibus reprehenderit?</p>
                    </div>
                </figure>
                <figure>
                    <div><img src="/assets/bahan1/Images/ico2.png" alt=""></div>
                    <div class="cont">
                        <h2>Always on time</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A iste ad illum, ducimus asperiores necessitatibus reprehenderit?</p>
                    </div>
                </figure>
                <figure>
                    <div><img src="./assets/bahan1/Images/ico3.png" alt=""></div>
                    <div class="cont">
                        <h2>we are passionate</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A iste ad illum, ducimus asperiores necessitatibus reprehenderit?</p>
                    </div>
                </figure>
                <figure>
                    <div><img src="/assets/bahan1/Images/ico4.png" alt=""></div>
                    <div class="cont">
                        <h2>proffesional services</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A iste ad illum, ducimus asperiores necessitatibus reprehenderit?</p>
                    </div>
                </figure>
            </article>
        </div>
    </section>
    <section id="sec-3">
        <div class="container">
            <h1>our services</h1>
            <div class="cont">
                <div class="card border-0">
                    <div>
                        <img src="/assets/bahan1/Images/card1.jpg" class="card-img-top" alt="...">
                        <h5 class="caption">Construction Management</h5>
                    </div>
                    <div class="card-body px-0 pt-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum expedita tempora quam omnis deleniti!(word break with hyphen test) jjjjjjjjjjjjjjjjjjhuyiouuioiuojjjjjjjjjjj54455555788uiyuuihjhhjhjh Consequuntur, distinctio magnam beatae dignissimos assumenda quisquam accusamus similique aut esse pariatur consectetur ab adipisci cupiditate sint maxime dolorum doloremque autem quasi nostrum nobis dicta? Sit ipsum enim sint quos quod nulla consequuntur amet voluptates. Voluptate cum facilis libero rem veritatis?</p>
                    <a href="#">Show More</a>
                    </div>
                </div>
                <div class="card border-0">
                    <div>
                        <img src="/assets/bahan1/Images/card2.jpg" class="card-img-top" alt="...">
                        <h5 class="caption">Renovation</h5>
                    </div>
                    <div class="card-body px-0 pt-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum expedita tempora quam omnis deleniti!(word break with hyphen test) jjjjjjjjjjjjjjjjjjhuyiouuioiuojjjjjjjjjjj54455555788uiyuuihjhhjhjh Consequuntur, distinctio magnam beatae dignissimos assumenda quisquam accusamus similique aut esse pariatur consectetur ab adipisci cupiditate sint maxime dolorum doloremque autem quasi nostrum nobis dicta? Sit ipsum enim sint quos quod nulla consequuntur amet voluptates. Voluptate cum facilis libero rem veritatis?</p>
                    <a href="#">Show More</a>
                    </div>
                </div>
                <div class="card border-0">
                    <div>
                        <img src="/assets/bahan1/Images/card3.jpg" class="card-img-top" alt="...">
                        <h5 class="caption">Architectuure</h5>
                    </div>
                    <div class="card-body px-0 pt-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum expedita tempora quam omnis deleniti!(word break with hyphen test) jjjjjjjjjjjjjjjjjjhuyiouuioiuojjjjjjjjjjj54455555788uiyuuihjhhjhjh Consequuntur, distinctio magnam beatae dignissimos assumenda quisquam accusamus similique aut esse pariatur consectetur ab adipisci cupiditate sint maxime dolorum doloremque autem quasi nostrum nobis dicta? Sit ipsum enim sint quos quod nulla consequuntur amet voluptates. Voluptate cum facilis libero rem veritatis?</p>
                    <a href="#">Show More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="sec-4">
        <div class="container">
            <h1>made with love</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni reiciendis accusamus autem tenetur vero, facilis omnis, ullam quis mollitia deleniti ea similique laboriosam numquam ab dignissimos! Ducimus, eveniet at. A debitis eum tenetur dolor magni.</p>
            <div class="filter">
                <a href="#">Show all</a>
                <a href="#">buildings</a>
                <a href="#">interior design</a>
                <a href="#">isolation</a>
                <a href="#">plumping</a>
            </div>
            <div class="cont">
                <img class="wow animated fadeIn slow" src="/assets/bahan1/Images/gallery1.jpg" alt="pic">
                <aside>
                    <img src="/assets/bahan1/Images/gallery3.jpg" alt="pic" class="wow animated flipInX delay-1s">
                    <img src="/assets/bahan1/Images/gallery2.jpg" alt="pic" class="wow animated flipInX delay-1s slower">
                    <img src="/assets/bahan1/Images/gallery4.jpg" alt="pic" class="wow animated flipInX delay-2s">
                    <img src="/assets/bahan1/Images/gallery5.jpg" alt="pic" class="wow animated flipInX delay-2s slower">
                </aside>    
            </div>
        </div>
    </section> --}}
    
{{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}

  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}

     <section id="sec-5">
        <div class="container">
            <h1 style="
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 20px;
            text-transform: uppercase;
            text-align: center;
            border: 2px solid black;
            padding: 10px;
            border-radius: 25px;
            width: 500px;
            margin-left: 325px;
            background: linear-gradient(to right, #f0f0f0, #e0e0e0);
            transition: background 0.5s ease, color 0.5s ease;
        " onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow )'; this.style.color='white';">
        
        Himbauan Dinas Terkait</h1>
            <p>
                Kami informasikan bahwa Sistem Informasi Pembina Jasa Konstruksi kini tersedia untuk memudahkan akses informasi terkait jasa konstruksi. Sistem ini menyediakan data terpercaya, regulasi terbaru, dan informasi penting lainnya mengenai layanan konstruksi. Silakan kunjungi platform ini untuk mendapatkan informasi yang Anda butuhkan dan memastikan kepatuhan terhadap peraturan yang berlaku.
                <div class="cont">
                <article class="quoteblock">
                    <div class="quotetxt arrow">
                        <p><img src="/assets/bahan1/Images/blockquote2.png" alt="Bupati Bandung Barat"></p>
                        {{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius ipsum id inventore facilis laboriosam est possimus explicabo quis ipsa, perferendis nam ratiendus neque earum iure maxime non soluta voluptates deleniti provident! Commodi, eveniet?</p> --}}
                    </div>
                    <figure>
                        {{-- <img class="customer" src="/assets/bahan1/Images/cust1.png" alt="customer1"> --}}
                        <figcaption>Bupati Bandung Barat</figcaption>
                    </figure>
                </article>
                <article class="quoteblock">
                    <div class="quotetxt arrow">
                        <p><img src="/assets/bahan1/Images/blockquote1.png" alt="PUPR Bandung Barat"></p>
                        {{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius ipsum id inventore facilis laboriosam est possimus explicabo quis ipsa, perferendis nam ratiendus neque earum iure maxime non soluta voluptates deleniti provident! Commodi, eveniet?</p> --}}
                    </div>
                    <figure>
                        {{-- <img class="customer" src="/assets/bahan1/Images/cust1.png" alt="customer1"> --}}
                        <figcaption>PUPR Bandung Barat</figcaption>
                    </figure>
                </article>
                <article class="quoteblock">
                    <div class="quotetxt arrow">
                        <p><img src="/assets/bahan1/Images/blockquote2.png" alt="quote mark"></p>
                        {{-- <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius ipsum id inventore facilis laboriosam est possimus explicabo quis ipsa, perferendis nam ratiendus neque earum iure maxime non soluta voluptates deleniti provident! Commodi, eveniet?</p> --}}
                    </div>
                    <figure>
                        {{-- <img class="customer" src="/assets/bahan1/Images/cust1.png" alt="customer1"> --}}
                        <figcaption>PUTR Bandung Barat</figcaption>
                    </figure>
                </article>
            </div>
        </div>

        <div class="contactUs" style="background-color: #FFCB0F; height: 60vh; margin-bottom: 0px;">
            <div class="container" >
            {{-- <div class="container"> --}}
                <aside>
                    <h1 style="
                    font-family: 'Lato', sans-serif;
                    font-weight: 700;
                    font-size: 18px;
                    color: #333;
                    margin-bottom: 20px;
                    text-transform: uppercase;
                    text-align: center;
                    border: 2px solid black;
                    padding: 5px;
                    border-radius: 25px;

                    transition: background 0.5s ease, color 0.5s ease;
                " onmouseover="this.style.background='linear-gradient(to right, black, yellow)'; this.style.color='white';" onmouseout="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='#333';">Informasi Lebih Lanjut <i class="fas fa-arrow-right ml-2"></i></h1>
                    <h2 style="
                    font-family: 'Lato', sans-serif;
                    font-weight: 700;
                    font-size: 1.5rem;
                    color: #333;
                    margin-bottom: 20px;
                    text-transform: uppercase;
                    text-align: center;
                    padding: 5px;
                    border-radius: 25px;
                        ">
                        <img src="assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px; padding: 0;">
                        Q&A Jasa Konstruksi <br> Hub Kami</h2>
                        <p style="
                        font-family: 'Lato', sans-serif;
                        font-weight: 700;
                        font-size: 14px;
                        color: #333;
                        margin-bottom: 20px;
                        text-transform: uppercase;
                        text-align: center;
                        padding: 5px;
                        border-radius: 25px;
                            "> Dinas Pekerjaan Umum dan Penataan Ruang <br>
                            Pemerintah Kabupaten Bandung Barat </p>
                </aside>

                <form id="form" action="/" method="">
                    <input type="text" name="nama_lengkap" id="" placeholder="Nama Lengkap" required 
                    style="font-family: 'Lato', sans-serif;
                        font-size: 14px; 
                        padding: 10px 10px ;
                        border: 1px solid #1a237e; 
                        border-radius: 15px; 
                        width: 40%; 
                        height: 20%; 
                        color: black;"
                    >
                    <input type="text" name="email" id="" placeholder="Email" required 
                    style="font-family: 'Lato', sans-serif;
                        font-size: 14px; 
                        padding: 10px 10px ;
                        border: 1px solid #1a237e; 
                        border-radius: 15px; 
                        width: 40%; 
                        height: 20%; 
                        color: black;"
                    >
                    <input type="text" name="telepon" id="" placeholder="Telepon" required 
                    style="font-family: 'Lato', sans-serif;
                        font-size: 14px; 
                        padding: 10px 10px ;
                        border: 1px solid #1a237e; 
                        border-radius: 15px;
                        margin-top: 0px; 
                        width: 40%; 
                        height: 20%; 
                        color: black;"
                    >
                        <style>
                        .custom-select {
                            font-family: 'Lato', sans-serif;
                            font-size: 14px; 
                            padding: 10px;
                            border: 1px solid #1a237e; 
                            border-radius: 15px;
                            margin-bottom: 10px; 
                            width: 300px;
                            height: 50px; 
                            color: black;
                            background-color: white;
                        }
                        .custom-select:hover {
                            background-color: white;
                            color: black;
                        }
                        </style>            
                            
                            <select name="sebagai" class="custom-select" required style="width: 100%;">
                                    <option value="" disabled selected>Anda Sebagai</option>
                                    <option value="kontraktor">Kontraktor</option>
                                    <option value="pengawas">Pengawas</option>
                                    <option value="tenaga-ahli">Tenaga Ahli</option>
                                    <option value="dinas-terkait">Dinas Terkait</option>
                                    <option value="masyarakat-umum">Masyarakat Umum</option>
                                </select>
        
                            <select name="sebagai" class="custom-select" required style="width: 100%;">
                                    <option value="" disabled selected>Jenis Q&A Pertanyaan Anda</option>
                                    <option value="kontraktor">Sertifikat Laik Fungsi</option>
                                    <option value="pengawas">Persetujuan Bangunan Gedung</option>
                                    <option value="tenaga-ahli">Pelatihan</option>
                                    </select>
        
                
                    <button type="submit" style="
                        font-family: 'Lato', sans-serif;
                        font-size: 14px; 
                        padding: 10px;
                        border: 1px solid #1a237e; 
                        border-radius: 15px;
                        margin-top: 0px; 
                        width: 200px; 
                        height: 20%; 
                        color: white;
                        background-image: linear-gradient(to bottom, #FFCB0F, #000000);
                        transition: background-color 0.3s, color 0.3s; /* Efek transisi untuk halus */
                        " 
                        placeholder="" required
                        onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, #FFCB0F )'; this.style.color='white';">
                            <i class="fab fa-telegram me-2"></i> Send QA
                    
                                    </form>
            </div>
        </div>
        

    </section> 

    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}





@include('frontend.00_atas.footer1')

    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
@include('frontend.00_atas.footer2')