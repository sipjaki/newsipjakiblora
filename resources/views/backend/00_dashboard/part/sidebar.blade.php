
        <!--Main Content-->

        <div class="row main-content h-screen" style="color: #FFCB0F;">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center" style="background:white; ">
                        <img src="assets/img/client-img4.png" alt="" class="rounded-circle" style="margin-bottom:25px; border: 1px solid #000; border-radius: 50%; display: inline-block; overflow: hidden; "/>
                       <br>
                    </span>
                    </div>
                    <!--Image Avatar-->

                    <!--Sidebar Navigation Menu-->
                    <div class="sidebar-menu-container">
                        <ul class="sidebar-menu mt-4 mb-4">
                        <style>
                        /* Default link style */
                        .sbar {
                        color: navy; /* warna biru tua */
                        text-decoration: none; /* menghapus garis bawah default */
                        background-image: linear-gradient(to right, darkblue, white); /* gradasi dari biru tua ke hitam */
                        background-size: 100% 200%; /* ukuran gradient vertikal */
                        background-position: 0 100%; /* posisi gradient dari bawah */
                        transition: background-position 0.3s, color 0.3s; /* animasi perubahan posisi latar belakang dan warna teks */
                        padding: 5px 10px; /* spasi dalam tautan */
                        }

                        a {
                        /* font-size: 12px; */
                        color: navy; /* warna biru tua */
                        text-decoration: none; /* menghapus garis bawah default */
                        background-image: linear-gradient(to bottom, navy, black); /* gradasi dari biru tua ke hitam */
                        background-size: 100% 200%; /* ukuran gradient vertikal */
                        background-position: 0 100%; /* posisi gradient dari bawah */
                        transition: background-position 0.3s, color 0.3s; /* animasi perubahan posisi latar belakang dan warna teks */
                        padding: 5px 10px; /* spasi dalam tautan */
                        }

                        /* Hover effect */
                        a:hover {
                            background: linear-gradient(to right, #FFCB0F, black); /* gradasi dari kuning ke hitam */
                            background-size: 100% 200%; /* ukuran gradient vertikal */
                            background-position: 0 100%; /* posisi gradient dari bawah */
                            transition: background-position 0.3s, color 0.3s; /* animasi perubahan posisi latar belakang dan warna teks */
                            padding: 5px 10px; /
                         } 
                         
                        span {
                            font-size: 12px;
                         } 
                         
                         
                         </style>
                         
                         
                            <li class="parent">
                                <a href="/" class="sbar"><i class="fas fa-cogs mr-2"> </i>
                                    <span class="none">DASHBOARD WEB</span>
                                </a>
                            </li>
     
                            <li class="parent">
                                <a href="/dashboard" class="sbar"><i class="fas fa-cogs mr-2"> </i>
                                    <span class="none">DASHBOARD ADMIN</span>
                                </a>
                            </li>
     
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('profil'); return false" class="sbar"><i class="fab fa-ravelry mr-2"></i>
                                    <span>PROFIL<i class="fa fa-angle-down pull-right align-bottom " style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="profil">
                                    <li class="child">
                                    
                                        <a href="/struktur" style="font-size: 12px;">
                                            <i class="fas fa-users mr-2" style="margin-left: 20px;"></i>STRUKTUR DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BANDUNG BARAT
                                        </a>
                    
                                        <a href="/renstra" style="font-size: 12px;">
                                            <i class="fas fa-users mr-2" style="margin-left: 20px;"></i>RENCANA STRATEGIS PROGRAM DAN JASA KONSTRUKSI  
                                        </a>
                    
                                        <a href="/tupoksi" style="font-size: 12px;">
                                            <i class="fas fa-users mr-2" style="margin-left: 20px;"></i>TUPOKSI PROGRAM DAN JASA KONSTRUKSI  
                                        </a>
                                                               
                                    </li> 


                                </ul>
                            </li>
     
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('berita'); return false" class="sbar"><i class="fab fa-ravelry mr-2"></i>
                                    <span>BERITA<i class="fa fa-angle-down pull-right align-bottom " style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="berita">
                                    <li class="child">
                                    
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>BERITA
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>AGENDA
                                        </a>
                                            
                                    </li> 


                                </ul>
                            </li>
                         

                            <li class="parent">
                                <a href="#" onclick="toggle_menu('datajakon'); return false" class="sbar"><i class="fab fa-ravelry mr-2"></i>
                                    <span>DATA JASA KONSTRUKSI<i class="fa fa-angle-down pull-right align-bottom " style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="datajakon">
                                    <li class="child">
                                    
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>ASOSIASI
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>STANDAR BIAYA UMUM
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PROGRESS PAKET PEKERJAAN
                                        </a>
                                            
                                    </li> 


                                </ul>
                            </li>
                         



                            <li class="parent">
                                <a href="#" onclick="toggle_menu('tenagakerja'); return false" class="sbar"><i class="fab fa-ravelry mr-2"></i>
                                    <span>TENAGA KERJA<i class="fa fa-angle-down pull-right align-bottom " style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="tenagakerja">
                                    <li class="child">
                                    
                                        <a href="/beskktenagakerja" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>SERTIFIKAT KETERAMPILAN KERJA
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PENANGGUNG JAWAB TEKNIS
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PEMBINA JASA KONSTRUKSI
                                        </a>
                                            
                                    </li> 


                                </ul>
                            </li>

                            <li class="parent">
                                <a href="#" onclick="toggle_menu('spm'); return false" class="sbar"><i class="fab fa-ravelry mr-2"></i>
                                    <span>SPM<i class="fa fa-angle-down pull-right align-bottom " style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="spm">
                                    <li class="child">
                                                                             
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>INFORMASI SPM
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>LAPORAN SPM 
                                        </a>
                                            
                                    </li> 


                                </ul>
                            </li>
                         

                            <li class="parent">
                                <a href="#" onclick="toggle_menu('dukunganusaha'); return false" class="sbar"><i class="fab fa-ravelry mr-2"></i>
                                    <span>DUKUNGAN USAHA<i class="fa fa-angle-down pull-right align-bottom " style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="dukunganusaha">
                                    <li class="child">
                                                                             
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PERMODALAN
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>JAMINAN USAHA 
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>MITRA USAHA 
                                        </a>
                                            
                                    </li> 


                                </ul>
                            </li>
                            
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('pelatihan'); return false" class="sbar"><i class="fab fa-ravelry mr-2"></i>
                                    <span>PELATIHAN<i class="fa fa-angle-down pull-right align-bottom " style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="pelatihan">
                                    <li class="child">
                                                                             
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PELATIHAN
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PENGAWASAN 
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>KECELAKAAN 
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>TEKNOLOGI 
                                        </a>
                                            
                                    </li> 


                                </ul>
                            </li>
                         
                            
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('peraturan'); return false" class="sbar"><i class="fab fa-ravelry mr-2"></i>
                                    <span>PERATURAN<i class="fa fa-angle-down pull-right align-bottom " style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="peraturan">
                                    <li class="child">
                                                                             
                                        <a href="/perundangundang" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>UNDANG UNDANG
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PERATURAN PEMERINTAH
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PERATURAN PRESIDEN
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PERATURAN MENTERI
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>KEPUTUSAN MENTERI
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>SURAT EDARAN MENTERI
                                        </a>

                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>REFERENSI
                                        </a>
                                        
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PERATURAN DAERAH 
                                        </a>

                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PERATURAN GUBERNUR 
                                        </a>

                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>PERATURAN WALIKOTA
                                        </a>
                                        
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-file mr-2" style="margin-left: 20px;"></i>SURAT KEPUTUSAN
                                        </a>
                                        
                                        
                                        
                                            
                                    </li> 


                                </ul>
                            </li>
                         
                         
                            <li class="parent">
                                <a href="/404" class="sbar"><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">BADAN USAHA</span>
                                </a>
                            </li>
                         
                            <li class="parent">
                                <a href="/404" class="sbar"><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">SERTIFIKAT BADAN USAHA</span>
                                </a>
                            </li>
                         
                            <li class="parent">
                                <a href="/404" class="sbar"><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">TANDA DAFTAR USAHA PERUSAHAAN</span>
                                </a>
                            </li>



                            <li class="parent">
                                <a href="/404" class="sbar"><i class="fab fa-ravelry mr-2"> </i>
                                    <span class="none">ADMINISTRATOR</span>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->
