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
    height: 245vh;
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
                background: linear-gradient(to right, blue, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 10px;
                text-align: center;
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background-color: white;
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
                background-color: white;
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
                background-color: white;
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
                background-color: white;
                color: black;
                background: white;
            }
    
    .savedata {
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
                float: right;
            }
            .savedata:hover {
                background-color: white;
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
            <div class="badge"><i class="fas fa-plus-circle mr-2"></i> Create Dokumentasi Pelatihan Pekerja Konstruksi</div>
        </a>
        <a style="background: white;">
            <div class="badgehidden" style="color: white;">
                <i class="fas fa-file-alt mr-2"></i> ........ ........ ........ ........ ........ ................  ........  ........ ........ ........ ........ ........
            </div>
        </a>
        <a href="/dokumentasipelatihan" style="background: white;">
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
                width: 900px;
                height: 200vh;
                margin: 0 auto;
                padding: 20px;
                background-color: #f0f0f0; /* Warna silver */
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .form-group {
                /* margin-top: 150px; */
                /* margin-bottom: 15px; */
            }
            .form-group label {
                display: block;
                margin-bottom: 8px;
            }
            .form-group input[type="text"],
            .form-group input[type="file"] {
                width: 100%;
                padding: 8px;
                box-sizing: border-box;
            }
            .form-group textarea {
                width: 100%;
                padding: 8px;
                box-sizing: border-box;
                resize: vertical;
            }
            .form-group button {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
                border-radius: 5px;
            }
            .form-group button:hover {
                background-color: #45a049;
            }
            .success-message {
                color: green;
                margin-bottom: 20px;
            }

        }
        </style>
    
<br>
        <div class="container-update" style="col-lg-12">
            <!-- Menampilkan pesan sukses jika ada -->
                
            {{-- <h2>Create New Peraturan</h2> --}}
            <form action="{{ route('newcreatestore.dokumentasipelatihan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="judul_kegiatan" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-file-alt me-2"></i> Judul Kegiatan
                    </label>
                    <input type="text" class="form-control" id="judul_kegiatan" name="judul_kegiatan" value="{{ old('judul_kegiatan') }}" required>
                    @if ($errors->has('judul_kegiatan'))
                        <div class="text-danger">{{ $errors->first('judul_kegiatan') }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="pengawasanlokasi_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-map-marker-alt me-2"></i> Lokasi Sertifikasi
                    </label>
                    <select class="form-control" id="pengawasanlokasi_id" name="pengawasanlokasi_id" required>
                        <option value="" disabled selected>PILIH LOKASI</option>
                        @foreach ($datapengawasanlokasi as $lokasi)
                            <option value="{{ $lokasi->id }}" {{ old('pengawasanlokasi_id') == $lokasi->id ? 'selected' : '' }}>
                                {{ $lokasi->kota }}
                            </option>
                        @endforeach
                    </select>
                    @if ($errors->has('pengawasanlokasi_id'))
                        <div class="text-danger">{{ $errors->first('pengawasanlokasi_id') }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="user_id" class="mr-3" style="width: 200px; text-align:left;">
                        <i class="fas fa-user me-2"></i> Penulis
                    </label>
                    <input type="text" class="form-control" id="user_id_display" value="{{ $user->username }}" readonly>
                    <input type="hidden" id="user_id" name="user_id" value="{{ $user->id }}">
                    @if ($errors->has('user_id'))
                        <div class="text-danger">{{ $errors->first('user_id') }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="alamat_kegiatan" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-map-signs me-2"></i> Alamat Kegiatan 
                    </label>
                    <input type="text" class="form-control" id="alamat_kegiatan" name="alamat_kegiatan" value="{{ old('alamat_kegiatan') }}" required>
                    @if ($errors->has('alamat_kegiatan'))
                        <div class="text-danger">{{ $errors->first('alamat_kegiatan') }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="tanggal" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-calendar-alt me-2"></i> Tanggal Kegiatan 
                    </label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
                    @if ($errors->has('tanggal'))
                        <div class="text-danger">{{ $errors->first('tanggal') }}</div>
                    @endif
                </div>
            
                {{-- Loop untuk Upload Gambar Kegiatan --}}
                {{-- @for ($i = 1; $i <= 48; $i++) --}}
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita1" class="mr-3" style="width: 200px; text-align:left; font-size:14px;" >
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita1" name="berita1" accept="image/*" required style="max-width: 300px;" value="{{ old('berita1') }}">
                    @if ($errors->has("berita1"))
                        <div class="text-danger">{{ $errors->first("berita1") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita2" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita2" name="berita2" accept="image/*" required style="max-width: 300px;" value="{{ old('berita2') }}">
                    @if ($errors->has("berita2"))
                        <div class="text-danger">{{ $errors->first("berita2") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita3" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita3" name="berita3" accept="image/*" required style="max-width: 300px;" value="{{ old('berita3') }}">
                    @if ($errors->has("berita3"))
                        <div class="text-danger">{{ $errors->first("berita3") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita4" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita4" name="berita4" accept="image/*" required style="max-width: 300px;" value="{{ old('berita4') }}">
                    @if ($errors->has("berita4"))
                        <div class="text-danger">{{ $errors->first("berita4") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita5" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita5" name="berita5" accept="image/*" required style="max-width: 300px;" value="{{ old('berita5') }}">
                    @if ($errors->has("berita5"))
                        <div class="text-danger">{{ $errors->first("berita5") }}</div>
                    @endif
                </div>

                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita6" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita6" name="berita6" accept="image/*" required style="max-width: 300px;" value="{{ old('berita6') }}">
                    @if ($errors->has("berita6"))
                        <div class="text-danger">{{ $errors->first("berita6") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita7" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita7" name="berita7" accept="image/*" required style="max-width: 300px;" value="{{ old('berita7') }}">
                    @if ($errors->has("berita7"))
                        <div class="text-danger">{{ $errors->first("berita7") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita8" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita8" name="berita8" accept="image/*" required style="max-width: 300px;" value="{{ old('berita8') }}">
                    @if ($errors->has("berita8"))
                        <div class="text-danger">{{ $errors->first("berita8") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita9" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita9" name="berita9" accept="image/*" required style="max-width: 300px;" value="{{ old('berita9') }}">
                    @if ($errors->has("berita9"))
                        <div class="text-danger">{{ $errors->first("berita9") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita10" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita10" name="berita10" accept="image/*" required style="max-width: 300px;" value="{{ old('berita10') }}">
                    @if ($errors->has("berita10"))
                        <div class="text-danger">{{ $errors->first("berita10") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita11" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita11" name="berita11" accept="image/*" required style="max-width: 300px;" value="{{ old('berita11') }}">
                    @if ($errors->has("berita11"))
                        <div class="text-danger">{{ $errors->first("berita11") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita12" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita12" name="berita12" accept="image/*" required style="max-width: 300px;" value="{{ old('berita12') }}">
                    @if ($errors->has("berita12"))
                        <div class="text-danger">{{ $errors->first("berita12") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita13" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita13" name="berita13" accept="image/*" required style="max-width: 300px;" value="{{ old('berita13') }}">
                    @if ($errors->has("berita13"))
                        <div class="text-danger">{{ $errors->first("berita13") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita14" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita14" name="berita14" accept="image/*" required style="max-width: 300px;" value="{{ old('berita14') }}">
                    @if ($errors->has("berita14"))
                        <div class="text-danger">{{ $errors->first("berita14") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita15" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita15" name="berita15" accept="image/*" required style="max-width: 300px;" value="{{ old('berita15') }}">
                    @if ($errors->has("berita15"))
                        <div class="text-danger">{{ $errors->first("berita15") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita16" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita16" name="berita16" accept="image/*" required style="max-width: 300px;" value="{{ old('berita16') }}">
                    @if ($errors->has("berita16"))
                        <div class="text-danger">{{ $errors->first("berita16") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita17" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita17" name="berita17" accept="image/*" required style="max-width: 300px;" value="{{ old('berita17') }}">
                    @if ($errors->has("berita17"))
                        <div class="text-danger">{{ $errors->first("berita17") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita18" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita18" name="berita18" accept="image/*" required style="max-width: 300px;" value="{{ old('berita18') }}">
                    @if ($errors->has("berita18"))
                        <div class="text-danger">{{ $errors->first("berita18") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita19" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita19" name="berita19" accept="image/*" required style="max-width: 300px;" value="{{ old('berita19') }}">
                    @if ($errors->has("berita19"))
                        <div class="text-danger">{{ $errors->first("berita19") }}</div>
                    @endif
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita20" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita20" name="berita20" accept="image/*" required style="max-width: 300px;" value="{{ old('berita20') }}">
                    @if ($errors->has("berita20"))
                        <div class="text-danger">{{ $errors->first("berita20") }}</div>
                    @endif
                </div>
{{--                 
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="laporanfoto1" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar 
                    </label>
                    <input type="file" class="form-control" id="laporanfoto1" name="laporanfoto1" accept="image/*" required style="max-width: 300px;" value="{{ old('berita20') }}">
                    @if ($errors->has("laporanfoto1"))
                        <div class="text-danger">{{ $errors->first("laporanfoto1") }}</div>
                    @endif
                </div> --}}

                {{-- @for ($i = 1; $i <= 28; $i++)
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="laporanfoto{{ $i }}" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="laporanfoto{{ $i }}" name="laporanfoto{{ $i }}" accept="image/*" required style="max-width: 300px;">
                    @if ($errors->has("laporanfoto{$i}"))
                        <div class="text-danger">{{ $errors->first("laporanfoto{$i}") }}</div>
                    @endif
                </div>
            @endfor --}}


{{--             
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto1" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                </label>
                <input type="file" class="form-control" id="laporanfoto1" name="laporanfoto1" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto1') }}">
                @if ($errors->has("laporanfoto1"))
                    <div class="text-danger">{{ $errors->first("laporanfoto1") }}</div>
                @endif
            </div>
            

            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto2" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 2
                </label>
                <input type="file" class="form-control" id="laporanfoto2" name="laporanfoto2" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto2') }}">
                @if ($errors->has("laporanfoto2"))
                    <div class="text-danger">{{ $errors->first("laporanfoto2") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto3" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 3
                </label>
                <input type="file" class="form-control" id="laporanfoto3" name="laporanfoto3" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto3') }}">
                @if ($errors->has("laporanfoto3"))
                    <div class="text-danger">{{ $errors->first("laporanfoto3") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto4" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 4
                </label>
                <input type="file" class="form-control" id="laporanfoto4" name="laporanfoto4" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto4') }}">
                @if ($errors->has("laporanfoto4"))
                    <div class="text-danger">{{ $errors->first("laporanfoto4") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto5" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 5
                </label>
                <input type="file" class="form-control" id="laporanfoto5" name="laporanfoto5" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto5') }}">
                @if ($errors->has("laporanfoto5"))
                    <div class="text-danger">{{ $errors->first("laporanfoto5") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto6" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 6
                </label>
                <input type="file" class="form-control" id="laporanfoto6" name="laporanfoto6" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto6') }}">
                @if ($errors->has("laporanfoto6"))
                    <div class="text-danger">{{ $errors->first("laporanfoto6") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto7" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 7
                </label>
                <input type="file" class="form-control" id="laporanfoto7" name="laporanfoto7" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto7') }}">
                @if ($errors->has("laporanfoto7"))
                    <div class="text-danger">{{ $errors->first("laporanfoto7") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto8" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 8
                </label>
                <input type="file" class="form-control" id="laporanfoto8" name="laporanfoto8" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto8') }}">
                @if ($errors->has("laporanfoto8"))
                    <div class="text-danger">{{ $errors->first("laporanfoto8") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto9" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 9
                </label>
                <input type="file" class="form-control" id="laporanfoto9" name="laporanfoto9" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto9') }}">
                @if ($errors->has("laporanfoto9"))
                    <div class="text-danger">{{ $errors->first("laporanfoto9") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto10" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 10
                </label>
                <input type="file" class="form-control" id="laporanfoto10" name="laporanfoto10" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto10') }}">
                @if ($errors->has("laporanfoto10"))
                    <div class="text-danger">{{ $errors->first("laporanfoto10") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto11" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 11
                </label>
                <input type="file" class="form-control" id="laporanfoto11" name="laporanfoto11" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto11') }}">
                @if ($errors->has("laporanfoto11"))
                    <div class="text-danger">{{ $errors->first("laporanfoto11") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto12" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 12
                </label>
                <input type="file" class="form-control" id="laporanfoto12" name="laporanfoto12" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto12') }}">
                @if ($errors->has("laporanfoto12"))
                    <div class="text-danger">{{ $errors->first("laporanfoto12") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto13" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 13
                </label>
                <input type="file" class="form-control" id="laporanfoto13" name="laporanfoto13" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto13') }}">
                @if ($errors->has("laporanfoto13"))
                    <div class="text-danger">{{ $errors->first("laporanfoto13") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto14" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 14
                </label>
                <input type="file" class="form-control" id="laporanfoto14" name="laporanfoto14" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto14') }}">
                @if ($errors->has("laporanfoto14"))
                    <div class="text-danger">{{ $errors->first("laporanfoto14") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto15" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 15
                </label>
                <input type="file" class="form-control" id="laporanfoto15" name="laporanfoto15" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto15') }}">
                @if ($errors->has("laporanfoto15"))
                    <div class="text-danger">{{ $errors->first("laporanfoto15") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto16" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 16
                </label>
                <input type="file" class="form-control" id="laporanfoto16" name="laporanfoto16" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto16') }}">
                @if ($errors->has("laporanfoto16"))
                    <div class="text-danger">{{ $errors->first("laporanfoto16") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto17" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 17
                </label>
                <input type="file" class="form-control" id="laporanfoto17" name="laporanfoto17" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto17') }}">
                @if ($errors->has("laporanfoto17"))
                    <div class="text-danger">{{ $errors->first("laporanfoto17") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto18" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 18
                </label>
                <input type="file" class="form-control" id="laporanfoto18" name="laporanfoto18" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto18') }}">
                @if ($errors->has("laporanfoto18"))
                    <div class="text-danger">{{ $errors->first("laporanfoto18") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto19" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 19
                </label>
                <input type="file" class="form-control" id="laporanfoto19" name="laporanfoto19" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto19') }}">
                @if ($errors->has("laporanfoto19"))
                    <div class="text-danger">{{ $errors->first("laporanfoto19") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto20" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 20
                </label>
                <input type="file" class="form-control" id="laporanfoto20" name="laporanfoto20" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto20') }}">
                @if ($errors->has("laporanfoto20"))
                    <div class="text-danger">{{ $errors->first("laporanfoto20") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto21" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 21
                </label>
                <input type="file" class="form-control" id="laporanfoto21" name="laporanfoto21" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto21') }}">
                @if ($errors->has("laporanfoto21"))
                    <div class="text-danger">{{ $errors->first("laporanfoto21") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto22" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 22
                </label>
                <input type="file" class="form-control" id="laporanfoto22" name="laporanfoto22" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto22') }}">
                @if ($errors->has("laporanfoto22"))
                    <div class="text-danger">{{ $errors->first("laporanfoto22") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto23" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 23
                </label>
                <input type="file" class="form-control" id="laporanfoto23" name="laporanfoto23" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto23') }}">
                @if ($errors->has("laporanfoto23"))
                    <div class="text-danger">{{ $errors->first("laporanfoto23") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto24" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 24
                </label>
                <input type="file" class="form-control" id="laporanfoto24" name="laporanfoto24" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto24') }}">
                @if ($errors->has("laporanfoto24"))
                    <div class="text-danger">{{ $errors->first("laporanfoto24") }}</div>
                @endif
            </div>
            
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto25" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 25
                </label>
                <input type="file" class="form-control" id="laporanfoto25" name="laporanfoto25" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto25') }}">
                @if ($errors->has("laporanfoto25"))
                    <div class="text-danger">{{ $errors->first("laporanfoto25") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto26" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 26
                </label>
                <input type="file" class="form-control" id="laporanfoto26" name="laporanfoto26" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto26') }}">
                @if ($errors->has("laporanfoto26"))
                    <div class="text-danger">{{ $errors->first("laporanfoto26") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto27" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 27
                </label>
                <input type="file" class="form-control" id="laporanfoto27" name="laporanfoto27" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto27') }}">
                @if ($errors->has("laporanfoto27"))
                    <div class="text-danger">{{ $errors->first("laporanfoto27") }}</div>
                @endif
            </div>
            
            <div class="form-group d-flex align-items-center mt-3">
                <label for="laporanfoto28" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                    <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan 28
                </label>
                <input type="file" class="form-control" id="laporanfoto28" name="laporanfoto28" accept="image/*" required style="max-width: 300px;" value="{{ old('laporanfoto28') }}">
                @if ($errors->has("laporanfoto28"))
                    <div class="text-danger">{{ $errors->first("laporanfoto28") }}</div>
                @endif
            </div>
             --}}
            

                
                   
                {{-- @endfor --}}
            
                <div class="form-group">
                    <button style="float: right" class="badgenewupdate btn btn-primary" type="submit">
                        <i class="fas fa-paper-plane mr-2"></i>Create
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
    

        