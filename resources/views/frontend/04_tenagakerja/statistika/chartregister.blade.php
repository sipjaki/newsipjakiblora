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
    height: 40vh;
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

{{-- ====================== ====================== --}}

@include('tambahan.pencarianskk.menunavigasistatistika')

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
    height: 60vh;
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

{{-- STATISTIKA ========================================================== --}}

<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
<style>
    /* Optional: Add some basic styling */
    #chartContainer, #kecamatanchartContainer, #desachartContainer, #bimtekchartContainer, #usiachartContainer {
        margin: 25px auto;
        height: 400px;
        width: 90%;
        /* position: relative; */
        border-radius: 10px;
    }
    .canvasjs-chart-title {
            font-family: 'Roboto', sans-serif;
            /* margin-bottom: 100px; */
        }
    
</style>



{{--  STATISTIKA ------------------------------------- --}}
<!-- Container for the 1 chart -->
<style>
    /* CSS yang telah dijelaskan di atas */

    .jumlahpekerja button {
        background-color: navy; /* Warna latar belakang button */
        color: white; /* Warna teks button */
        border: none; /* Menghilangkan border default button */
        padding: 10px 10px; /* Padding di dalam button */
        border-radius: 10px; /* Radius sudut button */
        cursor: pointer; /* Menunjukkan pointer saat hover */
        font-size: 16px; /* Ukuran font */
        transition: background-color 0.3s, color 0.3s; /* Transisi halus untuk hover */
    }

    .jumlahpekerja button:hover {
        background-color: white; /* Warna latar belakang button saat hover */
        color: black; /* Warna teks button saat hover */
    }
</style>

<div class="jumlahpekerja">
    <button style="font-size:13px;">Jumlah Pekerja Bimtek : {{$total_data}} Orang</button>
</div>

<!-- Container for the 4 chart -->
<div class="container">
<div id="bimtekchartContainer" style="width: 1000px; height:300px;"></div>
</div>


 

<script>
    window.onload = function () {

        // ============= ============= ============= ============= =============
        var dataForCharttahunbimtek = {!! $data_for_chart_tahun_bimtek !!};
        
        var chart4 = new CanvasJS.Chart("bimtekchartContainer", {
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: "{{$judultahunbimtek}}",
                fontFamily: "Roboto", // Atur fontFamily di CanvasJS
                fontSize: 15
            },
            legend: {
                cursor: "pointer",
                itemclick: explodePie
            },
            data: [{
                type: "pie",
                showInLegend: true,
                toolTipContent: "{name}: <strong>{y}%</strong>",
                indexLabel: "{name} - {y}%",
                dataPoints: dataForCharttahunbimtek
            }]
        });
        chart4.render();

    
}
    
    function explodePie(e) {
        if (typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
            e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
        } else {
            e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
        }
        e.chart.render();
    }
</script>
 {{-- STATISTIKA ========================================================== --}}


 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">




{{-- STATITIKA BERDASARKAN KECAMATAN --}}

<div class="div">


    <div class="container" style="display:flex; justify-content: flex-end;">
        {{-- <div class="badge"><i class="fas fa-users me-2"></i>Daftar Pekerja Tukang Terampil (SKK)</div> --}}
        {{-- Menampilkan data kecamatan --}}
            {{-- Debugging untuk memastikan data dikirim ke view --}}
{{-- {{ dd($data_kecamatan) }} --}}

{{-- Menampilkan data kecamatan --}}

<style>
    /* Container untuk dropdown dan ikon */
.custom-select-wrapper {
    position: relative;
    width: 100%;
    max-width: 400px; /* Sesuaikan lebar maksimum sesuai kebutuhan */
}

/* Styling untuk select dropdown */
#kecamatan-dropdown {
    width: 100%;
    padding: 10px 40px 10px 10px; /* Tambahkan padding kiri untuk ruang ikon */
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    line-height: 1;
    background-color: #fff;
    appearance: none; /* Menghapus gaya default */
}

/* Styling untuk ikon pencarian */
.search-icon {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    color: #aaa; /* Warna ikon */
    font-size: 16px; /* Ukuran ikon */
    pointer-events: none; /* Membuat ikon tidak dapat diklik */
    z-index: 1; /* Memastikan ikon berada di atas dropdown */
}

/* Styling untuk dropdown saat difokuskan */
#kecamatan-dropdown:focus {
    border-color: #007bff; /* Warna border saat difokuskan */
    outline: none;
    box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25); /* Bayangan fokus */
}

</style>


{{-- ========================================================== --}}
{{-- <form id="kecamatan-form" method="GET" action="{{ url('/tenagakerja/kecamatan') }}">
    <div class="custom-select-wrapper">
        <select name="judul" id="kecamatan-dropdown" onchange="submitForm()">
            <option value="">PILIH KECAMATAN</option>
            @foreach ($data_kecamatan as $kecamatan)
                <option value="{{ $kecamatan }}">{{ $kecamatan }}</option>
            @endforeach
        </select>
        <i class="fas fa-search search-icon"></i>
    </div>
</form> --}}

<script>
    function submitForm() {
        document.getElementById('kecamatan-form').submit();
    }
</script>
{{-- ========================================================== --}}


    </div>
    

    <script>
        function selectOption() {
            // Mendapatkan elemen select
            var selectElement = document.querySelector('.kecamatan');
            // Mendapatkan nilai yang dipilih
            var selectedValue = selectElement.value;
            // Mengecek apakah nilai yang dipilih ada
            if (selectedValue) {
                // Mengarahkan ke URL yang dipilih
                window.location.href = selectedValue;
            }
        }

        // Menyambungkan event listener pada DOMContentLoaded
        document.addEventListener('DOMContentLoaded', function() {
            // Memastikan elemen ada sebelum menghubungkan fungsi
            var selectElement = document.querySelector('.kecamatan');
            if (selectElement) {
                selectElement.addEventListener('change', selectOption);
            }
        });
    </script>

     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">
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