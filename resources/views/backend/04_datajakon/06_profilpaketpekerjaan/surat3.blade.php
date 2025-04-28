<style>
    table {
     table-layout: fixed;
     width: 100%;
 }

 td {
     padding: 10px;
     vertical-align: top;
     word-wrap: break-word;
 }

 .isi-berita {
     max-width: 600px;
     word-wrap: break-word;
     white-space: normal;
     overflow-wrap: break-word;
 }
</style>


<style>

.download-btn {
    background-color: #dc3545;
    color: white;
    padding: 12px 24px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
    border: 2px solid #dc3545;
}

.download-btn:hover {
    background-color: white;
    color: black;
}

    .container-surat {
        width: 800px;
        margin: 30px auto;
        padding: 40px;
        border: 1px solid black;
        background-color: #fff;
        font-family: 'Times New Roman', Times, serif;
        font-size: 15px;
    }

    .header-surat {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 10px;
    }

    .header-surat img {
        width: 90px;
        height: 90px;
        margin-right: 20px;
    }

    .header-text {
        text-align: center;
        flex: 1;
    }

    .header-text h3 {
        margin: 3px 0;
        font-size: 18px;
    }

    .header-text p {
        margin: 2px 0;
        font-size: 14px;
    }

    .line-separator {
        border-top: 3px solid black;
        margin: 10px 0 20px 0;
    }

    .body-surat {
        margin-top: 20px;
    }

    .table-info {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px;
    }

    .table-info td {
        vertical-align: top;
        padding: 4px;
    }

    h4 {
        margin-top: 20px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: underline;
    }

    .body-surat p {
        text-align: justify;
        margin-bottom: 10px;
    }
    .tanda-tangan {
    width: 300px;
    margin-top: 40px;
    margin-left: auto; /* Ini kunci biar div "nempel" ke kanan */

    text-align: left;
    font-family: 'Times New Roman', Times, serif;

    display: flex;
    flex-direction: column;
    justify-content: center; /* Vertikal tengah dalam flexbox */
    align-items: flex-start; /* Teks di kiri dalam box */
}


    </style>


@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
 <!--begin::App Wrapper-->
 <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
{{-- ---------------------------------------------------------------------- --}}

   @include('backend.00_administrator.00_baganterpisah.03_sidebar')

   <!--begin::App Main-->
   <main class="app-main">
    <section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy">


    <!--begin::App Content Header-->
     <div class="app-content-header">
       <!--begin::Container-->
       <div class="container-fluid">
         <!--begin::Row-->
         <div class="row">

            @include('backend.00_administrator.00_baganterpisah.09_selamatdatang')
            @include('backend.00_administrator.00_baganterpisah.11_alert')

         </div>
         <!--end::Row-->
       </div>
       <!--end::Container-->
     </div>

     <!-- Menampilkan pesan sukses -->
<br>

     <div class="container-fluid">
         <!--begin::Row-->
         <div class="row" style="margin-right: 10px; margin-left:10px;">
             <!-- /.card -->
             <div class="card mb-4">
                 <div class="card-header">
                    <div style="
                    font-weight: 900;
                    font-size: 16px;
                    text-align: center;
                    background: linear-gradient(135deg, #00378a, #00378a);
                    color: white;
                    padding: 8px 16px;
                    border-radius: 10px;
                    display: inline-block;
                    box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
                    transition: all 0.3s ease;
                    cursor: pointer;
                "
                onmouseover="this.style.background='white'; this.style.color='black';"
                onmouseout="this.style.background='linear-gradient(135deg, #00378a, #00378a)'; this.style.color='white';">
                    ⚙️ Setting Database
                </div>

                <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Jenis Pekerjaan -->
                            <i class="bi bi-briefcase" style="margin-right: 8px;"></i>
                            Jenis Pekerjaan
                        </button>
                    </a>

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Status Pekerjaan -->
                            <i class="bi bi-kanban" style="margin-right: 8px;"></i>
                            Status Pekerjaan
                        </button>
                    </a>

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Sumber Dana -->
                            <i class="bi bi-cash-stack" style="margin-right: 8px;"></i>
                            Sumber Dana
                        </button>
                    </a>

                    <a href="/404">
                        <button
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#0010a3'; this.style.color='white';"
                            style="background-color: #0010a3; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                            <!-- Ikon Tahun Pelaksanaan -->
                            <i class="bi bi-calendar-event" style="margin-right: 8px;"></i>
                            Tahun Pelaksanaan
                        </button>
                    </a>

                </div>
                                 </div>
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">
                                            <!-- Button to Download -->

                                    <!-- Tombol Download -->
                                    <button onclick="generatePDF()"  onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#e49e07'; this.style.color='white';"
                                    style="background-color: #e49e07; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-pdf" viewBox="0 0 16 16">
                                        <path d="M5.5 0h5A1.5 1.5 0 0 1 12 1.5v13A1.5 1.5 0 0 1 10.5 16h-5A1.5 1.5 0 0 1 4 14.5V1.5A1.5 1.5 0 0 1 5.5 0zM10 1v14H6V1h4z"/>
                                    </svg>
                                    Download PDF
                                    </button>

                        <a href="/bepekerjaandetailsupdate/{id}">
                                <button
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                onmouseout="this.style.backgroundColor='#27c93c'; this.style.color='white';"
                                style="background-color: #27c93c; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                <!-- Ikon Kembali -->
                                <svg xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 384 512" fill="white" style="margin-right: 8px;">
                                    <path d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zM384 121.9V128H256V0h6.1c6.4 0 12.5 2.5 17 7l97.9 98c4.5 4.5 7 10.6 7 16.9z"/>
                                </svg>
                                Update
                            </button>
                            </a>

                            <a href="/bepaketpekerjaan">
                                <button
                                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                                style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                <!-- Ikon Kembali -->
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                viewBox="0 0 16 16" style="margin-right: 8px;">
                            <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                            </svg>
                                Kembali
                            </button>
                            </a>
                     </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                    <div class="container-surat">
                        <div class="header-surat">
                            <img src="/assets/icon/logokabupatenblora.png" alt="Logo Kabupaten Blora">
                            <div class="header-text">
                                <h3>PEMERINTAH KABUPATEN BLORA</h3>
                                <h3 style="text-transform: uppercase;">{{ $data->user->name }}</h3>
                                <p>Alamat Otomatis</p>
                                <h3>BLORA 58214</h3>
                            </div>
                        </div>

                        <div class="line-separator"></div>

                        <div class="body-surat">
                            <table class="table-info" style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td style="width: 200px; vertical-align: top;"><b>SURAT PERINTAH KERJA (SPK)</b></td>
                                    <td style="vertical-align: top;">
                                        SATUAN KERJA :<br>
                                        {{ $data->satuankerja }}
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        NOMOR DAN TANGGAL SPK :<br>
                                        Nomor : {{ $data->nomorspk }}<br>
                                        Tanggal : {{ $data->tanggalspk }}
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>NAMA PPK</b></td>
                                    <td>
                                        Nama : {{ $data->namalengkapspk }}<br>
                                        NIP : {{ $data->nipspk }}<br>
                                        Jabatan : Pejabat Pembuat Komitmen {{ $data->spkppk }}<br>
                                        Berkedudukan di : {{ $data->berkedudukanspk }}<br>
                                        yang bertindak untuk dan atas nama Pemerintah {{ $data->spkpemerintah }} Satuan Kerja {{ $data->satuankerjaspk }}, berdasarkan Surat Keputusan {{ $data->spkkeputusan }} Nomor {{ $data->spknomorkeputusan }} tanggal {{ $data->spktanggalkeputusan }} tentang Penunjukan Pejabat Pembuat Komitmen {{ $data->spktanggalppk }} Anggaran Pendapatan Dan Belanja Daerah Perubahan Tahun Anggaran {{ $data->tahunanggaran1 }}, selanjutnya disebut "Pejabat Penandatangan Kontrak", dengan:
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>NAMA PENYEDIA</b></td>
                                    <td>
                                        Nama : {{ $data->namapenyedia }}<br>
                                        Jabatan : {{ $data->jabatanpenyedia }}<br>
                                        Berkedudukan di : {{ $data->berkedudukanpenyedia }}<br>
                                        Akta Notaris<br>
                                        Nomor : {{ $data->nomorpenyedia }}<br>
                                        Tanggal : {{ $data->tanggalpenyedia }}<br>
                                        Notaris : {{ $data->notarispenyedia }}<br>
                                        Yang bertindak untuk dan atas nama {{ $data->atasnamapenyedia }} (selanjutnya disebut “Penyedia Jasa”).
                                    </td>
                                </tr>
                                <tr>
                                    <td><b>WAKIL SAH PPK</b></td>
                                    <td>
                                        Wakil Sah Para Pihak sebagai berikut:<br>
                                        Untuk PPK : {{ $data->ppk1 }} : {{ $data->ppk2 }}<br>
                                        (Pejabat Pelaksana Teknis Kegiatan (PPTK), Tim Teknis, Konsultan Pengawas)<br>
                                        Untuk Penyedia : {{ $data->spkuntukpenyedia }} (Pelaksana Lapangan)
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis natus esse ullam. Nesciunt quae delectus ex, voluptatem ullam sint cumque, fugiat commodi at blanditiis quasi ipsam doloribus ab nulla corrupti alias aspernatur mollitia velit quos voluptate quod. Commodi, vero explicabo excepturi hic sed laborum facilis iusto, cum ab eum fugit. Libero consequatur, dignissimos non sunt possimus, molestiae error et in reiciendis labore vero repellendus voluptatibus porro pariatur nisi impedit vitae totam officia ea ullam. Laboriosam, voluptate reprehenderit provident repellendus quasi quia quidem error. Aspernatur alias deserunt dolores dolorem ducimus fuga ea dolorum sint vero reiciendis odit voluptatum assumenda minima, numquam rerum maiores quasi mollitia, maxime error fugit. Eveniet nihil dignissimos cupiditate officia alias consequatur voluptatum soluta facilis, neque fuga perspiciatis ipsam earum itaque non nobis velit dolor rerum repellat, doloribus qui! Doloribus odio animi, perferendis praesentium non, ipsam repellendus ducimus est nisi ad id excepturi numquam minus vel quod facilis necessitatibus nemo. Eius inventore assumenda officiis aspernatur aperiam, unde voluptatem similique deleniti, quasi molestias, illum porro? Explicabo eos harum numquam cum possimus culpa at repellendus. Cumque ducimus labore quidem et dolorem tempore provident voluptatibus unde? Ipsam incidunt doloribus voluptatibus recusandae dolores odio tempore dolorum vitae ipsa ad, excepturi perferendis, at dolore iure repudiandae porro odit quae provident mollitia deserunt quidem. Quas dignissimos at, voluptas ullam rerum in! Tenetur cupiditate praesentium modi aperiam fugiat, dolorem autem quisquam neque commodi corporis porro voluptates odio cumque magnam blanditiis rem! Quibusdam, numquam iste explicabo facere praesentium voluptates expedita quam eum nam amet! Cumque earum, deleniti dolor blanditiis in iste officia pariatur quos eligendi rerum deserunt voluptatem expedita aut laborum excepturi. Ad cum quia praesentium aliquam nihil, necessitatibus neque natus cupiditate totam. Et iste repudiandae assumenda ipsam quia quidem architecto quibusdam, itaque eius ipsum provident deserunt sequi suscipit recusandae qui debitis! Ab, perferendis cupiditate officia incidunt iste reiciendis inventore quia. Aliquid fugit adipisci, voluptatem quis officia blanditiis exercitationem, dolore autem maxime magni sunt ex unde laudantium. Tenetur facere cupiditate sapiente nulla dolorem, labore quasi necessitatibus eius nesciunt quas accusamus temporibus dolore voluptatum totam sit enim. Doloremque dolor odit corrupti repellendus obcaecati? Atque rem aperiam inventore vero. Ad odit optio non ipsa! Dolore ut omnis asperiores. Aspernatur ipsam at nesciunt, neque minima illo provident natus deleniti! Tempore esse commodi magni tempora. Voluptatum ratione consequatur iusto maxime repellendus laboriosam? Minima, omnis! Nostrum accusamus, repellat vero consectetur non consequatur voluptatem necessitatibus iure dolorem exercitationem harum modi. Eaque fugiat voluptatibus molestiae dolores doloremque distinctio maiores perspiciatis, vero minima exercitationem impedit quibusdam necessitatibus, error magnam iure dignissimos ratione dolorem voluptatem doloribus quidem officiis sequi fugit dolore! Ullam animi rerum soluta quisquam hic aut. Molestias molestiae voluptatem facere praesentium aut. Recusandae fugit consectetur, tempore, ratione ea eligendi consequuntur voluptatem magni ullam atque at, odio sed. Veniam ipsam obcaecati tenetur sequi possimus labore officia. Odit iusto provident delectus eaque numquam officia reiciendis tenetur, eveniet architecto libero ex aperiam quasi ut accusamus vitae nobis, labore ipsam illum. Placeat impedit quasi voluptas similique tempora? Ea eligendi consequuntur, voluptate reiciendis quo consequatur inventore. Sequi sapiente impedit temporibus animi odio eos at eius deserunt laudantium asperiores. Voluptatum explicabo voluptatem necessitatibus eaque architecto exercitationem saepe dignissimos laboriosam nisi quis fuga ad assumenda iusto minus possimus cupiditate a laborum culpa tempore tempora, veritatis sequi fugit. Fugiat sunt unde harum libero accusamus doloribus in? Laboriosam rem deserunt architecto, facilis voluptate debitis amet qui perspiciatis hic perferendis sint quae corrupti placeat rerum animi ab reprehenderit aliquid. Ab minus velit dignissimos animi recusandae nemo ad, sed dolorem et rerum libero veritatis totam facilis perferendis laboriosam perspiciatis error excepturi ullam quae eveniet neque qui nisi quidem accusantium. Possimus dolorum eius excepturi commodi fugiat ratione itaque illum, cum amet velit optio neque sed laborum minima adipisci aperiam, sint, cumque quaerat voluptatem non pariatur cupiditate? Nisi, nesciunt? Enim assumenda possimus animi ad alias quam blanditiis ex deserunt dolor nostrum explicabo vel atque accusantium itaque commodi, quas dolorum unde recusandae. Earum, nihil molestiae? Earum quasi error deserunt numquam quas at libero expedita repudiandae ut fugit minus voluptate, accusamus facilis ex? Nulla numquam aliquid rem, quam aperiam expedita modi laudantium. Facere, cupiditate quos quo eveniet doloribus blanditiis ipsam ut perspiciatis cumque pariatur saepe maiores, doloremque ab quaerat cum! Officiis repellendus tenetur, itaque eveniet libero cupiditate ducimus corrupti enim facere veniam et praesentium nobis nesciunt maiores optio quidem. Sequi, eaque. Nulla placeat recusandae aliquam perferendis molestias a qui unde modi repellat dicta porro explicabo id expedita, ut sit, fuga quidem. Non repudiandae nesciunt, ratione nam nemo quas odio temporibus porro odit incidunt exercitationem! Quis, perspiciatis? Similique, voluptatibus animi alias eum eius distinctio et quos molestiae dolorum reprehenderit. Excepturi nam distinctio assumenda debitis. Illum reprehenderit libero quis omnis magnam tempore aliquam ea incidunt optio tempora perferendis minus architecto iusto saepe, excepturi iste distinctio, itaque, mollitia maxime dolorem! Ratione possimus quisquam accusantium ducimus cumque, accusamus esse. Totam repellat accusamus unde! Vitae molestias natus suscipit explicabo odit ab voluptatem quaerat tempore, animi incidunt doloribus necessitatibus doloremque, itaque amet facilis modi ducimus optio in, ullam aspernatur architecto totam neque earum ad! Dolore nemo itaque soluta quidem. Pariatur nesciunt inventore iure possimus libero reprehenderit optio impedit voluptas voluptate! Fugiat eaque reiciendis aut vero expedita, molestias nulla illo tempore! Maxime quis alias dolores accusamus, fugiat quos aspernatur harum, debitis cum architecto porro eum non ducimus facere quibusdam. Veritatis reprehenderit sed, unde ex et nesciunt dolores. Porro, temporibus adipisci praesentium minus molestiae ratione fuga sapiente dolorem, modi reprehenderit neque iusto eligendi eos voluptates maxime incidunt recusandae vel deserunt iste cumque! Modi qui, facere dignissimos eligendi cupiditate velit aut maxime iure! Iste dolore distinctio suscipit placeat, earum optio amet fugiat ad illo ex ipsum blanditiis voluptas deleniti, dolores facere sed corrupti alias. Rerum aliquid autem magnam, quia fuga, aliquam sequi debitis necessitatibus iure quod alias reiciendis minima odio ut aspernatur pariatur sed error porro natus praesentium excepturi tenetur dolor. Quam quos ut similique eaque voluptas. Quasi ex debitis provident sint. Natus fuga ex repudiandae, optio omnis sit quidem eligendi, repellat cumque voluptates quasi temporibus quis laborum id, quos minima est. Libero possimus hic architecto suscipit.</p>

                 <br><br>
<!-- Tombol Download -->

<!-- Tambahkan di bagian head -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>



<script>
    function generatePDF() {
        // Ambil element container
        const element = document.querySelector('.container-surat');

        html2canvas(element, {
            scale: 2, // Tingkat kualitas gambar
            logging: true,
            useCORS: true
        }).then(canvas => {
            // Konfigurasi PDF
            const imgData = canvas.toDataURL('image/png');
            const pdf = new jspdf.jsPDF({
                orientation: 'portrait',
                unit: 'mm',
                format: 'a4'
            });

            // Hitung dimensi halaman A4
            const pageWidth = pdf.internal.pageSize.getWidth();
            const pageHeight = pdf.internal.pageSize.getHeight();

            // Tambahkan gambar ke PDF
            pdf.addImage(imgData, 'PNG', 0, 0, pageWidth, pageHeight);

            // Download PDF
            pdf.save('surat-sppbj.pdf');
        }).catch(error => {
            console.error('Error generating PDF:', error);
        });
    }
    </script>

</div>
             <!-- /.card -->
         </div>
         <!-- /.col -->
     </div>
     <!--end::Row-->
     </div>
               <!--end::Container-->
     <!--end::App Content Header-->
     <!--begin::App Content-->
       <!--end::App Content-->
            </section>
    </main>
   <!--end::App Main-->
 </div>
 </div>


   @include('backend.00_administrator.00_baganterpisah.02_footer')

