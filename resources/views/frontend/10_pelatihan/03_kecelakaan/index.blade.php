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

Jumlah Kasus Kecelakaan Kerja
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
    height: 20vh;
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

{{-- @include('tambahan.pencarianskk.menunavigasi') --}}

    {{-- <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;">Kementrian Pekerjaan Umum Dan Penataan Ruang </h1> --}}

<br>
    
</div>




{{-- ------------------------------------ END FITUR ------------- --}}


           
        </div>
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
    height: 150vh;
    background: linear-gradient(to bottom, yellow, white, white);
    align-items: center;
    position: relative;
">


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
        font-size: 12px; /* Ukuran font yang lebih besar */
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


 <script>
     window.onload = function () {
         var data = @json($data);

         var chart = new CanvasJS.Chart("chartContainer-1", {
             animationEnabled: true,
             theme: "light2",
             title:{
                 text: ""
             },
             axisX: {
                 title: "",
                 valueFormatString: "YYYY"
             },
             axisY: {
                 title: "Kasus",
                 includeZero: true
             },
             data: [{        
                 type: "line",
                 indexLabelFontSize: 16,
                 dataPoints: data.map(function(point) {
                     return { x: new Date(point.tahun, 0), y: point.kasus };
                 })
             }]
         });
         chart.render();

          var data_2 = @json($data_2);

            // Format data untuk CanvasJS
            var dataPoints = data_2.map(function(point) {
                return { x: new Date(point.tahun, 0), y: point.kasus };
            });

            var chart2 = new CanvasJS.Chart("chartContainer-2", {
                animationEnabled: true,
                theme: "light2", // "light1", "light2", "dark1", "dark2"
                title:{
                    text: ""
                },
                axisX: {
                    title: "",
                    valueFormatString: "YYYY"
                },
                axisY: {
                    title: "Kasus",
                    includeZero: true
                },
                data: [{        
                    type: "column",  
                    showInLegend: true, 
                    legendMarkerColor: "grey",
                    legendText: "Kasus",
                    dataPoints: dataPoints
                }]
            });
            chart2.render();

            
     }
 </script>

{{-- <div class="container-kasus" style="width: 950px;">
     <h5>Grafik Kasus Setiap Tahun</h5>
     
     <div id="chartContainer"></div>
     <h6>Sumber : Badan Penyelenggara Jaminan Sosial Ketenagakerjaan Republik Indonesia</h6>
 </div> --}}

 <div class="chart-container">
    <div id="chartContainer-1" style="height: 400px;"></div>
    <h5>Grafik Kasus Setiap Tahun</h5>
     <div id="chartContainer"></div>
     <h6>Sumber : Badan Penyelenggara Jaminan Sosial Ketenagakerjaan Republik Indonesia</h6>
</div>

 <div class="chart-container">
    <div id="chartContainer-2" style="height: 400px;"></div>
</div>
{{-- 
 <div class="container-kasus2" style="width: 950px;">
     <h5>Grafik Kasus Setiap Tahun</h5>
     
     <div id="chartContainer2"></div>
     <h6>Sumber : Badan Penyelenggara Jaminan Sosial Ketenagakerjaan Republik Indonesia</h6>
 </div> --}}


        
</div>
{{-- ------------------------------------ END FITUR ------------- --}}



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