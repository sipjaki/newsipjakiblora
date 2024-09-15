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
    height: 110vh;
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
            <div class="badge"><i class="fas fa-file mr-2"></i>Update Data Paket Pekerjaan </div></label>
        </a>
        <a style="background: white;">
            <div class="badgehidden" style="color: white"><i class="fas fa-file mr-2"></i>........ ........ ........ ........ ........ ........</div></label>
        </a>
        <a style="background: white;">
            <div class="badgehidden" style="color: white"><i class="fas fa-file mr-2"></i>........ ........ ........ ........ ........ ........</div></label>
        </a>
        <a href="/paketpekerjaan" style="background: white;">
            <button class="badgekembali" style="border: none; font-size:12px; cursor:pointer; "> <i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</button>
        </a>

        <br>
                {{-- ========================================= --}}

        <style>
            
@media (min-width: 768px) {

            .container-update {
                /* margin-top: 500px; */
                width: 920px;
                height: 70vh;
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
            @if (session('success'))
                <p class="success-message">{{ session('success') }}</p>
            @endif
    
            <form action="{{ route('updatestore.paketpekerjaan', $datapaketpekerjaan->instansi) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('POST') <!-- Ubah menjadi PUT jika ini adalah update -->
            
                <div class="form-group">
                    <div class="form-group-inner">
                        <label for="instansi" style="font-size:14px;"><i class="fas fa-file me-2"></i> Instansi</label>
                        <input type="text" id="instansi" name="instansi" value="{{ old('instansi', $datapaketpekerjaan->instansi) }}" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="form-group-inner">
                        <label for="jumlah_pagu" style="font-size:14px;"><i class="fas fa-file me-2"></i> Jumlah Pagu</label>
                        <input type="text" id="jumlah_pagu" name="jumlah_pagu" value="{{ old('jumlah_pagu', number_format($datapaketpekerjaan->jumlah_pagu)) }}" required>
                    </div>
                </div>
            
                <script>
                    function formatRupiah(angka, prefix) {
                        var number_string = angka.replace(/[^,\d]/g, '').toString(),
                            split = number_string.split(','),
                            sisa = split[0].length % 3,
                            rupiah = split[0].substr(0, sisa),
                            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
                            
                        if (ribuan) {
                            separator = sisa ? '.' : '';
                            rupiah += separator + ribuan.join('.');
                        }
            
                        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                    }
            
                    const input = document.getElementById('jumlah_pagu');
            
                    input.addEventListener('input', function(e) {
                        let value = e.target.value;
                        e.target.value = formatRupiah(value, 'Rp. ');
                    });
            
                    input.addEventListener('blur', function(e) {
                        let value = e.target.value;
                        e.target.value = value.replace(/[^,\d]/g, '');
                    });
            
                    document.querySelector('form').addEventListener('submit', function(e) {
                        let input = document.getElementById('jumlah_pagu');
                        input.value = input.value.replace(/[^,\d]/g, '');
                    });
                </script>
                            
            

           <!-- Include the form HTML with proper ID and class attributes -->


           <div class="form-group">
            <div class="form-group-inner">
                <label for="metodepengadaan_id" style="font-size:14px;">
                    <i class="fas fa-file me-2"></i> Status
                </label>
                <select id="metodepengadaan_id" name="metodepengadaan_id" required class="form-control" style="width: 600px;">
                    <!-- Menetapkan nilai yang dipilih dari data -->
                    @foreach ($datametodepengadaan as $databaru)
                        <option value="{{ $databaru->id }}" {{ $databaru->id == $datapaketpekerjaan->metodepengadaan_id ? 'selected' : '' }}>
                            {{ $databaru->metode }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        
                <div class="form-group">
                    <div class="form-group-inner">
                        <label for="pekerjaan" style="font-size:14px;"><i class="fas fa-file me-2"></i> Pekerjaan</label>
                        <input type="text" id="pekerjaan" name="pekerjaan" value="{{ old('pekerjaan', $datapaketpekerjaan->pekerjaan) }}" required>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="form-group-inner">
                        <label for="tahun" style="font-size:14px;"><i class="fas fa-file me-2"></i> Tahun Anggaran </label>
                        <select  id="tahun" name="tahun" required class="form-control" style="width: 600px;">
                            @foreach (range(2021, 2029) as $year)
                            <option value="{{ $year }}" {{ $year == old('tahun', $datapaketpekerjaan->tahun) ? 'selected' : '' }}>
                                    {{ $year }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                
                        <div class="form-group">
                            <div class="form-group-inner">
                                <label for="progress_fisik" style="font-size:14px;"><i class="fas fa-file me-2"></i> progress_fisik</label>
                                <input type="text" id="progress_fisik" name="progress_fisik" value="{{ old('progress_fisik', $datapaketpekerjaan->progress_fisik) }}" required>
                            </div>
                        </div>
                
                <div class="form-group">
                    <div class="form-group-inner">
                        <label for="foto_pekerjaan" style="font-size:14px;"><i class="fas fa-file me-2"></i> Foto Pekerjaan</label>
                        <div class="preview-container">
                            <img id="foto_pekerjaan-preview" src="{{ asset('storage/' . $datapaketpekerjaan->foto_pekerjaan) }}" alt="Preview" class="img-preview" />
                            <input type="file" id="foto_pekerjaan" name="foto_pekerjaan" accept="image/*">
                        </div>
                    </div>
                </div>
            
                {{-- <hr style="border: 1px solid #000000"> --}}
                <div class="form-group">
                    <button style="float: right" class="badgenewupdate" type="submit"><i class="fab fa-telegram" style="margin-right:10px;"></i> Update</button>
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
    

    