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
   



    <!-- Main News Slider Start -->
    <div class="container-fluid" style="margin-top: 188px;">
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
        <div class="container col-11">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">
                    <img src="/assets/icon/sipjakikbb.png" alt="/assets/icon/sipjakikbb.png" style="width:40px;">
                    Layanan Kami</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">


                @foreach ( $data_layanankami as $item )
                    
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <a href="/">
                        <img class="img-fluid h-300" src="{{$item->gambar}}" style="object-fit: cover; padding:10px; cursor:pointer">
                        <div class="overlay">
                            <div class="">
                                <button class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="/">{{ $item->program}}</button> <br>
                                <p class="text-white" href=""><small>{{$item->keterangan}}</small></p>
                            </div>
                            {{-- <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a> --}}
                        </div>
                    </a>
                </div>
                
                @endforeach

                
            </div>
                    <!-- Popular News Start -->
                    <div class="mb-3 mt-4">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">
                               <img src="/assets/icon/sipjakikbb.png" alt="/assets/icon/sipjakikbb.png" style="width: 40px;"> KEGIATAN SERTIFIKASI JASA KONSTRUKSI </h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                               
                            @foreach ($data_jaskon as $item )
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
                                    <img src="{{$item->berita1}}" alt="{{$item->berita1}}">
                                    <img src="{{$item->berita3}}" alt="{{$item->berita3}}">
                                    <img src="{{$item->berita4}}" alt="{{$item->berita4}}">
                                    <img src="{{$item->berita6}}" alt="{{$item->berita6}}">
                                    <img src="{{$item->berita7}}" alt="{{$item->berita7}}">
                                    <img src="{{$item->berita9}}" alt="{{$item->berita9}}">
                                    <img src="{{$item->berita18}}" alt="{{$item->berita18}}">
                                    <img src="{{$item->berita19}}" alt="{{$item->berita19}}">
                                    <img src="{{$item->berita20}}" alt="{{$item->berita20}}">       
                                    <img src="{{$item->berita2}}" alt="{{$item->berita2}}">
                                    <img src="{{$item->berita5}}" alt="{{$item->berita5}}">
                                    <img src="{{$item->berita8}}" alt="{{$item->berita8}}">
                                    <img src="{{$item->berita10}}" alt="{{$item->berita10}}">
                                    <img src="{{$item->berita11}}" alt="{{$item->berita11}}">
                                    <img src="{{$item->berita12}}" alt="{{$item->berita12}}">
                                    <img src="{{$item->berita13}}" alt="{{$item->berita13}}">
                                    <img src="{{$item->berita14}}" alt="{{$item->berita14}}">
                                    <img src="{{$item->berita15}}" alt="{{$item->berita15}}">
                                    <img src="{{$item->berita16}}" alt="{{$item->berita16}}">
                                    <img src="{{$item->berita17}}" alt="{{$item->berita17}}">
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
                        <p style="color: black; font-size:12px;">
                            Kami mendorong semua pihak untuk memanfaatkan Sistem Informasi Pembina Jasa Konstruksi (SIPJK) secara maksimal. Sistem ini dirancang untuk memudahkan akses informasi penting terkait peraturan dan sertifikasi dalam industri konstruksi. Dengan menggunakan SIPJK, saudara akan memperoleh informasi terkini dan membantu memastikan proyek konstruksi berjalan sesuai standar. Mari kita tingkatkan kualitas dan profesionalisme industri konstruksi bersama.
                    
                        </p>
                   
                    </div>
                    <figure>
                        <img class="customer mb-2" src="/assets/bahan1/Images/payuyuyuhana.png" style="width: 20%;">
                        <figcaption>Yuyu Yuhana ,ST., MM</figcaption>
                        <figcaption>fungsional pembina  </figcaption>
                        <figcaption>jasa konstruksi ahli muda </figcaption>
                        <figcaption>pemerintah kabupaten bandung barat</figcaption>
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
                        color: black;
                        margin-bottom: 10px;"
                    >
                    <input type="text" name="telepon" id="" placeholder="Telepon" required 
                    style="font-family: 'Lato', sans-serif;
                        font-size: 14px; 
                        padding: 10px 10px ;
                        border: 1px solid #1a237e; 
                        border-radius: 15px;
                        margin-top: 0px; 
                        margin-bottom: 10px; 
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
                                    <option value="tenaga-ahli">Tenaga Tukang</option>
                                    <option value="dinas-terkait">Dinas Terkait</option>
                                    <option value="masyarakat-umum">Masyarakat Umum</option>
                                </select>
        
                                
                                <select name="sebagai" class="custom-select" required style="width: 100%;">
                                    <option value="" disabled selected>Jenis Q&A Pertanyaan Anda</option>
                                    
                                    @foreach ($data_layanankami as $item )
                                    <option value="{{$item->program}}">{{$item->program}}</option>
                                    @endforeach
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