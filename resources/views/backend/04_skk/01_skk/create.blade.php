@include('backend.00_dashboard.part.header')
@include('backend.00_dashboard.part.menuheader')
@include('backend.00_dashboard.part.sidebar')
    
    <!--Page Wrapper-->

        <!--Main Content-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content  pl-0">

                    
                <div class="row mb-0 ">
                    <div class="font-bold col-sm-8"><h6 class="mb-4 bc-header">.</h6></div>
                    <div class="col-sm-4 text-right pb-3">
                        <div class="pull-right mr-3 btn-order-bulk">
                        
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    margin-bottom: 10px;
    margin-top: none;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: 215vh;
    margin-left: none;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
<div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div>


    <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700; "><span style="color: #000000;"> Kementrian Pekerjaan Umum Dan Penataan Ruang </span></h1>
    <div class="container">
        <div class="card" style="
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 20px auto;
            align-items: center;
            "
            >


            {{-- ------------------------------------ FITUR TAMBAHAN ------------- --}}

            <div class="controls" style="  
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-radius:5px;
            ">
<div class="show-entries" style="border-radius: 10px;">
    <label for="entries" style="margin-right: 5px;">
        <style>
          
         
          /* Untuk memastikan tata letak responsif, Anda bisa menggunakan media queries */
@media (min-width: 768px) {
    .badge {
                background: linear-gradient(to right, yellow, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 10px;
                text-align: center;
                font-size: 12px;
                margin-right: 400px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background: white;
                color: black;
                background: white;
            }

    .badgeupdate {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badgeupdate:hover {
                background: white;
                color: black;
                background: white;
            }
            
    .badgenewupdate {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badgenewupdate:hover {
                background: white;
                color: black;
                background: white;
            }

    
    .badgedownload {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 8px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgedownload:hover {
                background: white;
                color: black;
                background: white;
            }
    
    .badgekembali {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgekembali:hover {
                background: white;
                color: black;
                background: white;
            }
    
    .badgehidden {
                background: linear-gradient(to right, white, white);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
    
}

        </style>
        <a style="background: white;">
            <div class="badgedownload" style="margin-right: 400px;"><i class="fas fa-plus-circle mr-2"></i>Create Data Pekerja Jasa Konstruksi</div>
        </a>
        
        <a href="/beskktenagakerja" style="background: white;">
            <button class="badgekembali" style="border: none; font-size:12px; cursor:pointer;">
                <i class="fas fa-arrow-circle-left mr-2"></i>Kembali
            </button>
        </a>
        
        <br>
                {{-- ========================================= --}}

        <style>
            
@media (min-width: 768px) {

            .container-update {
                /* margin-top: 500px; */
                width: 920px;
                height: 170vh;
                margin: 0 auto;
                padding: 20px;
                background-color: #E0E0E0; /* Warna silver */
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            /* Style untuk .form-group */
            .form-group {
                margin-bottom: 1rem; /* Jarak antar form group */
            }

            /* Style untuk .form-group-inner */
            .form-group-inner {
                display: flex;
                align-items: center; /* Vertikal center alignment */
                margin-bottom: 0.5rem;
            }

            .form-group-inner label {
                flex: 1;
                margin-right: 1rem; /* Jarak antara label dan input */
                text-align: left; /* Label teks rata kiri */
            }

            .form-group-inner input {
                flex: 4;
            }

            .success-message {
                color: green;
                margin-bottom: 20px;
            }

            .preview-container {
            display: flex;
            align-items: center;
        }

        .img-preview {
            max-width: 100px;
            max-height: 100px;
            margin-right: 10px;
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

            

        }
        </style>
    
<br>
        <div class="container-update" style="col-lg-12">
            <!-- Menampilkan pesan sukses jika ada -->
            {{-- <form action="/beritaagendaupdatestore/{{$beritaagenda->nama_agenda}}" method="POST"> --}}
                <form action="/newtenagakerjastore" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('POST')
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="nama" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-user-circle me-2"></i> Nama Lengkap
                        </label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="tanggal_lahir" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-user-circle me-2"></i> Tanggal Lahir
                        </label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="pengawasanlokasi_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-map-marker-alt me-2"></i> Kecamatan
                        </label>
                        <select class="form-control" id="pengawasanlokasi_id" name="pengawasanlokasi_id" required>
                            <option value="" disabled selected>PILIH KECAMATAN</option>
                            @foreach ($datapengawasanlokasi as $lokasi)
                                <option value="{{ $lokasi->id }}">
                                    {{ $lokasi->kota }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="keterampilanpekerja_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-cogs me-2"></i> Keterampilan
                        </label>
                        <select class="form-control" id="keterampilanpekerja_id" name="keterampilanpekerja_id" required>
                            <option value="" disabled selected>PILIH KETERAMPILAN</option>
                            @foreach ($dataketerampilan as $keterampilan)
                                <option value="{{ $keterampilan->id }}">
                                    {{ $keterampilan->keterampilan }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="tahunpilihan_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-calendar-alt me-2"></i> Tahun Bimtek
                        </label>
                        <select class="form-control" id="tahunpilihan_id" name="tahunpilihan_id" required>
                            <option value="" disabled selected>PILIH TAHUN BIMBINGAN TEKNIS</option>
                            @foreach ($datatahunpilihan as $tahun)
                                <option value="{{ $tahun->id }}">
                                    {{ $tahun->tahun }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="desa" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-home me-2"></i> Desa
                        </label>
                        <input type="text" class="form-control" id="desa" name="desa" required>
                    </div>
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="alamat" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-address-card me-2"></i> Alamat
                        </label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="nik" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-id-card me-2"></i> NIK
                        </label>
                        <input type="number" class="form-control" id="nik" name="nik" required>
                    </div>
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="kualifikasi" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-graduation-cap me-2"></i> Kualifikasi
                        </label>
                        <select class="form-control" id="kualifikasi" name="kualifikasi" required>
                            <option value="" disabled selected>STATUS KUALIFIKASI</option>
                            <option value="SUDAH">SUDAH</option>
                            <option value="BELUM">BELUM</option>
                        </select>
                    </div>
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="registrasi" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-registered me-2"></i> Registrasi
                        </label>
                        <select class="form-control" id="registrasi" name="registrasi" required>
                            <option value="" disabled selected>STATUS REGISTRASI</option>
                            <option value="SUDAH">SUDAH</option>
                            <option value="BELUM">BELUM</option>
                        </select>
                    </div>

{{-- ------------------------------------------------------------------------------------------------------------- --}}

                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="foto" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-image me-2"></i> Pas Photo
                        </label>
                        <div class="preview-container">
                            <img id="foto-preview" src="#" alt="Preview" class="img-preview" style="max-width: 100px; margin-right: 10px; display: none;" />
                            <input type="file" id="foto" name="foto" accept="image/*" required> <!-- Added required -->
                        </div>
                    </div>
                
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const fileInput = document.getElementById('foto');
                            const preview = document.getElementById('foto-preview');
                
                            fileInput.addEventListener('change', function(event) {
                                const file = event.target.files[0];
                                if (file) {
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        preview.src = e.target.result;
                                        preview.style.display = 'block'; // Show the preview
                                    };
                                    reader.readAsDataURL(file);
                                } else {
                                    preview.style.display = 'none'; // Hide the preview if no file is selected
                                }
                            });
                        });
                    </script>

                    
{{-- ------------------------------------------------------------------------------------------------------------- --}}

{{-- ------------------------------------------------------------------------------------------------------------- --}}

                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="kta_gatensi" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-image me-2"></i> KTA Gatensi
                        </label>
                        <div class="preview-container">
                            <img id="kta_gatensi-preview" src="#" alt="Preview" class="img-preview" style="max-width: 100px; margin-right: 10px; display: none;" />
                            <input type="file" id="kta_gatensi" name="kta_gatensi" accept="image/*" required> <!-- Added required -->
                        </div>
                    </div>
                
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const fileInput = document.getElementById('kta_gatensi');
                            const preview = document.getElementById('kta_gatensi-preview');
                
                            fileInput.addEventListener('change', function(event) {
                                const file = event.target.files[0];
                                if (file) {
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        preview.src = e.target.result;
                                        preview.style.display = 'block'; // Show the preview
                                    };
                                    reader.readAsDataURL(file);
                                } else {
                                    preview.style.display = 'none'; // Hide the preview if no file is selected
                                }
                            });
                        });
                    </script>

                    
{{-- ------------------------------------------------------------------------------------------------------------- --}}

{{-- ------------------------------------------------------------------------------------------------------------- --}}

                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="skk_pekerja" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-image me-2"></i> SKK Pekerja
                        </label>
                        <div class="preview-container">
                            <img id="skk_pekerja-preview" src="#" alt="Preview" class="img-preview" style="max-width: 100px; margin-right: 10px; display: none;" />
                            <input type="file" id="skk_pekerja" name="skk_pekerja" accept="image/*" required> <!-- Added required -->
                        </div>
                    </div>
                
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const fileInput = document.getElementById('skk_pekerja');
                            const preview = document.getElementById('skk_pekerja-preview');
                
                            fileInput.addEventListener('change', function(event) {
                                const file = event.target.files[0];
                                if (file) {
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        preview.src = e.target.result;
                                        preview.style.display = 'block'; // Show the preview
                                    };
                                    reader.readAsDataURL(file);
                                } else {
                                    preview.style.display = 'none'; // Hide the preview if no file is selected
                                }
                            });
                        });
                    </script>

                    
{{-- ------------------------------------------------------------------------------------------------------------- --}}

{{-- ------------------------------------------------------------------------------------------------------------- --}}

                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="foto_kegiatanpekerja1" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-image me-2"></i> Foto Dokumentasi Pekerja 1 
                        </label>
                        <div class="preview-container">
                            <img id="foto_kegiatanpekerja1-preview" src="#" alt="Preview" class="img-preview" style="max-width: 100px; margin-right: 10px; display: none;" />
                            <input type="file" id="foto_kegiatanpekerja1" name="foto_kegiatanpekerja1" accept="image/*" required> <!-- Added required -->
                        </div>
                    </div>
                
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const fileInput = document.getElementById('foto_kegiatanpekerja1');
                            const preview = document.getElementById('foto_kegiatanpekerja1-preview');
                
                            fileInput.addEventListener('change', function(event) {
                                const file = event.target.files[0];
                                if (file) {
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        preview.src = e.target.result;
                                        preview.style.display = 'block'; // Show the preview
                                    };
                                    reader.readAsDataURL(file);
                                } else {
                                    preview.style.display = 'none'; // Hide the preview if no file is selected
                                }
                            });
                        });
                    </script>

                    
{{-- ------------------------------------------------------------------------------------------------------------- --}}

                

{{-- ------------------------------------------------------------------------------------------------------------- --}}

                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="foto_kegiatanpekerja2" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-image me-2"></i> Foto Dokumentasi Pekerja 2
                        </label>
                        <div class="preview-container">
                            <img id="foto_kegiatanpekerja2-preview" src="#" alt="Preview" class="img-preview" style="max-width: 100px; margin-right: 10px; display: none;" />
                            <input type="file" id="foto_kegiatanpekerja2" name="foto_kegiatanpekerja2" accept="image/*" required> <!-- Added required -->
                        </div>
                    </div>
                
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            const fileInput = document.getElementById('foto_kegiatanpekerja2');
                            const preview = document.getElementById('foto_kegiatanpekerja2-preview');
                
                            fileInput.addEventListener('change', function(event) {
                                const file = event.target.files[0];
                                if (file) {
                                    const reader = new FileReader();
                                    reader.onload = function(e) {
                                        preview.src = e.target.result;
                                        preview.style.display = 'block'; // Show the preview
                                    };
                                    reader.readAsDataURL(file);
                                } else {
                                    preview.style.display = 'none'; // Hide the preview if no file is selected
                                }
                            });
                        });
                    </script>

                    
{{-- ------------------------------------------------------------------------------------------------------------- --}}

                
                                        
                    <div class="form-group">
                        <button style="float: right" class="badgenewupdate btn btn-primary" type="submit">
                            <i class="fas fa-paper-plane mr-2"></i>Simpan
                        </button>
                    </div>
                </form>
                
        </div>


        {{-- ========================================= --}}

        {{-- @foreach ($data as $items )
                    
                <a href="/peruud/{{$items->peraturan}}" style="background: white;">
                    <button class="badgeupdate" style="border: none; font-size:12px; cursor:pointer; "> <i class="fas fa-file" style="margin-right: 5px;"></i> Update</button>
                </a>
                @endforeach
                        <button class="badgeupdate" style="border: none; font-size:12px; cursor:pointer; "> <i class="fas fa-file" style="margin-right: 5px;"></i> Update</button> --}}
                        <!-- <button id="downloadBtn" class="badge" style="border:none; font-size:12px; cursor:pointer "> <i class="fas fa-download"></i> Download</button> -->
                        
      

</div>

    
</div>
</div>

             

        </div>

        
                
        </div>
        <hr style="border:0; height:5px; background-color:navy; margin: 20px 0px;">
        @include('backend.00_dashboard.part.menufooter')
    </div>
</div>
        </div>
        
        <!--Main Content-->
        
    </div>
    @include('backend.00_dashboard.part.footer')
    

    