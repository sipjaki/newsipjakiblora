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
<!-- <div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">

</div> -->


    <!-- <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700; "><span style="color: #000000;"> Kementrian Pekerjaan Umum Dan Penataan Ruang </span></h1> -->
    <div class="container">
        <div class="card" style="
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 20px auto;">


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
            .badge {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 12px;
                margin-right: 10px;
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background: white;
                color: black;
            }
            .badge-update {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 12px;
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
                position: absolute; /* Tambahkan ini */
                top: 20px; /* Atur jarak dari atas jika diperlukan */
                right: 20px; /* Atur jarak dari kanan jika diperlukan */

            }

            .badge-update:hover {
                background: white;
                color: black;
            }

        </style>
        <a href="/paketpekerjaan" style="background: white;">
            <div class="badge"><i class="fas fa-arrow-left mr-2"></i> Kembali </div></label>
        </a>
        <a href="/paketpekerjaan/update/{{$data->instansi}}" style="background: white; display:right;">
            <div class="badge-update"><i class="fas fa-file mr-2"></i> Update </div></label>
        </a>
                        {{-- <button id="previewBtn" class="badge" style="border: none; font-size:12px; cursor:pointer "> <i class="fas fa-file" style="margin-right: 5px;"></i> Preview</button>
                        {{-- <button id="previewBtn" class="badge" style="border: none; font-size:12px; cursor:pointer "> <i class="fas fa-file" style="margin-right: 5px;"></i> Preview</button>
                        <button id="downloadBtn" class="badge" style="border:none; font-size:12px; cursor:pointer "> <i class="fas fa-download"></i> Download</button> --}}

</div>
{{-- <div class="search-entries">
    <style>
        .search-container {
            position: relative;
            display: inline-block;
        }
        .search-container input {
            border-radius: 15px;
            padding: 2px 5px 2px 25px; /* Extra padding for the icon */
        }
        .search-container .fa-search {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
    <div class="search-container">
        <input
            type="text"
            id="searchInput"
            onkeyup="searchEntries()"
            placeholder="  Search..">
        <i class="fas fa-search"></i>
    </div>

    <script>
        function searchEntries() {
            // Your JavaScript function for searching entries
        }
    </script>
</div> --}}
</div>

<style>
    table {
        width: 100%;
        border-collapse: collapse;
        border: none;
    }

    th, td {
        font-family: 'Lato', sans-serif;
        font-weight: 700;
        color: black;
        font-size: 12px;
        border: 1px solid #ddd;
        padding: 8px;
        border-radius: 0px 10px 10px 0px;
        border: none;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
        font-size: 12px;
        border-radius: 10px 0px 0px 10px;
        border: none;
    }

    th {
        /* background-color: #4CAF50; */
        /* background: linear-gradient(to bottom, #000000, #FFCB0F); */
        background-color:  #FFCB0F;
        color: black;
        font-size: 14px;
        border-radius: 10px 0px 0px 10px;
        border: none;
    }
</style>

 <table id="datakeluar" style="width: 100%; border-collapse: collapse;">
    <thead>
        <tr>
            <th colspan="2" style="background-color: #FFCB0F; text-align: center; font-size: 16px;">Data Paket Pekerjaan | Pemerintah Kabupaten Bandung Barat</th>
        </tr>
    </thead>
    <tbody>
        <!-- Menyimpan nama data dalam elemen data -->
        <div id="dataContainer" data-nama="{{ $data->instansi }}" style="display: none;"></div>

        <tr>
            <td style="width: 150px; padding: 10px; vertical-align: top;">
                <!-- Debug URL Gambar -->
                {{-- src="{{ asset('storage/' . $data->peraturan) --}}
                @if(Storage::disk('public')->exists($data->foto_pekerjaan))
                <img src="{{ asset('storage/' . $data->foto_pekerjaan) }}" alt="{{ $data->foto_pekerjaan }}" style="width: 100%; min-width: 280px; height: auto; border-radius: 8px;">
            @else
                <img src="{{ $data->foto_pekerjaan }}" alt="{{ $data->foto_pekerjaan }}" style="width: 100%; min-width: 280px; height: auto; border-radius: 8px;">
            @endif
                            <p style="margin-top:10px;">Paket Pekerjaan</p>
           
            
            
            <td style="padding: 10px;">
                <table style="width: 100%; border-collapse: collapse;">
                    <tr>
                        <th style="background-color: navy; width: 20px; border-radius: 10px; text-align: center;">
                            <i class="fas fa-user" style="color: white; font-size: 12px;"></i>
                        </th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align: left; font-size: 14px;">Nama Instansi</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align: left; font-weight: 700; color: black;">
                            {{ ucwords(strtolower($data->instansi)) }}
                        </td>
                    </tr>
                 
                    <tr>
                        <th style="background-color: navy; width: 20px; border-radius: 10px; text-align: center;">
                            <i class="fas fa-money-bill" style="color: white; font-size: 12px;"></i>
                        </th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align: left; font-size: 14px;">Jumlah Pagu</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align: left; font-weight: 700; color: black;">
                            {{ number_format($data->jumlah_pagu, 2, ',', '.') }}
                        </td>
                    </tr>
                 
                    <tr>
                        <th style="background-color: navy; width: 20px; border-radius: 10px; text-align: center;">
                            <i class="fas fa-cogs" style="color: white; font-size: 12px;"></i>
                        </th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align: left; font-size: 14px;">Metode Pengadaan</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align: left; font-weight: 700; color: black;">
                            {{ ucwords(strtolower($data->metodepengadaan->metode)) }}
                        </td>
                    </tr>
                 
                 
                    <tr>
                        <th style="background-color: navy; width: 20px; border-radius: 10px; text-align: center;">
                            <i class="fas fa-cogs" style="color: white; font-size: 12px;"></i>
                        </th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align: left; font-size: 14px;">Pekerjaan</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align: left; font-weight: 700; color: black;">
                            {{ ucwords(strtolower($data->pekerjaan)) }}
                        </td>
                    </tr>
                 
                    <tr>
                        <th style="background-color: navy; width: 20px; border-radius: 10px; text-align: center;">
                            <i class="fas fa-calendar" style="color: white; font-size: 12px;"></i>
                        </th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align: left; font-size: 14px;">Tanggal Anggaran</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align: left; font-weight: 700; color: black;">
                            {{ $data->tahun  }}
                        </td>
                    </tr>
                 
                   
                    <tr>
                        <th style="background-color: navy; width: 20px; border-radius: 10px; text-align: center;">
                            <i class="fas fa-file" style="color: white; font-size: 12px;"></i>
                        </th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align: left; font-size: 14px;">Progress Fisik</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align: left; font-weight: 700; color: black;">
                            {{ number_format($data->progress_fisik, 2) . '%' }}
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="4" style="background-color: white; text-align: right; padding: 10px;">
                            Paket Pekerjaan | Sistem Informasi Pembina Jasa Konstruksi Kabupaten Bandung Barat | sipjakikbb.com
                            <br><p id="dateTime" style="margin: 0;"></p>
                            <br>
                            <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
                            <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </tbody>
</table>

<!-- Tombol Download dan Preview -->
<div style="text-align: right; margin-top: 20px;">
    {{-- <button id="" class="badge">
        <i class="fas fa-download me-2"></i> Download Sertifikat
    </button> --}}
    <button id="previewBtn" class="badge">
        <i class="fas fa-file me-2"></i> Preview
    </button>
    <button id="downloadBtn" class="badge">
        <i class="fas fa-download me-2"></i>Download
    </button>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
<script>
    function copyToClipboard(text) {
        var textarea = document.createElement('textarea');
        textarea.value = text;
        document.body.appendChild(textarea);
        textarea.select();
        document.execCommand('copy');
        document.body.removeChild(textarea);
        alert('Teks telah disalin ke clipboard!');
    }

    function updateDateTime() {
        const now = new Date();
        const tahun = now.getFullYear();
        const bulan = now.getMonth() + 1;
        const tanggal = now.getDate();
        const jam = now.getHours();
        const menit = now.getMinutes();
        const detik = now.getSeconds();
        const formattedDateTime = `${tanggal}/${bulan}/${tahun} ${jam}:${menit}:${detik}`;
        document.getElementById('dateTime').textContent = formattedDateTime;
    }

    updateDateTime();
    setInterval(updateDateTime, 1000);

    document.getElementById('previewBtn').addEventListener('click', function() {
        html2canvas(document.getElementById('datakeluar')).then(canvas => {
            const imgData = canvas.toDataURL('image/png');
            const img = new Image();
            img.src = imgData;
            const previewWindow = window.open('', '', 'width=210,height=297');
            img.onload = function() {
                const imgWidth = img.naturalWidth;
                const imgHeight = img.naturalHeight;
                const a4WidthPx = 794;
                const a4HeightPx = 1123;
                const widthRatio = a4WidthPx / imgWidth;
                const heightRatio = a4HeightPx / imgHeight;
                const scalingFactor = Math.min(widthRatio, heightRatio);
                const newWidth = imgWidth * scalingFactor;
                const newHeight = imgHeight * scalingFactor;
                previewWindow.document.write('<html><head><title>Preview</title></head><body style="margin:0;padding:0;">');
                previewWindow.document.write('<img src="' + imgData + '" style="width:' + newWidth + 'px;height:' + newHeight + 'px;">');
                previewWindow.document.write('</body></html>');
                previewWindow.document.close();
            };
        });
    });

    document.getElementById('downloadBtn').addEventListener('click', function() {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF('p', 'mm', 'a4');
        const nama = document.getElementById('dataContainer').getAttribute('data-nama');
        const formattedNama = nama ? nama.replace(/[^a-zA-Z0-9]/g, '_') : 'document';
        html2canvas(document.getElementById('datakeluar')).then(canvas => {
            const imgData = canvas.toDataURL('image/png');
            doc.addImage(imgData, 'PNG', 10, 25, 190, 100);
            doc.save(`${formattedNama}.pdf`);
        });
    });
</script>



<!-- <button onclick="downloadPDF()">Download PDF</button> -->

</div>





    </div>


    
</div>


@include('backend.00_dashboard.part.menufooter')
</div>
{{-- ------------------------------------ END FITUR ------------- --}}



</div>
</div>
</div>




            <!-- <button onclick="downloadPDF()">Download PDF</button> -->

        </div>

        
        
        
        
                </div>


                
            </div>
        </div>
        </div>
        </div>
        
        <!--Main Content-->
        
    </div>
    @include('backend.00_dashboard.part.footer')
    

    