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
    height: 130vh;
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
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background-color: white;
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
                background-color: white;
                color: black;
                background: white;
            }
            .badgedownload {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
                margin-left: 425px;
                cursor: pointer;
             
            }
    
            .badgedownload:hover {
                background-color: white;
                color: black;
                background: white;
            }
        </style>
        <a style="background: white;">
            <div class="badge"><i class="fas fa-file mr-2"></i>Tupoksi Program & Jasa Konstruksi </div></label>
        </a>
        <button class="download-btn badgedownload" id="downloadBtn"><i class="fas fa-download me-2"></i> Download PDF</button>
                        <button class="badgeupdate" style="border: none; font-size:12px; cursor:pointer; "> <i class="fas fa-file" style="margin-right: 5px;"></i> Update</button>
                        <!-- <button id="downloadBtn" class="badge" style="border:none; font-size:12px; cursor:pointer "> <i class="fas fa-download"></i> Download</button> -->
                        
                        <style>
        .pdf-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 80%;
            height: 85vh;
            margin: auto;
            border: 1px solid black;
            border-radius: 25px;
            overflow: hidden;
            background-color: #FFCB0F;
            background: linear-gradient(to bottom, yellow, white, black);
        }
        .pdf-frame {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
    <div class="pdf-container mt-4">
        <iframe class="pdf-frame" src="/assets/library/01_profil/SOTK_DPUTR.pdf"></iframe>
    </div>


<script>
    document.getElementById('downloadBtn').addEventListener('click', function() {
        // URL file PDF
        const pdfUrl = '/assets/library/01_profil/SOTK_DPUTR.pdf';
        
        // Membuat elemen anchor
        const link = document.createElement('a');
        link.href = pdfUrl;
        link.download = pdfUrl.substring(pdfUrl.lastIndexOf('/') + 1);
        
        // Menyimulasikan klik pada elemen anchor
        document.body.appendChild(link);
        link.click();
        
        // Menghapus elemen anchor dari dokumen
        document.body.removeChild(link);
    });
</script>


</div>

    
</div>
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
    

    