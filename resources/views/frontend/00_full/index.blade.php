<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./bahan1/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="./bahan1/css/animate.compat.css" rel="stylesheet" type="text/css">
    <link href="./bahan1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./bahan1/css/styles.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX=" crossorigin="anonymous" referrerpolicy="no-referrer" />

	   
    <script defer src="/bahan1/js/scripts.js"></script>
    {{-- <title>Construction Company</title> --}}
    <title>SIPJAKI Pemerintah Kab Bandung Barat</title>

    <link rel="icon" href="assets/icon/sipjakikbb.png" type="image/x-icon">
  
</head>

<body>

    
  {{-- ---------- --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}

    <section id="sec-0">
        <header class="top">
            <div class="container">
                {{-- <p>081321455855</p> --}}
                <p><a href="https://wa.me/6281321455855">+6281 321 455 855</a></p>
                {{-- <p>support@Construct.com</p> --}}
                <p>Senin-Jumat 9:00-16:00</p>
                <div class="social">
                    <a href="" title="Email"><i class="fas fa-envelope"></i></a>
                    <a href="" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="" title="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="" title="TikTok"><i class="fab fa-tiktok"></i></a>
                    <a href="" title="YouTube"><i class="fab fa-youtube"></i></a>

                </div>
            </div>
        </header>
        <header>
            
            <div class="hide" id="searchBar">
                <input type="search" name="searchBox" id="searchBox" placeholder="Type your search here..    Press [Esc] to exist">
            </div>
            <div class="container">  
                <div style="display: flex; align-items: center; margin-bottom:10px">
                    <img src="assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px; padding: 0;">
                    <h1 style="margin: 0;">
                        <span>SIPJAKI</span>KBB
                        <p style="margin: 0; font-size: 16px; color: white" >Dinas Pekerjaan Umum & Penataan Ruang</p>
                    </h1>
                </div>

                <label for="menu"><i class="fas fa-bars"></i></label>
                <input type="checkbox" id="menu">
                <nav>
                    <style>
                        .dropdown {
                            position: relative;
                            display: inline-block;
                        }
                        .dropdown a {
                            display: flex;
                            align-items: center;
                            text-decoration: none;
                            color: black; /* Warna teks untuk tautan PROFIL */
                        }
                        .dropdown .arrow {
                            margin-left: 5px;
                            color: black; /* Warna teks untuk panah */
                            font-size: 0.8em; /* Ukuran ikon panah */
                        }
                        .dropdown-content {
                            display: none;
                            position: absolute;
                            background-color: #f9f9f9;
                            min-width: 325px;
                            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
                            z-index: 1;
                        }
                        .dropdown-content a {
                            color: black; /* Warna teks untuk menu dropdown */
                            padding: 12px 16px;
                            text-decoration: none;
                            display: block;
                        }
                        .dropdown-content a:hover {
                            background-color: #f1f1f1;
                        }
                        .dropdown:hover .dropdown-content {
                            display: block;
                        }
                    </style>

                    <a href="/">DASHBOARD</a>
                    
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle">PROFIL</a>
                        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
                        <div class="dropdown-content">

                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">STRUKTUR DINAS PEKERJAAN UMUM DAN PENATAAN RUANG PEMERINTAH KABUPATEN BANDUNG BARAT</a>
                            </div>
                                                        {{-- <a href="#" style="color: black; text-align: left"><i class="fab fa-home"></i>STRUKTUR DINAS PEKERJAAN UMUM DAN PENATAAN RUANG PEMERINTAH KABUPATEN BANDUNG BARAT</a> --}}
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">RENSTRA SEKSI PROGRAM DAN JASA KONSTRUKSI </a>
                            </div>
                                                        {{-- <a href="#" style="color: black; text-align: left"><i class="fab fa-home"></i>STRUKTUR DINAS PEKERJAAN UMUM DAN PENATAAN RUANG PEMERINTAH KABUPATEN BANDUNG BARAT</a> --}}
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-users" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">TUPOKSI SEKSI PROGRAM DAN JASA KONSTRUKSI </a>
                            </div>
                             
                        
                            </div>
                    </div>                    {{-- <a href="#">PROFIL</a> --}}
                    
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle">BERITA</a>
                        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
                        <div class="dropdown-content" style="min-width: 100px;">
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-newspaper" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">BERITA</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-newspaper" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">AGENDA</a>
                            </div>
                             
                        </div>
                    </div>                    {{-- <a href="#">PROFIL</a> --}}

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" style="text-align: left">DATA <br> JAKON </a>
                        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
                        <div class="dropdown-content" style="min-width: 210px;">
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-cogs" style="margin-left: 3px; margin-right: 10px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">ASOSIASI</a>
                            </div>

                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-cogs" style="margin-left: 3px; margin-right: 10px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">STANDAR BIAYA UMUM</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-cogs" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PROGRESS PAKET PEKERJAAN</a>
                            </div>

                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-cogs" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">POTENSI JASA KONSTRUKSI</a>
                            </div>
                             
                        </div>
                    </div>                    {{-- <a href="#">PROFIL</a> --}}

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" style="text-align: left">TENAGA <br> KERJA </a>
                        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
                        <div class="dropdown-content" style="min-width: 210px;">
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-user" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">SKA/ SKT</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-user" style="margin-left: 3px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PENANGGUNG JAWAB TEKNIS (PJT)</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-user" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PEMBINA JASA KONSTRUKSI</a>
                            </div>
                             
                        </div>
                    </div>                    {{-- <a href="#">PROFIL</a> --}}
                    

                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" style="text-align: left">SPM</a>
                        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
                        <div class="dropdown-content" style="min-width: 210px;">
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">INFORMASI SPM</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">LAPORAN SPM</a>
                            </div>
                             
                        </div>
                    </div>                    {{-- <a href="#">PROFIL</a> --}}
                    
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" style="text-align: left">DUKUNGAN <br> USAHA </a>
                        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
                        <div class="dropdown-content" style="min-width: 210px;">
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PERMODALAN</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">JAMINAN USAHA</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">MITRA USAHA</a>
                            </div>
                             
                        </div>
                    </div>                    {{-- <a href="#">PROFIL</a> --}}

                    <a href="/404" style="text-align: center">BADAN <br> USAHA </a>
                    <a href="/404">UIJK</a>
                    <a href="/404">TDUP</a>
                    
                    
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" style="text-align: left">PELATIHAN</a>
                        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
                        <div class="dropdown-content" style="min-width: 210px;">
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-book" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PELATIHAN</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-book" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PENGAWASAN</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-book" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">KECELAKAAN</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-book" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">TEKNOLOGI KONSTRUKSI</a>
                            </div>

                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-book" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PRODUK DALAM NEGERI</a>
                            </div>
                             
                        </div>
                    </div>
                    
                    <div class="dropdown">
                        <a href="#" class="dropdown-toggle" style="text-align: left">PERATURAN</a>
                        {{-- <i class="fas fa-chevron-down arrow"></i> --}}
                        <div class="dropdown-content" style="min-width: 250px;">
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">UNDANG UNDANG</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PERATURAN PEMERINTAH</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PERATURAN PRESIDEN</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PERATURAN MENTERI</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">KEPUTUSAN MENTERI</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">SURAT EDARAN MENTERI</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">REFERENSI</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PERATURAN DAERAH</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PERATURAN GUBERNUR</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">PERATURAN WALIKOTA</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">SURAT KEPUTUSAN</a>
                            </div>
                             
                            <div style="display: inline-flex; align-items: center; color: black; text-decoration: none;">
                                <i class="fas fa-file" style="margin-left: 3px; margin-right: 0px; margin-right: 0px; background: linear-gradient(90deg, black, yellow);" ></i>
                                <a href="/404" style="color: black; text-decoration: none; text-align:left">UNDANG UNDANG</a>
                            </div>
                             
                        </div>
                    </div>                    {{-- <a href="#">PROFIL</a> --}}
                    
                    
                    <a href="#">FORUM</a>
                   


                    {{-- <i class="fa-solid fa-magnifying-glass" id="search"></i> --}}
                    <i class="fa-solid fa-sign-in-alt" id="search"></i>

                </nav>
            </div>
        </header>
        

        <article>
        <div class="container">
            {{-- <h1> We are Certified Engineers</h1> --}}
            <h2>Sistem Informasi <br> Pembina Jasa Konstruksi <br>
            <span>Pemerintah Kab bandung Barat </span></h2>
            <p style="text-align: justify">Sistem Informasi Jasa Konstruksi Pemerintah Kabupaten Bandung Barat adalah platform digital yang mengelola proyek konstruksi pemerintah, mencakup pengelolaan data, pelaporan kemajuan, manajemen kontrak, dan pemantauan kualitas. Sistem ini meningkatkan transparansi dan efisiensi, memungkinkan pemantauan efektif oleh pemerintah dan pemangku kepentingan, serta memastikan proyek berjalan sesuai jadwal, anggaran, dan spesifikasi. Selain itu, sistem ini memudahkan penyimpanan dan akses dokumen penting, mendukung proses audit dan evaluasi kinerja kontraktor. 
            </p>
            
            <a href="/404">sertifikasi</a>
            <a href="/404"> project kbb</a>
        </div>
        </article>
    </section>


  {{-- ---------- --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}






    <section id="sec-1">
        <div class="container">
            <article>
                <h1>Welcome to our company</h1>
                <h2>Lorem ipsum dolor sit amet.</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate deserunt magni sint mollitia similique corporis quis voluptatibus, eos tempora ealias illo nemo excepturi blanditiis vitae impedit minus tempore praesentium harum. <br><br>Quis, temporibus dolorum? Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit maxime minima quod eius aspernatur. Accusantium sed sunt corrupti sapiente deleniti?</p>
                <a href="#">Show More</a>
            </article>
            <aside><img src="/bahan1/Images/img1.png" alt="man"></aside>
        </div>
    </section>
    <section id="sec-2">
        <div class="container">
            <h1> why choose us?</h1>
            <P>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ducimus, voluptatibus perferendis voluptates quidem magni illo odit velit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, expedita tenetur? Pariatur itaque eveniet nam possimus omnis veniam cupiditate provident.</P>
            <article>
                <figure>
                    <div><img src="/bahan1/Images/ico1.png" alt=""></div>
                    <div class="cont">
                        <h2>we deliver quality</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A iste ad illum, ducimus asperiores necessitatibus reprehenderit?</p>
                    </div>
                </figure>
                <figure>
                    <div><img src="/bahan1/Images/ico2.png" alt=""></div>
                    <div class="cont">
                        <h2>Always on time</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A iste ad illum, ducimus asperiores necessitatibus reprehenderit?</p>
                    </div>
                </figure>
                <figure>
                    <div><img src="/bahan1/Images/ico3.png" alt=""></div>
                    <div class="cont">
                        <h2>we are passionate</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. A iste ad illum, ducimus asperiores necessitatibus reprehenderit?</p>
                    </div>
                </figure>
                <figure>
                    <div><img src="/bahan1/Images/ico4.png" alt=""></div>
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
                        <img src="/bahan1/Images/card1.jpg" class="card-img-top" alt="...">
                        <h5 class="caption">Construction Management</h5>
                    </div>
                    <div class="card-body px-0 pt-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum expedita tempora quam omnis deleniti!(word break with hyphen test) jjjjjjjjjjjjjjjjjjhuyiouuioiuojjjjjjjjjjj54455555788uiyuuihjhhjhjh Consequuntur, distinctio magnam beatae dignissimos assumenda quisquam accusamus similique aut esse pariatur consectetur ab adipisci cupiditate sint maxime dolorum doloremque autem quasi nostrum nobis dicta? Sit ipsum enim sint quos quod nulla consequuntur amet voluptates. Voluptate cum facilis libero rem veritatis?</p>
                    <a href="#">Show More</a>
                    </div>
                </div>
                <div class="card border-0">
                    <div>
                        <img src="/bahan1/Images/card2.jpg" class="card-img-top" alt="...">
                        <h5 class="caption">Renovation</h5>
                    </div>
                    <div class="card-body px-0 pt-4">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum expedita tempora quam omnis deleniti!(word break with hyphen test) jjjjjjjjjjjjjjjjjjhuyiouuioiuojjjjjjjjjjj54455555788uiyuuihjhhjhjh Consequuntur, distinctio magnam beatae dignissimos assumenda quisquam accusamus similique aut esse pariatur consectetur ab adipisci cupiditate sint maxime dolorum doloremque autem quasi nostrum nobis dicta? Sit ipsum enim sint quos quod nulla consequuntur amet voluptates. Voluptate cum facilis libero rem veritatis?</p>
                    <a href="#">Show More</a>
                    </div>
                </div>
                <div class="card border-0">
                    <div>
                        <img src="/bahan1/Images/card3.jpg" class="card-img-top" alt="...">
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
                <img class="wow animated fadeIn slow" src="/bahan1/Images/gallery1.jpg" alt="pic">
                <aside>
                    <img src="/bahan1/Images/gallery3.jpg" alt="pic" class="wow animated flipInX delay-1s">
                    <img src="/bahan1/Images/gallery2.jpg" alt="pic" class="wow animated flipInX delay-1s slower">
                    <img src="/bahan1/Images/gallery4.jpg" alt="pic" class="wow animated flipInX delay-2s">
                    <img src="/bahan1/Images/gallery5.jpg" alt="pic" class="wow animated flipInX delay-2s slower">
                </aside>    
            </div>
        </div>
    </section>
    
    {{-- <section id="sec-5">
        <div class="container">
            <h1>customer reviews</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni reiciendis accusamus autem tenetur vero, facilis omnis, ullam quis mollitia deleniti ea similique laboriosam numquam ab dignissimos! Ducimus, eveniet at. A debitis eum tenetur dolor magni.</p>
            <div class="cont">
                <article class="quoteblock">
                    <div class="quotetxt arrow">
                        <p><img src="bahan1/Images/blockquote2.png" alt="quote mark"></p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius ipsum id inventore facilis laboriosam est possimus explicabo quis ipsa, perferendis nam ratiendus neque earum iure maxime non soluta voluptates deleniti provident! Commodi, eveniet?</p>
                    </div>
                    <figure>
                        <img class="customer" src="bahan1/Images/cust1.png" alt="customer1">
                        <figcaption>John smith</figcaption>
                    </figure>
                </article>
                <article class="quoteblock">
                    <div class="quotetxt arrow">
                        <p><img src="bahan1/Images/blockquote1.png" alt="quote mark"></p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius ipsum id inventore facilis laboriosam est possimus explicabo quis ipsa, perferendis nam ratiendus neque earum iure maxime non soluta voluptates deleniti provident! Commodi, eveniet?</p>
                    </div>
                    <figure>
                        <img class="customer" src="bahan1/Images/cust1.png" alt="customer1">
                        <figcaption>John smith</figcaption>
                    </figure>
                </article>
                <article class="quoteblock">
                    <div class="quotetxt arrow">
                        <p><img src="bahan1/Images/blockquote2.png" alt="quote mark"></p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eius ipsum id inventore facilis laboriosam est possimus explicabo quis ipsa, perferendis nam ratiendus neque earum iure maxime non soluta voluptates deleniti provident! Commodi, eveniet?</p>
                    </div>
                    <figure>
                        <img class="customer" src="bahan1/Images/cust1.png" alt="customer1">
                        <figcaption>John smith</figcaption>
                    </figure>
                </article>
            </div>
        </div>
        <div class="contactUs">
            <div class="container">
                <aside>
                    <h1>do you have any questions?</h1>
                    <h2>feel free to contact us!</h2>
                </aside>
                <form id="form" action="/" method="">
                    <input type="text" name="name" id="" placeholder="Name" required>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <input type="text" name="message" id="" placeholder="Message" required>
                    <input type="submit" value="submit" id="submit">
                    <p id="msg"></p>
                </form>
            </div>
        </div>
    </section> --}}
    
    
    <section id="sec-6">
        <div class="container">
            <div class="about">
                <h1>About Company</h1>
                <h2>
                    CONSTRUCTION 
                    <p>Lorem ipsum dolor sit amit.</p>
                </h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Delectus eius nisi repudiandae ipsam pariatur, quos perspiciatis eaque officia rerum odio modi sed fugiat mollitia? Rerum, architecto obcaecati!</p>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>  
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-youtube-square"></i></a>
            </div>
            <div class="links">
                <h1>Explor links</h1>
                <a href="#">Our services</a>
                <a href="#">Meet our team</a>
                <a href="#">Forum</a>
                <a href="#">Help center</a>
                <a href="#">Contact Us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Our terms</a>
                <a href="#">Site map</a>
            </div>
            <div class="posts">
                <h1>Latest posts</h1>
                <a href="#"><span>20<br>AUG</span>Lorem ipsum dolor sit stiae tempora</a>
                <a href="#"><span>20<br>AUG</span>Lorem ipsum dolor sit stiae tempora</a>
                <a href="#"><span>20<br>AUG</span>Lorem ipsum dolor sit stiae tempora</a>
                <a href="#"><span>20<br>AUG</span>Lorem ipsum dolor sit stiae tempora</a>
                <a href="#"><span>20<br>AUG</span>Lorem ipsum dolor sit stiae tempora</a>
            </div>
            <div class="contact">
                <h1>Contact us</h1>
                <p>123 New Line, London UK</p>
                <p>Hello@contact-us.com</p>
                <p>+44 00 00 1234<br>+44 00 00 1234</p>

            </div>
        </div>
    </section>
    <section id="sec-7">
        <div class="container">
            <p>Copyright @2022 | Designed by <span>Web Technologies Team</span></p>
        </div>
    </section>

    <script src="/bahan1/js/wow.min.js"></script>
    <script> new WOW().init();</script>
    <script src="/bahan1/js/bootstrap.bundle.min.js"></script>
</body>
</html>