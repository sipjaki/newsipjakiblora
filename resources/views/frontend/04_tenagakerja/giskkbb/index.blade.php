@include('frontend.00_atas.header')


{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}

<section id="sec-0">
    
    
    <div class="div" style="z-index: 9999; position: fixed;
            top: 0; left: 0; width: 100%; z-index: 9999;
            background-color: white; border-bottom: 1px solid black; 
            ">

        @include('frontend.00_atas.header1')
        <header>
            
                @include('frontend.00_atas.header2_navbar')
            
        </div>
        </header>


<div class="div" style="
            justify-content: center;
            text-align:center;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            margin-top:188px;
        ">
        <br>
         <h2 style="
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    font-size: 14px;
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

Sertifikat Keahliah Kerja & Sertifikat Keterampilan Kerja
</h2>
</div>
<div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: 30vh;
    background: linear-gradient(to bottom, yellow, white, white);
    align-items: center;
    position: relative;
">

<div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div>


<h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;"><button class="badgekementrian">Kementrian Pekerjaan Umum Dan Penataan Ruang</button> </h1>


<style>

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
                text-transform: uppercase;
            }
            .badgekembali:hover {
                background-color: white;
                color: black;
                background: white;
            }    

.badgekementrian {
                background: linear-gradient(to right, #FFD700, #FFD700);
                color: black;
                padding: 10px 20px;
                text-transform: uppercase;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgekementrian:hover {
                background-color: white;
                color: black;
                background: white;
            }    
</style>

<br>

@include('tambahan.pencarianskk.menunavigasi')

    {{-- <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;">Kementrian Pekerjaan Umum Dan Penataan Ruang </h1> --}}

<br>
    
</div>





{{-- ------------------------------------ END FITUR ------------- --}}

           
        </div>
</div>
</div>


{{-- ---------------------------- --}}

{{-- @include('tambahan.pencarianskk.menunavigasistatistika') --}}





{{-- ------------------------------------ END FITUR ------------- --}}


           
        </div>
</div>
</div>



{{-- ------------------------------------------- PERBATASAN FITUR ----------------------------------- --}}
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
    margin-top:5px;
    height: 300vh;
    background: linear-gradient(to bottom, yellow, white, navy);
    align-items: center;
    position: relative;
">
{{-- 
<div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div> --}}

<style>
    .badge {
                background: linear-gradient(to right, black, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                text-align: left;
                font-size: 14px;
                margin-right: 10px;
                text-align: center;
                /* margin-right: 425px; */
                /* justify-content: between; */
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background-color: white;
                color: black;
            }
</style>
<style>
    .container-kbb {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow: hidden;
    }
    .container-kbb img {
        width: 95%;
        border-radius: 15px;
        animation: zoom 5s infinite;
    }
    @keyframes zoom {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(1);
        }
    }
</style>
<div class="container-kbb">
    <img src="/assets/library/giskbb/petakbb.jpg" alt="" style="width: 95%; border-radius:15px;">
</div>


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

    .image-cell {
            width: 200px; /* Set width of the cell */
            height: 200px; /* Set height of the cell */
            text-align: center;
            vertical-align: middle;
        }
        .image-cell img {
            max-width: 100%;
            max-height: 100%;
            width: auto;
            height: auto;
            display: block;
            margin: auto;
        }
</style>
 <table style="margin-top:50px;">
    <thead>
        <tr>
            <th style="width:45px;">No</th>
            <th style="width:200px;">KECAMATAN</th>
            {{-- <th style="width:300px;">PETA KAWASAN</th> --}}
            <th>LAKI-LAKI</th>
            <th>PEREMPUAN</th>
            <th>TOTAL PENDUDUK</th>
            <th>VIEW</th>
        </tr>
    </thead>
    <tbody>

        {{-- ============================================ --}}
        {{-- @php
    $start = ($data->currentPage() - 1) * $data->perPage() + 1;
        @endphp --}}
        

        @foreach($data as $item )
        
        <tr>
            <td style="font-size: 12px; text-transform: uppercase; text-align:left;">{{ $loop->iteration }}</td>
            <td style="font-size: 12px; text-transform: uppercase; text-align:left;">{{ $item->nama_kecamatan }}</td>
            {{-- <td class="image-cell" style="font-size: 12px; text-transform: uppercase; text-align:center;"><img src="{{$item->gambar}}" alt=""></td> --}}
            <td style="font-size: 12px; text-transform: uppercase; text-align:center;">{{ number_format($item->laki_laki)  }} JIWA</td>
            <td style="font-size: 12px; text-transform: uppercase; text-align:center;">{{ number_format($item->perempuan) }} JIWA</td>
            <td style="font-size: 12px; text-transform: uppercase; text-align:center;">{{ number_format($item->total_penduduk) }} JIWA</td>
            
            
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
            <a href="/tenagakerja/skaskt/{{ $item->nama_kecamatan}}" class="iconhover" title="View">
                <button style="
                background: green; 
                border: none; 
                cursor: pointer; 
                padding: 5px 5px; /* Padding diperbesar untuk ukuran tombol */
                display: inline-flex; 
                align-items: center; 
                border-radius: 5px; /* Opsional: menambahkan sudut membulat */
            ">
                <i class="fas fa-arrow-right" style="color: white; font-size: 20px;"></i> <!-- Ukuran ikon diperbesar -->
            </button>
            
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