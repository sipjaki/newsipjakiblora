
        <!--Main Content-->

        <div class="row main-content h-screen" style="color: #FFCB0F;">
            <!--Sidebar left-->
            <div class="col-sm-3 col-xs-6 sidebar pl-0">
                <div class="inner-sidebar mr-3">
                    <!--Image Avatar-->
                    <div class="avatar text-center" style="background:white; ">
                        
                        <div class="div">
                        
                            <p style="margin-top:10px;"></p>
                        <span style="background-color: navy; color: white; padding: 5px; border-radius: 3px; font-size:16px;">
                            <?php echo e($user->name); ?>

                        </span>
                        
                    </div>
                    <img src="<?php echo e(asset('storage/' . $user->avatar)); ?>" alt="" class="rounded-circle" style="margin-bottom:25px; border: 1px solid #000; border-radius: 50%; display: inline-block; overflow: hidden; "/>
                    
                    
                        
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
                            <a href="/" target="_blank" class="sbar">
                                <i class="fas fa-tachometer-alt mr-2"></i>
                                <span class="none">DASHBOARD WEB</span>
                            </a>
                        </li>
                        
                        
     
                        <li class="parent">
                            <a href="/dashboard" class="sbar"><i class="fas fa-home mr-2"></i>
                                <span class="none">DASHBOARD ADMIN</span>
                            </a>
                        </li>
                        
                           <p style="margin-bottom: 5px;"></p>
                           <li class="parent">
                            <a href="/himbauandinas" class="sbar"><i class="fas fa-newspaper mr-2"></i>
                                <span class="none">BERITA HIMBAUAN DINAS</span>
                            </a>
                        </li>
                        
                           
                        <li class="parent">
                            <a href="/qapertanyaan" class="sbar"><i class="fas fa-question-circle mr-2"></i>
                                <span class="none">Q&A PUBLIK</span>
                            </a>
                        </li>
                        
                        <p style="margin-bottom: 5px;"></p>
                        <li class="parent">
                            <a href="#" onclick="toggle_menu('profil'); return false" class="sbar">
                                <i class="fas fa-user-circle mr-2"></i>
                                <span>PROFIL<i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
                            </a>
                            <ul class="children" id="profil">
                                <li class="child">
                                    <a href="/struktur" style="font-size: 12px;">
                                        <i class="fas fa-building mr-2" style="margin-left: 20px;"></i>STRUKTUR DINAS PEKERJAAN UMUM DAN PENATAAN RUANG KABUPATEN BANDUNG BARAT
                                    </a>
                        
                                    <a href="/renstra" style="font-size: 12px;">
                                        <i class="fas fa-chart-line mr-2" style="margin-left: 20px;"></i>RENCANA STRATEGIS PROGRAM DAN JASA KONSTRUKSI
                                    </a>
                        
                                    <a href="/tupoksi" style="font-size: 12px;">
                                        <i class="fas fa-tasks mr-2" style="margin-left: 20px;"></i>TUPOKSI PROGRAM DAN JASA KONSTRUKSI
                                    </a>
                                </li>
                            </ul>
                        </li>


                        <li class="parent">
    <a href="#" onclick="toggle_menu('berita'); return false" class="sbar">
        <i class="fas fa-newspaper mr-2"></i> <!-- Ikon berita -->
        <span>BERITA<i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
    </a>
    <ul class="children" id="berita">
        <li class="child">
            <a href="/databerita" style="font-size: 12px;">
                <i class="fas fa-file-alt mr-2" style="margin-left: 20px;"></i>BERITA <!-- Ikon file dengan teks -->
            </a>
            
            <a href="/beritaagenda" style="font-size: 12px;">
                <i class="fas fa-calendar-check mr-2" style="margin-left: 20px;"></i>AGENDA SERTIFIKASI <!-- Ikon kalender -->
            </a>
            
            <a href="/dokumentasipelatihan" style="font-size: 12px;">
                <i class="fas fa-book mr-2" style="margin-left: 20px;"></i>DOKUMENTASI PELATIHAN <!-- Ikon buku -->
            </a>
            
            <a href="/acarapelatihan" style="font-size: 12px;">
                <i class="fas fa-clipboard-list mr-2" style="margin-left: 20px;"></i>DOKUMENTASI ACARA <!-- Ikon clipboard -->
            </a>
        </li>
    </ul>
</li>
 
<li class="parent">
    <a href="#" onclick="toggle_menu('datajakon'); return false" class="sbar">
        <i class="fas fa-hammer mr-2"></i> <!-- Ikon alat untuk konstruksi -->
        <span>DATA JASA KONSTRUKSI<i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
    </a>
    <ul class="children" id="datajakon">
        <li class="child">
            <a href="/pengawasandanketertiban" style="font-size: 12px;">
                <i class="fas fa-shield-alt mr-2" style="margin-left: 20px;"></i>PENGAWASAN DAN KETERTIBAN <!-- Ikon perisai -->
            </a>
            
            <a href="/asosiasipengusaha" style="font-size: 12px;">
                <i class="fas fa-users mr-2" style="margin-left: 20px;"></i>ASOSIASI PENGUSAHA <!-- Ikon pengguna -->
            </a>        
            
            <a href="/standarbiayaumum" style="font-size: 12px;">
                <i class="fas fa-money-bill mr-2" style="margin-left: 20px;"></i>STANDAR BIAYA UMUM <!-- Ikon uang -->
            </a>
            
            <a href="/paketpekerjaan" style="font-size: 12px;">
                <i class="fas fa-clipboard-check mr-2" style="margin-left: 20px;"></i>PROGRESS PAKET PEKERJAAN <!-- Ikon clipboard -->
            </a>
            
            
        </li>
    </ul>
</li>
<li class="parent">
    <a href="#" onclick="toggle_menu('dataiujk'); return false" class="sbar">
        <i class="fas fa-clipboard-list mr-2"></i> <!-- Ikon clipboard list untuk data -->
        <span>DATA IUJK <i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
    </a>
    <ul class="children" id="dataiujk">
        <li class="child">
            <a href="/dataiujk" style="font-size: 12px;">
                <i class="fas fa-building mr-2" style="margin-left: 20px;"></i>DATA PERUSAHAAN <!-- Ikon gedung -->
            </a>
        </li>
    </ul>
</li>



<li class="parent">
    <a href="#" onclick="toggle_menu('tenagakerja'); return false" class="sbar">
        <i class="fas fa-user-friends mr-2"></i> <!-- Ikon untuk tenaga kerja -->
        <span>TENAGA KERJA<i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
    </a>
    <ul class="children" id="tenagakerja">
        <li class="child">
            <a href="/beskktenagakerja" style="font-size: 12px;">
                <i class="fas fa-certificate mr-2" style="margin-left: 20px;"></i>SERTIFIKAT KETERAMPILAN KERJA <!-- Ikon sertifikat -->
            </a>
                
            <a href="/datapjt" style="font-size: 12px;">
                <i class="fas fa-user-check mr-2" style="margin-left: 20px;"></i>PENANGGUNG JAWAB TEKNIS <!-- Ikon penanggung jawab -->
            </a>
                
            <a href="/timpembina" style="font-size: 12px;">
                <i class="fas fa-hammer mr-2" style="margin-left: 20px;"></i>PEMBINA JASA KONSTRUKSI <!-- Ikon alat untuk konstruksi -->
            </a>
        </li>
    </ul>
</li>
                            

                            
                             <li class="parent">
                                <a href="#" onclick="toggle_menu('pelatihan'); return false" class="sbar">
                                    <i class="fas fa-chalkboard-teacher mr-2"></i> <!-- Ikon untuk pelatihan -->
                                    <span>PELATIHAN<i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="pelatihan">
                                    <li class="child">
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-graduation-cap mr-2" style="margin-left: 20px;"></i>PELATIHAN <!-- Ikon untuk pelatihan -->
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-user-check mr-2" style="margin-left: 20px;"></i>PENGAWASAN <!-- Ikon untuk pengawasan -->
                                        </a>
                                            
                                        <a href="/404" style="font-size: 12px;">
                                            <i class="fas fa-exclamation-triangle mr-2" style="margin-left: 20px;"></i>KECELAKAAN <!-- Ikon untuk kecelakaan -->
                                        </a>
                                        
                                    </li>
                                </ul>
                            </li>
                            
                            
                            <li class="parent">
                                <a href="#" onclick="toggle_menu('peraturan'); return false" class="sbar">
                                    <i class="fas fa-gavel mr-2"></i> <!-- Ikon untuk peraturan -->
                                    <span>PERATURAN<i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
                                </a>
                                <ul class="children" id="peraturan">
                                    <li class="child">
                                        <a href="/peruud" style="font-size: 12px;">
                                            <i class="fas fa-file-alt mr-2" style="margin-left: 20px;"></i>UNDANG UNDANG <!-- Ikon untuk undang-undang -->
                                        </a>
                                            
                                        <a href="/perpemerintah" style="font-size: 12px;">
                                            <i class="fas fa-file-alt mr-2" style="margin-left: 20px;"></i>PERATURAN PEMERINTAH <!-- Ikon untuk peraturan pemerintah -->
                                        </a>
                                            
                                        <a href="/perpresiden" style="font-size: 12px;">
                                            <i class="fas fa-file-alt mr-2" style="margin-left: 20px;"></i>PERATURAN PRESIDEN <!-- Ikon untuk peraturan presiden -->
                                        </a>
                                            
                                        <a href="/permenteri" style="font-size: 12px;">
                                            <i class="fas fa-file-alt mr-2" style="margin-left: 20px;"></i>PERATURAN MENTERI <!-- Ikon untuk peraturan menteri -->
                                        </a>
                                            
                                        <a href="/skmenteri" style="font-size: 12px;">
                                            <i class="fas fa-file-alt mr-2" style="margin-left: 20px;"></i>KEPUTUSAN MENTERI <!-- Ikon untuk keputusan menteri -->
                                        </a>
                                            
                                        <a href="/suratedaran" style="font-size: 12px;">
                                            <i class="fas fa-file-alt mr-2" style="margin-left: 20px;"></i>SURAT EDARAN MENTERI <!-- Ikon untuk surat edaran -->
                                        </a>
                            
                                        <a href="/referensi" style="font-size: 12px;">
                                            <i class="fas fa-file-alt mr-2" style="margin-left: 20px;"></i>REFERENSI <!-- Ikon untuk referensi -->
                                        </a>
                                            
                                        <a href="/perdaerah" style="font-size: 12px;">
                                            <i class="fas fa-file-alt mr-2" style="margin-left: 20px;"></i>PERATURAN DAERAH <!-- Ikon untuk peraturan daerah -->
                                        </a>
                            
                                        <a href="/pergubernur" style="font-size: 12px;">
                                            <i class="fas fa-file-alt mr-2" style="margin-left: 20px;"></i>PERATURAN GUBERNUR <!-- Ikon untuk peraturan gubernur -->
                                        </a>
                            
                                        <a href="/perwalikotabupati" style="font-size: 12px;">
                                            <i class="fas fa-file-alt mr-2" style="margin-left: 20px;"></i>PERATURAN WALIKOTA/ BUPATI <!-- Ikon untuk peraturan walikota/bupati -->
                                        </a>
                                            
                                        <a href="/keputusan" style="font-size: 12px;">
                                            <i class="fas fa-file-alt mr-2" style="margin-left: 20px;"></i>SURAT KEPUTUSAN <!-- Ikon untuk surat keputusan -->
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            

                         <p style="margin-bottom: 5px;"></p>
                         
                         <li class="parent">
                            <a href="#" onclick="toggle_menu('settingsmenu'); return false" class="sbar">
                                <i class="fas fa-cogs mr-2"></i> <!-- Ikon untuk pelatihan -->
                                <span>SETTINGS<i class="fa fa-angle-down pull-right align-bottom" style="color: black;"></i></span>
                            </a>
                            <ul class="children" id="settingsmenu">
                                <li class="child">
                                    <a href="/settingsalldata" style="font-size: 12px;">
                                        <i class="fas fa-database mr-2" style="margin-left: 20px;"></i>ALL DATA
                                    </a>
                                    
                                    <a href="/settingstatusadmin" style="font-size: 12px;">
                                        <i class="fas fa-user-shield mr-2" style="margin-left: 20px;"></i>STATUS ADMIN
                                    </a>
                                    
                                    <a href="/settingkecamatan" style="font-size: 12px;">
                                        <i class="fas fa-map-marker-alt mr-2" style="margin-left: 20px;"></i>KECAMATAN/KOTA
                                    </a>
                                    
                                    <a href="/settingqasebagai" style="font-size: 12px;">
                                        <i class="fas fa-clipboard-list mr-2" style="margin-left: 20px;"></i>QA SEBAGAI
                                    </a>
                                    
                                    <a href="/settingqapertanyaan" style="font-size: 12px;">
                                        <i class="fas fa-question-circle mr-2" style="margin-left: 20px;"></i>QA PERTANYAAN
                                    </a>
                                    
                                    <a href="/settingmetodepengadaan" style="font-size: 12px;">
                                        <i class="fas fa-database mr-2" style="margin-left: 20px;"></i>METODE PENGADAAN
                                    </a>
                                    
                                    <a href="/settingpengawasanbangunangedung" style="font-size: 12px;">
                                        <i class="fas fa-building mr-2" style="margin-left: 20px;"></i>PENGAWASAN BANGUNAN GEDUNG
                                    </a>
                                    
                                    <a href="/settingpengawasanstatus" style="font-size: 12px;">
                                        <i class="fas fa-check-circle mr-2" style="margin-left: 20px;"></i>PENGAWASAN STATUS
                                    </a>
                                    
                                    <a href="/settingpengawasantindakan" style="font-size: 12px;">
                                        <i class="fas fa-exclamation-triangle mr-2" style="margin-left: 20px;"></i>PENGAWASAN TINDAKAN
                                    </a>
                                    
                                    <a href="/settingagendastatus" style="font-size: 12px;">
                                        <i class="fas fa-calendar-check mr-2" style="margin-left: 20px;"></i>AGENDA STATUS
                                    </a>
                                    
                                    <a href="/settingketerampilanpekerja" style="font-size: 12px;">
                                        <i class="fas fa-users-cog mr-2" style="margin-left: 20px;"></i>KETERAMPILAN PEKERJA
                                    </a>
                                    
                                    <a href="/settingtahunpilihan" style="font-size: 12px;">
                                        <i class="fas fa-calendar-alt mr-2" style="margin-left: 20px;"></i>TAHUN REGISTRASI
                                    </a>
                                    
                                    
                                </li>
                            </ul>
                        </li>
                        
                    
                         <p style="margin-bottom: 5px;"></p>

                         <li class="parent">
                            <a href="/administrator" class="sbar">
                                <i class="fas fa-user-shield mr-2"></i> <!-- Ikon untuk administrator -->
                                <span class="none">ADMINISTRATOR</span>
                            </a>
                        </li>
                        
                            
                        </ul>
                    </div>
                    <!--Sidebar Naigation Menu-->
                </div>
            </div>
            <!--Sidebar left-->
<?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/backend/00_dashboard/part/sidebar.blade.php ENDPATH**/ ?>