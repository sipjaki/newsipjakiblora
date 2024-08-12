@include('frontend.00_atas.header')


{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}

<section id="sec-0">
    
    @include('frontend.00_atas.header1')
    
        <header>
        
        @include('frontend.00_atas.header2_navbar')
            
        </header>
        <div class="div" style="
            justify-content: center;
            text-align:center;
        ">
                    <h2 style="
    margin-top: 10px;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    font-size: 14px;
    margin-left: 475px;
    color: #333;
    text-transform: uppercase;
    text-align: center;
    border: 2px solid black;
    padding: 10px;
    border-radius: 25px;
    width: 500px;
    background: linear-gradient(to right, #f0f0f0, #e0e0e0);
    transition: background 0.5s ease, color 0.5s ease;
    " onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow )'; this.style.color='white';">

Sertifikat Badan Usaha Perseroan Terbatas
</h2>
</div>
<div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    margin-bottom: 0px;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: 150vh;
    margin-left: 150px;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
<div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div>


    <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;">Kementrian Pekerjaan Umum Dan Penataan Ruang </h1>

<br>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-left: 10px;
            margin-right: 10px;
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
     <table>
        <thead>
            <tr>
                <th style="width:45px; font-size:12px;">NO</th>
                <th style="width:220px; font-size: 12px;">NAMA PERUSAHAAN</th>
                <th style="width:220px; font-size: 12px;">KLASIFIKASI BIDANG USAHA</th>
                <th style="width:500px; font-size: 12px;">SUB KLASIFIKASI BIDANG USAHA</th>
                <th style="width:100px; font-size: 12px;">TAHUN REGISTER</th>
                <th style="width:75px;font-size: 12px;">VIEW SBU/UIJK</th>
            </tr>
        </thead>

        <style>
            .search-container {
                width: 200px;
                position: absolute; /* Use absolute positioning */
                top: 10px; /* Distance from the top of the page */
                right: 10px; /* Distance from the right edge of the page */
                display: inline-block;
                text-align: right;
            }
            .search-container input {
                border-radius: 15px;
                padding: 2px 5px 2px 25px; /* Extra padding for the icon */
                border: 1px solid #ccc; /* Optional: Add border for visibility */
            }
            .search-container .fa-search {
                position: absolute;
                left: 10px;
                top: 50%;
                transform: translateY(-50%);
            }
            .pilihan {
                    width: 150px; /* Lebar dropdown yang lebih besar untuk kenyamanan pengguna */
                    height: 40px; /* Tinggi yang lebih sesuai untuk dropdown */
                    border-radius: 8px; /* Sudut yang membulatkan tampilan dropdown */
                    border: 1px solid #ddd; /* Border yang lebih ringan */
                    padding: 0 15px; /* Padding horizontal untuk ruang lebih */
                    background-color: #fff; /* Latar belakang putih */
                    font-size: 14px; /* Ukuran font yang nyaman dibaca */
                    color: #333; /* Warna teks */
                    appearance: none; /* Menghapus tampilan default dropdown di beberapa browser */
                    background-image: url('data:image/svg+xml;charset=UTF-8,%3Csvg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"%3E%3Cpath fill="none" stroke="%23333" stroke-width="1.5" d="M2 3l3 3 3-3"/%3E%3C/svg%3E'); /* Menambahkan ikon panah kustom */
                    background-repeat: no-repeat;
                    background-position: right 10px center; /* Posisi ikon panah di dalam dropdown */
                    background-size: 12px; /* Ukuran ikon panah */
    }
        </style>
        
        <div class="search-container">
            <i class="fas fa-search"></i>
            <select class="pilihan" onchange="selectOption()">
                <option value="" disabled selected>Pilih PT/CV</option>
                <option value="/uijkpt">PT</option>
                <option value="/uijkcv">CV</option>
            </select>
        </div>
    
        <script>
            function selectOption() {
                var selectElement = document.querySelector('.pilihan');
                var selectedValue = selectElement.value;
                if (selectedValue) {
                    window.location.href = selectedValue;
                }
            }
        </script>
    
        <tbody>

            {{-- ============================================ --}}
            @php
        $start = ($data->currentPage() - 1) * $data->perPage() + 1;
            @endphp

            @foreach($data as $item )
            
            <tr>
                <td style="width:45px; font-size: 12px;">{{ $loop->iteration + $start - 1 }}</td>
                <td style="width:220px; font-size: 12px; text-align:left" class="text-uppercase">{{ $item->nama_perusahaan}}</td>
                <td style="width:220x; font-size: 12px; text-align:left" class="text-uppercase">{{ $item->klasifikasi_bidang_usaha}}</td>
                <td style="width:500px; font-size: 12px; text-align:left" class="text-uppercase">{{ $item->sub_klasifikasi_bidang_usaha}}</td>
                <td style="width:45px; font-size: 12px; text-align:center" class="text-uppercase">{{ $item->keterangan}}</td>
                
                <td>
                    
                <style>
                                        /* Container for the buttons */
            .button-container {
                display: flex;
                gap: 10px; /* Space between icons */
                justify-content: center; /* Center the icons horizontally */
            }

            /* Style for the individual buttons */
            .iconhover {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 25px; /* Adjust width as needed */
                height: 25px; /* Adjust height as needed */
                background: navy, white; /* Yellow background */
                color: white; /* Text color */
                border: none;
                border-radius: 50%;
                text-decoration: none;
                padding: 3px 3px;
                font-size: 15px; /* Adjust font size as needed */
                transition: background 0.3s, color 0.3s;
                cursor: pointer;
            }

            .iconhover:hover {
                background: white; /* White background on hover */
                color: black; /* Black text color on hover */
            }

            .iconhover i {
                margin: 0;
            }
            
                </style>

                <div class="button-container">
                <a href="/uijk/{{ $item->nama_perusahaan}}" class="iconhover" title="View">
                    <i class="fas fa-eye" style="color: black"></i>
                </a>
                        
                    </div>

                    <script>
                        function downloadCSV() {
                            // Function to handle CSV download
                        }
                        </script>
                </td>
            </tr>
            @endforeach
            {{-- ============================================ --}}
            
            
        </tbody>
    </table>


</div>

<style>
    .pagination-container{
        color: black;
    }
</style>

<div class="pagination-container" style="margin-top: 20px; display: flex; flex-direction: column; align-items: center; color:black; ">
        <div class="pagination-info mb-2" style="margin-bottom: 10px; color:orange;">
            Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah Data
        </div>
            <ul class="pagination" style="display: flex; padding-left: 0; list-style: none; color: black;">
                <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px; ">
                    <a class="page-link" href="{{ $data->previousPageUrl() }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: black; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; border-radius: 20px 0px 0px 20px;"><i class="fas fa-arrow-left" style="margin-right:10px;"></i>Previous</a>
                </li>

                @foreach ($data->getUrlRange($data->currentPage() - 0, $data->currentPage() + 2) as $page => $url)
                    <li class="page-item {{ $page == $data->currentPage() ? 'active' : '' }}" style="margin-right: 5px;">
                        <a class="page-link" href="{{ $url }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: black; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; ">{{ $page }}</a>
                    </li>
                @endforeach

                <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
                    <a class="page-link" href="{{ $data->nextPageUrl() }}" style="position: relative; display: block; padding: 0.5rem 0.75rem; margin-left: -1px; line-height: 1.25; color: black; background-color: #fff; border: 1px solid #dee2e6; font-size:12px; border-radius: 0px 20px 20px 0px;">Next <i class="fas fa-arrow-right" style="margin-left:10px;"></i></a>
                </li>
            </ul>

    </div>


        
</div>
{{-- ------------------------------------ END FITUR ------------- --}}


           
        </div>
</div>
</div>



<br><br>
    </section>


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}






@include('frontend.00_atas.footer1')

    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
@include('frontend.00_atas.footer2')