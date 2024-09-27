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
    height: 135vh;
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
            <div class="badgekembali" style="margin-right:400px;"><i class="fas fa-plus mr-2"></i>Create Asosiasi Pengusaha Jasa Konstruksi </div></label>
        </a>
        
        <a href="/asosiasipengusaha" style="background: white;">
            <button class="badgekembali" style="border: none; font-size:12px; cursor:pointer; "> <i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</button>
        </a>

        <br>
                {{-- ========================================= --}}

        <style>
            
@media (min-width: 768px) {

            .container-update {
                /* margin-top: 500px; */
                width: 920px;
                height: 95vh;
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
                {{-- <form action="{{ route('create.pengawasandanketertiban') }}" method="POST">
                    @csrf --}}
                    <form action="{{ route('create.asosiasipengusaha') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('post')
                        <!-- No method needed for create since we're using POST -->
                    
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="nama_asosiasi" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                                <i class="fas fa-building me-2"></i> Nama Asosiasi
                            </label>
                            <input style="text-transform: uppercase;" type="text" id="nama_asosiasi" name="nama_asosiasi" class="form-control" required>
                        </div>
                    
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="alamat_kantor" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                                <i class="fas fa-map-marker-alt me-2"></i> Alamat Kantor
                            </label>
                            <input style="text-transform: uppercase;" type="text" id="alamat_kantor" name="alamat_kantor" class="form-control" required>
                        </div>
                    
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="kota" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                                <i class="fas fa-city me-2"></i> Kec/Kota
                            </label>
                            <input style="text-transform: uppercase;" type="text" id="kota" name="kota" class="form-control" required>
                        </div>
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="provinsi" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                                <i class="fas fa-map me-2"></i> PROVINSI
                            </label>
                            <select id="provinsi" name="provinsi" class="form-control" required>
                                <option value="" disabled selected>PILIH PROVINSI</option>
                                <option value="ACEH">ACEH</option>
                                <option value="SUMATERA UTARA">SUMATERA UTARA</option>
                                <option value="SUMATERA BARAT">SUMATERA BARAT</option>
                                <option value="RIAU">RIAU</option>
                                <option value="JAMBI">JAMBI</option>
                                <option value="SUMATERA SELATAN">SUMATERA SELATAN</option>
                                <option value="BENGKULU">BENGKULU</option>
                                <option value="LAMPUNG">LAMPUNG</option>
                                <option value="KEPULAUAN BANGKA BELITUNG">KEPULAUAN BANGKA BELITUNG</option>
                                <option value="KEPULAUAN RIAU">KEPULAUAN RIAU</option>
                                <option value="DKI JAKARTA">DKI JAKARTA</option>
                                <option value="JAWA BARAT">JAWA BARAT</option>
                                <option value="JAWA TENGAH">JAWA TENGAH</option>
                                <option value="DI YOGYAKARTA">DI YOGYAKARTA</option>
                                <option value="JAWA TIMUR">JAWA TIMUR</option>
                                <option value="BANTEN">BANTEN</option>
                                <option value="BALI">BALI</option>
                                <option value="NUSA TENGGARA BARAT">NUSA TENGGARA BARAT</option>
                                <option value="NUSA TENGGARA TIMUR">NUSA TENGGARA TIMUR</option>
                                <option value="KALIMANTAN BARAT">KALIMANTAN BARAT</option>
                                <option value="KALIMANTAN TENGAH">KALIMANTAN TENGAH</option>
                                <option value="KALIMANTAN SELATAN">KALIMANTAN SELATAN</option>
                                <option value="KALIMANTAN TIMUR">KALIMANTAN TIMUR</option>
                                <option value="KALIMANTAN UTARA">KALIMANTAN UTARA</option>
                                <option value="SULAWESI UTARA">SULAWESI UTARA</option>
                                <option value="SULAWESI TENGAH">SULAWESI TENGAH</option>
                                <option value="SULAWESI SELATAN">SULAWESI SELATAN</option>
                                <option value="SULAWESI BARAT">SULAWESI BARAT</option>
                                <option value="GORONTALO">GORONTALO</option>
                                <option value="SULAWESI TENGGARA">SULAWESI TENGGARA</option>
                                <option value="MALUKU">MALUKU</option>
                                <option value="MALUKU UTARA">MALUKU UTARA</option>
                                <option value="PAPUA BARAT">PAPUA BARAT</option>
                                <option value="PAPUA">PAPUA</option>
                            </select>
                        </div>
                        
                                                
                    
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="kontak" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                                <i class="fas fa-phone me-2"></i> Kontak
                            </label>
                            <input style="text-transform: uppercase;" type="number" id="kontak" name="kontak" class="form-control" required>
                        </div>
                    
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="email" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                                <i class="fas fa-envelope me-2"></i> Email
                            </label>
                            <input type="text" id="email" name="email" class="form-control" required>
                        </div>
                    
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="website" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                                <i class="fas fa-globe me-2"></i> Website
                            </label>
                            <input type="text" id="website" name="website" class="form-control" required>
                        </div>
                    
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="kepala_asosiasi" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                                <i class="fas fa-user-tie me-2"></i> Kepala Asosiasi
                            </label>
                            <input style="text-transform: uppercase;" type="text" id="kepala_asosiasi" name="kepala_asosiasi" class="form-control" required>
                        </div>
                    
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="jumlah_anggota" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                                <i class="fas fa-users me-2"></i> Jumlah Anggota
                            </label>
                            <input style="text-transform: uppercase;" type="number" id="jumlah_anggota" name="jumlah_anggota" class="form-control" required>
                        </div>
                    
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="status" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                                <i class="fas fa-check-circle me-2"></i> Status
                            </label>
                            <select id="status" name="status" required class="form-control">
                                <option value="" disabled selected>PILIH STATUS</option>
                                <option value="AKTIF">AKTIF</option>
                                <option value="TIDAK AKTIF">TIDAK AKTIF</option>
                            </select>
                        </div>
                    
                        <div class="form-group d-flex align-items-center mt-3">
                            <label for="foto_asosiasi" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                                <i class="fas fa-image me-2"></i> Logo Asosiasi Pengusaha
                            </label>
                            <div class="preview-container">
                                <img id="foto_asosiasi-preview" src="#" alt="Preview" class="img-preview" style="max-width: 100px; margin-right: 10px; display: none;" />
                                <input type="file" id="foto_asosiasi" name="foto_asosiasi" accept="image/*">
                            </div>
                        </div>
                    
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const fileInput = document.getElementById('foto_asosiasi');
                                const preview = document.getElementById('foto_asosiasi-preview');
                    
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
                    
                        <div class="form-group">
                            <button style="float: right" class="badgenewupdate" type="submit">
                                <i class="fab fa-telegram" style="margin-right:10px;"></i> Create
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
    

    