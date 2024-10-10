@include('frontend.00_atas.header')


{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}

<section id="sec-0">
    
    <div class="div" style="z-index: 9999; position: fixed;
            top: 0; left: 0; width: 100%; z-index: 9999;
            background-color: white; border-bottom: 1px solid black; 
            ">

        @include('frontend.00_atas.header1')
        <header>
            
                @include('frontend.00_atas.header2_navbar')
            
        </div>
        </header>
    
{{-- ======================================================================================================================= --}}
{{-- ======================================================================================================================= --}}


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3" style="margin-top: 165px;">
        <div class="container col-11">
                    <!-- Popular News Start -->
                    <div class="mb-3 mt-0">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">
                               <img src="/assets/icon/sipjakikbb.png" alt="/assets/icon/sipjakikbb.png" style="width: 40px;"> KEGIATAN SERTIFIKASI JASA KONSTRUKSI </h4>
                        <style>
                            /* Styling untuk tautan */
                                    .button-link {
                                        text-decoration: none; /* Menghilangkan garis bawah pada tautan */
                                    }

                                    /* Styling untuk tombol */
                                    .custom-button {
                                        background-color: #f1c40f; /* Warna latar belakang biru */
                                        border: none; /* Menghilangkan border bawaan tombol */
                                        color: black; /* Warna teks putih */
                                        padding: 5px 20px; /* Jarak dalam tombol (vertikal, horizontal) */
                                        font-size: 14px; /* Ukuran font */
                                        border-radius: 15px; /* Sudut membulat */
                                        cursor: pointer; /* Mengubah kursor saat hover */
                                        transition: background-color 0.3s ease, transform 0.3s ease; /* Efek transisi */
                                    }

                                    .custom-button:hover {
                                        background-color: #001F3F; /* Warna latar belakang saat hover */
                                        transform: scale(1.05);
                                        color: white; /* Memperbesar tombol sedikit saat hover */
                                    }

                                    .custom-button:active {
                                        background-color: #001F3F;
                                        color: white; /* Warna latar belakang saat tombol diklik */
                                    }

                        </style>
                                @foreach ($data_jaskon as $item )
                               <a href="/kegiatansertifikasi/{{$item->judul_kegiatan}}" class="button-link">
                                <button class="custom-button"><i class="fas fa-eye me-2"></i>Lihat Kegiatan</button>
                            </a>
                            
                        
                            </div>
                        <div class="bg-white border border-top-0 p-3">
                               
                            <div class="w-100 h-100 d-flex flex-column justify-content-center border border-left-0" style="margin-bottom:10px;">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2 mr-2 ml-2" href=""" ><span style="color: #000000; font-size:16px;">{{$item->judul_kegiatan}}</span></a>
                                </div>
                                <div class="mb-2">
                                    <a href="">
                                        <p class="px-3" style="color: #000000">{{$item->alamat_kegiatan}}</p>    
                                    </a>
                                    {{-- <a href=""><small><span style="color: #000000">{{$item->tanggal}}</span></small></a> --}}
                                </div>
                                {{-- <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">{{ $item->judul_kegiatan}}</a> --}}
                            </div>

                            {{-- ------------------------ --}}

                            <style>
                            .scroll-container {
                                overflow: hidden;
                                white-space: nowrap;
                                width: 100%;
                                background-color: white;
                                position: relative;
                            }
                            
                            .scrolling-content {
                                display: inline-block;
                                white-space: nowrap;
                                animation: scroll 10s linear infinite;
                            }
                            
                            .scrolling-content img {
                                width: 15%;
                                height: auto;
                                display: inline-block;
                                margin-right: 10px;
                            }
                            
                            @keyframes scroll {
                                0% { transform: translateX(0); }
                                100% { transform: translateX(-50%); }
                            }
                            </style>
                         
                                
                            <div class="scroll-container">
                                <div class="scrolling-content">
                                    <img src="{{ asset('storage/' . $item->berita1) }}" alt="{{ asset('storage/' . $item->berita1) }}">
                                    <img src="{{ asset('storage/' . $item->berita2) }}" alt="{{ asset('storage/' . $item->berita2) }}">
                                    <img src="{{ asset('storage/' . $item->berita3) }}" alt="{{ asset('storage/' . $item->berita3) }}">
                                    <img src="{{ asset('storage/' . $item->berita4) }}" alt="{{ asset('storage/' . $item->berita4) }}">
                                    <img src="{{ asset('storage/' . $item->berita5) }}" alt="{{ asset('storage/' . $item->berita5) }}">
                                    <img src="{{ asset('storage/' . $item->berita6) }}" alt="{{ asset('storage/' . $item->berita6) }}">
                                    <img src="{{ asset('storage/' . $item->berita7) }}" alt="{{ asset('storage/' . $item->berita7) }}">
                                    <img src="{{ asset('storage/' . $item->berita8) }}" alt="{{ asset('storage/' . $item->berita8) }}">
                                    <img src="{{ asset('storage/' . $item->berita9) }}" alt="{{ asset('storage/' . $item->berita9) }}">
                                    <img src="{{ asset('storage/' . $item->berita10) }}" alt="{{ asset('storage/' . $item->berita10) }}">
                                    <img src="{{ asset('storage/' . $item->berita11) }}" alt="{{ asset('storage/' . $item->berita11) }}">
                                    <img src="{{ asset('storage/' . $item->berita12) }}" alt="{{ asset('storage/' . $item->berita12) }}">
                                    <img src="{{ asset('storage/' . $item->berita13) }}" alt="{{ asset('storage/' . $item->berita13) }}">
                                    <img src="{{ asset('storage/' . $item->berita14) }}" alt="{{ asset('storage/' . $item->berita14) }}">
                                    <img src="{{ asset('storage/' . $item->berita15) }}" alt="{{ asset('storage/' . $item->berita15) }}">
                                    <img src="{{ asset('storage/' . $item->berita16) }}" alt="{{ asset('storage/' . $item->berita16) }}">
                                    <img src="{{ asset('storage/' . $item->berita17) }}" alt="{{ asset('storage/' . $item->berita17) }}">
                                    <img src="{{ asset('storage/' . $item->berita18) }}" alt="{{ asset('storage/' . $item->berita18) }}">
                                    <img src="{{ asset('storage/' . $item->berita19) }}" alt="{{ asset('storage/' . $item->berita19) }}">
                                    <img src="{{ asset('storage/' . $item->berita20) }}" alt="{{ asset('storage/' . $item->berita20) }}">
                                    {{-- <img src="{{ asset('storage/' . $item->berita1) }}" alt="{{ asset('storage/' . $item->berita1) }}"> --}}
                                </div>
                            </div>
                          
                            
                            @endforeach
                           
                           
                            {{-- <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Comming Soon</a>
                                        <a class="text-body" href=""><small>Jan 01, 2045</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">PELATIHAN BIMBINGAN TEKNIS GELOMBANG KE 2 TAHUN 2024 .....</a>
                                </div>
                            </div>
                             --}}
                            
                        </div>
                    </div>
                    <!-- Popular News End -->


            {{-- @include('tambahan.layanankami') --}}

        </div>
        
    </div>


    <br><br><br>
    <!-- Featured News Slider End -->

           

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



    {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}


    {{-- <section id="sec-4">
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


    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}





@include('frontend.00_atas.footer1')

    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
@include('frontend.00_atas.footer2')