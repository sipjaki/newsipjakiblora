@include('frontend.00_atas.header')


{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}

<section id="sec-0">
    
    @include('frontend.00_atas.header1')
    
        <header>
        
        @include('frontend.00_atas.header2_navbar')
            
        </header>
        

        <article>
        <div class="container">
            {{-- <h1> We are Certified Engineers</h1> --}}
            <h2>Sistem Informasi <br> Pembina Jasa Konstruksi <br>
            <span>Pemerintah Kab bandung Barat </span></h2>
            {{-- <p style="text-align: justify">Sistem Informasi Jasa Konstruksi Pemerintah Kabupaten Bandung Barat adalah platform digital yang mengelola proyek konstruksi pemerintah, mencakup pengelolaan data, pelaporan kemajuan, manajemen kontrak, dan pemantauan kualitas. Sistem ini meningkatkan transparansi dan efisiensi, memungkinkan pemantauan efektif oleh pemerintah dan pemangku kepentingan, serta memastikan proyek berjalan sesuai jadwal, anggaran, dan spesifikasi. Selain itu, sistem ini memudahkan penyimpanan dan akses dokumen penting, mendukung proses audit dan evaluasi kinerja kontraktor.  --}}
            
                <style>
                  
                    .containerdashboard {
                        background: white;
                        border-radius: 15px;
                        width: 100%;
                        margin-top: 35px;
                        height: 120vh;
                        display: flex;
                        padding: 20px;
                        box-sizing: border-box;
                    }
                    .left-column {
                        flex: 3;
                        padding: 20px;
                        border-radius: 15px;
                        background-color: #ffffff;
                        border-right: 2px solid #e0e0e0; /* Batas antara kolom kiri dan kanan */
                    }
                    .right-column {
                        flex: 1;
                        padding: 20px;
                        border-radius: 15px;
                        background-color: #f9f9f9;
                        display: flex;
                        flex-direction: column;
                        gap: 20px; /* Jarak antar iklan */
                    }
                    .right-column .ad {
                        background-color: #ffffff;
                        border: 1px solid #ddd;
                        border-radius: 10px;
                        padding: 15px;
                        height: 250px;
                        width: 350px;
                        box-sizing: border-box;
                        text-align: center;
                    }
                    .header {
                        font-size: 24px;
                        font-weight: bold;
                        margin-bottom: 20px;
                    }
                    .content {
                        font-size: 16px;
                        color: #000000
                    }
                    .ad-title {
                        font-size: 18px;
                        margin-bottom: 10px;
                    }
                    .ad-content {
                        font-size: 14px;
                        text-align: left;
                    }
                </style>

                {{-- <div class="containerdashboard">
                    <div class="left-column">
                        <div class="header">Berita Terkini</div>
                        <div class="content">
                        <p style="color: #000000">halo ini adalah kami</p>
                        </div>
                    </div>
                    <div class="right-column">
                        <div class="ad">
                            <div class="ad-title">Iklan 1</div>
                            <div class="ad-content">
                                <p style="color: black">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, voluptates?</p>
                            </div>
                        </div>
                        <div class="ad">
                            <div class="ad-title">Iklan 2</div>
                            <div class="ad-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, fugit?</p>
                            </div>
                        </div>
                        <div class="ad">
                            <div class="ad-title">Iklan 3</div>
                            <div class="ad-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, labore?</p>
                            </div>
                        </div>
                        <!-- Tambahkan lebih banyak elemen iklan jika diperlukan -->
                    </div>
                </div> --}}

            
            </p>
            
            <a href="/404"> <i class="fas fa-cogs me-2 "></i>pelatihan</a>
            <a href="/404"> <i class="fas fa-file me-2 "></i>sertifikasi</a>
            <a href="/404"> <i class="fas fa-building me-2 "></i>project kbb</a>
            <a href="/404"> <i class="fas fa-file me-2 "></i>slf</a>
            <a href="/404"> <i class="fas fa-road me-2 "></i>pbg</a>
        </div>
        </article>

        
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

Layanan Jasa Konstruksi
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

    <section class="facilities-section">
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-5 offset-lg-1 p-0">
    <div class="facililties-text pt-100 pb-70">
    <div class="section-title">
    {{-- <span>Fasilitas Layanan</span> --}}
    <h2>Faslilitas Layanan Konstruksi</h2>
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
    </section>
 
    
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
                        <figcaption></figcaption>
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