<?php echo $__env->make('frontend.00_atas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>






<section id="sec-0">
    
    
    <div class="div" style="z-index: 9999; position: fixed;
            top: 0; left: 0; width: 100%; z-index: 9999;
            background-color: white; border-bottom: 1px solid black; 
            ">

        <?php echo $__env->make('frontend.00_atas.header1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <header>
            
                <?php echo $__env->make('frontend.00_atas.header2_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
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

Sertifikat Keahliah Kerja & Sertifikat Keterampilan Kerja
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


<h1 style="font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;"><button class="badgekementrian">Kementrian Pekerjaan Umum Dan Penataan Ruang</button> </h1>


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

<?php echo $__env->make('tambahan.pencarianskk.menunavigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    
    
</div>



<?php echo $__env->make('tambahan.pencarianskk.menunavigasistatistika', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    margin-bottom: 10px;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    margin-top:5px;
    height: 210vh;
    background: linear-gradient(to bottom, yellow, white, navy);
    align-items: center;
    position: relative;
">


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
    <button style="font-size:13px;">Jumlah Pekerja Bimtek : <?php echo e($total_data); ?> Orang</button>
</div>

<!-- Container for the 2 chart -->
<div class="chart-container">
    <div id="kecamatanchartContainer" style="height: 400px;"></div>
</div>


<style>
    .container-keterangan {
           display: flex;
           background-color: #fff;
           border-radius: 8px;
           box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
           overflow: hidden;
           max-width: 900px;
           margin: 0 auto;
           padding: 20px;
           height: 1800px;
       }
       .image {
           flex: 1;
           max-width: 250px;
       }
       .image img {
           width: 100%;
           height: auto;
           border-radius: 8px;
       }
       .content {
           flex: 2;
           padding-left: 20px;
       }
       .content h1 {
           color: #007BFF;
           margin-top: 0;
       }
       .content p {
           color: #333;
           line-height: 1.6;
       }
</style>

<div class="container-keterangan">
   <div class="image">
       <img style="margin-bottom: 20px;" src="/assets/library/giskbb/petakbb.jpg" alt="Deskripsi Gambar">
       <img style="margin-bottom: 20px;" src="/assets/library/giskbb/GUNUNGHALU.png" alt="Deskripsi Gambar">
       <img style="margin-bottom: 20px;" src="/assets/library/giskbb/SINDANGKERTA.png" alt="Deskripsi Gambar">
       <img style="margin-bottom: 20px;" src="/assets/library/giskbb/RONGGA.png" alt="Deskripsi Gambar">
     
   </div>
   <div class="content">
       <h5>Distribusi Data Berdasarkan Kecamatan</h5>
       <p style="text-align: justify">
        Distribusi data berdasarkan kecamatan di Kabupaten Bandung Barat memberikan wawasan mendalam mengenai variasi keterampilan dan kebutuhan tenaga kerja di setiap wilayah. Dalam analisis ini, ditemukan bahwa kecamatan-kecamatan tertentu memiliki konsentrasi pekerja tukang terampil yang lebih tinggi dibandingkan dengan kecamatan lainnya. Misalnya, Kecamatan Lembang dan Kecamatan Padalarang menunjukkan angka yang signifikan dalam hal jumlah pekerja dengan keterampilan khusus di bidang konstruksi dan perbaikan rumah. Hal ini bisa dihubungkan dengan adanya proyek-proyek pembangunan besar dan kebutuhan renovasi di area tersebut, yang mendorong permintaan terhadap tukang terampil.   
    </p>
       <p style="text-align: justify">
        Sementara itu, kecamatan-kecamatan di daerah pesisir dan pinggiran seperti Kecamatan Cipatat dan Kecamatan Batujajar menunjukkan distribusi keterampilan yang lebih merata. Di sini, pekerja tukang terampil lebih banyak terlibat dalam pekerjaan sehari-hari seperti perbaikan rumah tangga dan pemeliharaan infrastruktur lokal. Data menunjukkan bahwa di kecamatan-kecamatan ini, keterampilan dasar seperti tukang kayu dan tukang batu masih mendominasi. Hal ini mungkin terkait dengan tingkat pembangunan dan permintaan yang lebih stabil dibandingkan dengan daerah yang lebih berkembang atau lebih padat penduduk.   
    </p>
       <p style="text-align: justify">        
        Program pelatihan dan peningkatan keterampilan yang diterapkan di berbagai kecamatan berperan penting dalam mengatasi ketidakseimbangan ini. Pemerintah Kabupaten Bandung Barat telah meluncurkan berbagai inisiatif untuk menyebarluaskan pelatihan keterampilan secara lebih merata ke seluruh kecamatan, dengan tujuan meningkatkan kapasitas tenaga kerja di daerah-daerah yang kurang terlayani. Melalui program ini, diharapkan setiap kecamatan dapat meningkatkan keterampilan pekerjanya, memperbaiki kualitas tenaga kerja, dan pada akhirnya mendukung pertumbuhan ekonomi lokal secara lebih seimbang. 
    </p>
   </div>
</div>


<br><br>

 

<script>
    window.onload = function () {        
        // ==============================================
        var dataForChartKecamatan = <?php echo $data_for_chart_kecamatan; ?>;
        
        var chart2 = new CanvasJS.Chart("kecamatanchartContainer", {
            exportEnabled: true,
            animationEnabled: true,
            title: {
                text: "<?php echo e($judulkecamatan); ?>",
                fontFamily: "Roboto", // Atur fontFamily di CanvasJS
                fontSize: 15   //
            },
            axisY: {
                title: "Daftar Pekerja Tukang Terampil Distribusi Berdasarkan Kecamatan"
            },
            data: [{
                type: "bar",
                showInLegend: false,
                toolTipContent: "{name}: <strong>{y}</strong>",
                indexLabel: "{name} - {y} Pekerja",
                dataPoints: dataForChartKecamatan
            }]
        });
        
        chart2.render();
        
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
 


 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap">






<div class="div">


    <div class="container" style="display:flex; justify-content: flex-end;">
        
        
            




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





<script>
    function submitForm() {
        document.getElementById('kecamatan-form').submit();
    }
</script>



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



           
        </div>
</div>
</div>
<br><br>
</div>



<br><br>
    </section>


  
  
  


  
  
  






<?php echo $__env->make('frontend.00_atas.footer1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    
    
<?php echo $__env->make('frontend.00_atas.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/frontend/04_tenagakerja/statistika/chartkecamatan.blade.php ENDPATH**/ ?>