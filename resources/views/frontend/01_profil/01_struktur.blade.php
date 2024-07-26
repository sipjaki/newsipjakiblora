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

Struktur Dinas Pekerjaan Umum Dan Penataan Ruang Kabupaten Bandung Barat
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
    height: 110vh;
    margin-left: 150px;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; padding: 0; margin-top: 10px;">
<h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;">Kementrian Pekerjaan Umum Dan Penataan Ruang </h1>
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
    </style>
    <!-- <div class="pdf-container">
        <iframe class="pdf-frame" src="/assets/library/01_profil/JASA_KONSTRUKSI_RENCARA_STRATEGIS_KABUPATEN_BANDUNG_BARAT.pdf"></iframe>
    </div> -->
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