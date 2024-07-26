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
    height: 120vh;
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
                background: linear-gradient(to right, yellow, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 10px;
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background-color: white;
                color: black;
            }
        </style>
        <a href="/beskktenagakerja" style="background: white;">
            <div class="badge"><i class="fas fa-arrow-left mr-2"></i> Kembali </div></label>
        </a>
</div>
<div class="search-entries">
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
</div>
</div>


<style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
        
                th, td {
                    font-family: 'Lato', sans-serif;
                    font-weight: 700;
                    color: black;
                    font-size: 12px;
                    border: 1px solid #ddd;
                    padding: 8px;
                }
        
                tr:nth-child(even) {
                    background-color: #f2f2f2;
                    font-size: 12px;
                }
        
                th {
                    /* background-color: #4CAF50; */
                    /* background: linear-gradient(to bottom, #000000, #FFCB0F); */
                    background-color:  #FFCB0F;
                    color: black;
                    font-size: 14px;
                }
            </style>
             <table id="datakeluar">
              
                <tbody>

                    {{-- ============================================ --}}
               
                    
                    <tr>  
                        <th style="background-color: navy; width: 20px;" ><i class="fas fa-user" style="color: white; font-size:12px;"></i></th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align:left; font-size:14px;">Nama Lengkap</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align:left; font-weight:700; color:black ">{{ ucwords(strtolower($data->nama)) }}</td>
                    </tr>
                    
                    <tr>  
                        <th style="background-color: navy; width: 20px;" ><i class="fas fa-home" style="color: white; font-size:12px;"></i></th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align:left; font-size:14px;">Alamat</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align:left; font-weight:700; color:black ">{{ ucwords(strtolower($data->alamat)) }}</td>
                    </tr>
                    
                    <tr>  
                        <th style="background-color: navy; width: 20px;" ><i class="fas fa-road" style="color: white; font-size:12px;"></i></th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align:left; font-size:14px;">Kecamatan</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align:left; font-weight:700; color:black ">{{ ucwords(strtolower($data->kecamatan)) }}</td>
                    </tr>
                    
                    <tr>  
                        <th style="background-color: navy; width: 20px;" ><i class="fas fa-road" style="color: white; font-size:12px;"></i></th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align:left; font-size:14px;">Desa</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align:left; font-weight:700; color:black ">{{ ucwords(strtolower($data->desa)) }}</td>
                    </tr>
                    
                    <tr>  
                        <th style="background-color: navy; width: 20px;" ><i class="fas fa-calendar" style="color: white; font-size:12px;"></i></th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align:left; font-size:14px;">Tanggal Lahir</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align:left; font-weight:700; color:black ">{{ ucwords(strtolower($data->tanggal_lahir)) }}</td>
                    </tr>
                    
                    <tr>  
                        <th style="background-color: navy; width: 20px;" ><i class="fas fa-calendar" style="color: white; font-size:12px;"></i></th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align:left; font-size:14px;">Usia</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align:left; font-weight:700; color:black ">{{ ucwords(strtolower($data->usia)) . ' Tahun' }}</td>
                    </tr>
                    
                    <tr>  
                        <th style="background-color: navy; width: 20px;" ><i class="fas fa-list" style="color: white; font-size:12px;"></i></th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align:left; font-size:14px;">NIK KTP</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align:left; font-weight:700; color:black; position: relative;">
                                {{ $data->nik }}
                                <!-- Tombol salin -->
                                <button onclick="copyToClipboard('{{ $data->nik }}')" title="Salin" style="background: none; border: none; cursor: pointer; position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
                                    <i class="fas fa-copy"></i>
                                </button>
                            </td>                  
                            
                                  <script>
                        function copyToClipboard(text) {
                            // Buat elemen textarea sementara
                            var textarea = document.createElement('textarea');
                            textarea.value = text;
                            document.body.appendChild(textarea);
                            
                            // Pilih dan salin teks
                            textarea.select();
                            document.execCommand('copy');
                            
                            // Hapus elemen textarea setelah salin
                            document.body.removeChild(textarea);

                            // Notifikasi opsional: memberitahu pengguna bahwa teks telah disalin
                            alert('Teks telah disalin ke clipboard!');
                        }
                        </script>
                    </tr>
                    
                    <tr>  
                        <th style="background-color: navy; width: 20px;" ><i class="fas fa-cogs" style="color: white; font-size:12px;"></i></th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align:left; font-size:14px;">Keterampilan</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align:left; font-weight:700; color:black ">{{ ucwords(strtolower($data->keterampilan)) }}</td>
                    </tr>
                    
                    <tr>  
                        <th style="background-color: navy; width: 20px;" ><i class="fas fa-file" style="color: white; font-size:12px;"></i></th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align:left; font-size:14px;">Tahun Bimtek</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align:left; font-weight:700; color:black ">{{ ucwords(strtolower($data->tahun_bimtek)) }}</td>
                    </tr>
                    
                    <tr>  
                        <th style="background-color: navy; width: 20px;" ><i class="fas fa-file" style="color: white; font-size:12px;"></i></th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align:left; font-size:14px;">Kualifikasi</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align:left; font-weight:700; color:black ">{{ ucwords(strtolower($data->kualifikasi)) }}</td>
                    </tr>
                    
                    <tr>  
                        <th style="background-color: navy; width: 20px;" ><i class="fas fa-file" style="color: white; font-size:12px;"></i></th>
                        <th style="background-color: #FFCB0F; width: 225px; text-align:left; font-size:14px;">Registrasi</th>
                        <td style="background-color: #FFCB0F; width: 20px;">:</td>
                        <td style="background-color: rgba(192, 192, 192, 0.3); font-size: 14px; text-transform: capitalize; text-align:left; font-weight:700; color:black ">{{ ucwords(strtolower($data->registrasi)) }}</td>
                    </tr>
                    
                    {{-- ============================================ --}}
                    
                    
                </tbody>
            </table>
            <!-- <button onclick="downloadPDF()">Download PDF</button> -->

<!-- Script JavaScript untuk mengunduh PDF -->
<script>
async function downloadPDF() {
    const { jsPDF } = window.jspdf;

    // Pilih elemen tabel yang ingin di-capture
    const table = document.querySelector("#datakeluar");

    try {
        // Gunakan html2canvas untuk menangkap elemen tabel sebagai gambar
        const canvas = await html2canvas(table);
        const imgData = canvas.toDataURL("image/png");
        const doc = new jsPDF();

        // Tentukan posisi dan ukuran gambar dalam PDF
        const imgWidth = 210; // Lebar PDF dalam mm
        const pageHeight = 295; // Tinggi PDF dalam mm
        const imgHeight = canvas.height * imgWidth / canvas.width;
        let heightLeft = imgHeight;

        let position = 10;

        // Tambahkan gambar ke PDF
        doc.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
        heightLeft -= pageHeight;

        // Tambahkan halaman baru jika gambar lebih panjang dari satu halaman
        while (heightLeft >= 0) {
            position = heightLeft - imgHeight;
            doc.addPage();
            doc.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
            heightLeft -= pageHeight;
        }

        // Simpan PDF
        doc.save('data_detail.pdf');
    } catch (error) {
        console.error('Error generating PDF:', error);
        alert('Terjadi kesalahan saat membuat PDF.');
    }
}
</script>
        </div>

        
        
        
        
                </div>


                
            </div>
            @include('backend.00_dashboard.part.menufooter')
        </div>
        </div>
        </div>
        
        <!--Main Content-->
        
    </div>
    @include('backend.00_dashboard.part.footer')
    

    