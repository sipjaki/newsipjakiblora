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
            margin-top:165px;
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

Statistika Daftar Para Pekerja Konstruksi <br> Pemerintah Kabupaten Bandung Barat
</h2>
</div>



<div class="container" 
@media (min-width: 769px) and (max-width: 1024px) {    

    style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: 26vh;
    background: linear-gradient(to bottom, yellow, white, white);
    align-items: center;
    position: relative;
">

<div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div>


<h1 style="font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;"><button class="badgekementrian">Kementrian Pekerjaan Umum Dan Perumahan Rakyat</button> </h1>


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

@include('tambahan.pencarianskk.menunavigasi')


    {{-- <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;">Kementrian Pekerjaan Umum Dan Penataan Ruang </h1> --}}
    
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
    height: 290vh;
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
    /* Container untuk setiap chart */
    .chart-container {
        margin: 15px auto; /* Margin untuk memberi jarak */
        width: 90%; /* Lebar responsif */
        max-width: 900px; /* Maksimal lebar lebih besar */
        height: 450px; /* Tinggi untuk memperpanjang chart */
        border-radius: 10px; /* Sudut yang membulat */
        background-color: #f9f9f9; /* Latar belakang terang */
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1); /* Bayangan halus */
        padding: 20px; /* Ruang di dalam container */
        position: relative; /* Untuk positioning yang lebih baik */
    }

    /* Judul chart */
    .canvasjs-chart-title {
        font-family: 'Roboto', sans-serif; /* Font yang konsisten */
        font-size: 18px; /* Ukuran font yang lebih besar */
        font-weight: bold; /* Membuat judul lebih tegas */
        text-align: center; /* Memusatkan teks */
        color: #333; /* Warna teks yang kontras */
        margin-bottom: 10px; /* Spasi di bawah judul */
    }

    /* Legend styling (opsional) */
    .canvasjs-chart-legend {
        font-family: 'Roboto', sans-serif; /* Font konsisten */
        font-size: 12px; /* Ukuran font legend */
    }

    /* Tooltip styling */
    .canvasjs-tooltip {
        border-radius: 8px; /* Sudut yang membulat */
        padding: 8px; /* Padding dalam tooltip */
        background-color: rgba(0, 0, 0, 0.7); /* Latar belakang gelap */
        color: white; /* Teks putih */
        font-size: 12px; /* Ukuran font tooltip */
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

<div class="chart-container">
    <div id="chartContainer" style="height: 400px;"></div>
</div>

<div class="chart-container">
    <div id="kecamatanchartContainer" style="height: 400px;"></div>
</div>

<div class="chart-container">
    <div id="desachartContainer" style="height: 400px;"></div>
</div>

<div class="chart-container">
    <div id="bimtekchartContainer" style="height: 400px;"></div>
</div>

<script>
    window.onload = function () {
        // Chart untuk Keterampilan
        var chart1 = new CanvasJS.Chart("chartContainer", {
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: "{{$judulstatistika}}",
                fontFamily: "Roboto",
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
                dataPoints: {!! json_encode($data_keterampilan) !!} // Update dataPoints
            }]
        });
        chart1.render();

        // Chart untuk Kecamatan
        var chart2 = new CanvasJS.Chart("kecamatanchartContainer", {
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: "{{ $judulkecamatan }}",
                fontFamily: "Roboto",
                fontSize: 15
            },
            axisY: {
                title: "Daftar Pekerja Tukang Terampil Distribusi Berdasarkan Kecamatan"
            },
            data: [{
                type: "bar",
                showInLegend: false,
                toolTipContent: "{name}: <strong>{y}</strong>",
                indexLabel: "{name} - {y} Pekerja",
                dataPoints: {!! json_encode($data_kecamatan) !!} // Update dataPoints
            }]
        });
        chart2.render();

        // Chart untuk Desa
        var chart3 = new CanvasJS.Chart("desachartContainer", {
            animationEnabled: true,
            theme: "light2",
            title: {
                text: "{{ $juduldesa }}",
                fontFamily: "Roboto",
                fontSize: 15
            },
            axisY: {
                title: "Jumlah Pekerja"
            },
            data: [{
                type: "column",
                showInLegend: true,
                legendMarkerColor: "grey",
                legendText: "Daftar Pekerja Tukang Terampil Distribusi Berdasarkan Desa",
                dataPoints: {!! json_encode($data_desa) !!} // Update dataPoints
            }]
        });
        chart3.render();

        // Chart untuk Tahun Bimtek
        var chart4 = new CanvasJS.Chart("bimtekchartContainer", {
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: "{{$judultahunbimtek}}",
                fontFamily: "Roboto",
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
                dataPoints: {!! json_encode($data_tahun_bimtek) !!} // Update dataPoints
            }]
        });
        chart4.render();
    };

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

 <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
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