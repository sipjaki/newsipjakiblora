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

            <h2 style="
    margin-top: 10px;
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

Rencana Strategis Program Dan Jasa Konstruksi <br> Kabupaten Bandung Barat 
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
    height: 120vh;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
  <div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div>


    <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;">Kementrian Pekerjaan Umum Dan Perumahan Rakyat </h1>
    <div class="container" style="margin-top: 20px;">
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
        .badgedownload {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                margin-top: 20px;
                margin-left: 500px;
                transition: background-color 0.3s, color 0.3s;
                margin-left: 225px;
                cursor: pointer;
             
            }
    
            .badgedownload:hover {
                background-color: white;
                color: black;
                background: white;
            }

    </style>

    @foreach ($data as $item )
        
    <div class="pdf-container">
        <iframe class="pdf-frame" src="{{asset('storage/' . $item->peraturan )}}"></iframe>
    </div>
    <div style="margin-left: 450px;">
        <button class="download-btn badgedownload" id="downloadBtn"><i class="fas fa-download me-2"></i> Download PDF</button>
    </div>
</div>
</div>


<script>
    document.getElementById('downloadBtn').addEventListener('click', function() {
        // URL file PDF
        const pdfUrl = '{{asset('storage/' . $item->peraturan)}}';
        
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

@endforeach

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