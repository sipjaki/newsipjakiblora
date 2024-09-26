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
    height: 200vh;
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
            <div class="badge"><i class="fas fa-file mr-2"></i>Berita Acara Pelatihan Konstruksi Para Pekerja</div></label>
        </a>
        
        <a href="/acarapelatihan" style="background: white;">
            <button class="badgekembali" style="border: none; font-size:12px; cursor:pointer; "> <i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</button>
        </a>

        <br>
                {{-- ========================================= --}}

        <style>
            
    @media (min-width: 768px) {

            .container-update {
                /* margin-top: 500px; */
                width: 920px;
                height: 135vh;
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
            <form action="/acarapelatihanstore/{{$laporankegiatan->judul_kegiatan}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="kegiatanjaskon_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-calendar-alt me-2"></i> Agenda Sertifikasi 
                    </label>
                    <select class="form-control" id="kegiatanjaskon_id" name="kegiatanjaskon_id" required>
                        <option value="" disabled {{ old('kegiatanjaskon_id', $laporankegiatan->kegiatanjaskon_id) == '' ? 'selected' : '' }}>
                            PILIH AGENDA ACARA
                        </option>
                        @foreach ($datakegiatanjaskon as $item)
                            <option value="{{ $item->id }}" {{ old('kegiatanjaskon_id', $laporankegiatan->kegiatanjaskon_id) == $item->id ? 'selected' : '' }}>
                                {{ $item->judul_kegiatan }}
                            </option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="judul_kegiatan" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-pencil-alt me-2"></i> Judul Berita Acara
                    </label>
                    <input type="text" class="form-control" id="judul_kegiatan" name="judul_kegiatan" value="{{ old('judul_kegiatan', $laporankegiatan->judul_kegiatan) }}" required>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="user_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-pencil-alt me-2"></i> Penulis
                    </label>
                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{ old('user_id', $laporankegiatan->user->username) }}" required readonly>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="jabatan" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-user-tag me-2"></i> Jabatan
                    </label>
                    <input type="text" class="form-control" id="jabatan" name="jabatan" value="{{ old('jabatan', $laporankegiatan->jabatan) }}" required>
                </div>
            
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="tanggal" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-calendar me-2"></i> Tanggal
                    </label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $laporankegiatan->tanggal) }}" required>
                </div>
            
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="keterangan_berita" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-comment-dots me-2"></i> Keterangan Berita
                    </label>
                    <textarea class="form-control" id="keterangan_berita" name="keterangan_berita" rows="20" style="resize: vertical;" required>{{ old('keterangan_berita', $laporankegiatan->keterangan_berita) }}</textarea>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="gambar" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Foto Berita
                    </label>
                    
                    <div class="d-flex align-items-center">
                        <div class="preview-container">
                            <img id="gambar-preview" src="{{ asset('storage/' . $laporankegiatan->gambar) }}" alt="Preview" class="img-preview" style="width: 100px; height: 100px; object-fit: cover;"/>
                        </div>
                        <input type="file" id="gambar" name="gambar" accept="image/*" class="form-control-file ml-3">
                    </div>
                </div>
            
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const fileInput = document.getElementById('gambar');
                        const preview = document.getElementById('gambar-preview');
                    
                        fileInput.addEventListener('change', function(event) {
                            const file = event.target.files[0];
                            if (file) {
                                const reader = new FileReader();
                
                                reader.onload = function(e) {
                                    preview.src = e.target.result;
                                };
                
                                reader.readAsDataURL(file);
                            }
                        });
                    });
                </script>
            
                <div class="form-group">
                    <button style="float: right" class="badgenewupdate btn btn-primary" type="submit">
                        <i class="fab fa-telegram" style="margin-right:10px;"></i> Update
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
    

    