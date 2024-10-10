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

Peraturan Daerah Tentang Jasa Konstruksi
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
    height: 135vh;
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


/* Untuk memastikan tata letak responsif, Anda bisa menggunakan media queries */
@media (min-width: 768px) {
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


.badgedownload {
    background: linear-gradient(to right, navy, black);
    color: white;
    padding: 8px 20px;
    border-radius: 10px;
    display: inline-block;
    font-size: 1rem;
    text-align: center;
    font-size: 12px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}
.badgedownload:hover {
    background-color: white;
    color: black;
    background: white;
}

.badgekembali {
    background: linear-gradient(to right, green, black);
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    display: inline-block;
    font-size: 1rem;
    text-align: center;
    font-size: 12px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}
.badgekembali:hover {
    background-color: white;
    color: black;
    background: white;
}

.badgehidden {
    background: inherit ;
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    display: inline-block;
    font-size: 1rem;
    text-align: center;
    margin-left: 350px;
    font-size: 12px;
    cursor: pointer;
    transition: background-color 0.3s, color 0.3s;
}

}

</style>
<a>
<div class="badge"><i class="fas fa-file mr-2"></i>PERATURAN DAERAH TENTANG JASA KONSTRUKSI</div></label>
</a>
<a>
<div class="badgehidden" style="color: white"></div></label>
</a>
<a href="/peraturan/daerah" style="background: white;">
<button class="badgekembali" style="border: none; font-size:12px; cursor:pointer; "> <i class="fa fa-arrow-circle-left mr-2"></i>Kembali</button>
</a>

<button class="download-btn badgedownload" id="downloadBtn"><i class="fas fa-download mr-2"></i>Download .pdf</button>

            {{-- <button class="badgeupdate" style="border: none; font-size:12px; cursor:pointer; "> <i class="fas fa-file" style="margin-right: 5px;"></i> Update</button> --}}
            <!-- <button id="downloadBtn" class="badge" style="border:none; font-size:12px; cursor:pointer "> <i class="fas fa-download"></i> Download</button> -->
            
            <style>

.pdf-container {
text-align:center !important ;
position: relative;
padding: 5px; /* Jarak di dalam container */
width: calc(100% - 20px); /* Lebar 100% dikurangi 20px total dari padding kiri dan kanan */
max-width: 1000px; /* Lebar maksimal container */
display: flex;
flex-direction: column;
align-items: center !important; /* Menempatkan elemen di tengah horizontal */
justify-content: center; /* Menempatkan elemen di tengah vertikal */
height: 85vh; /* Tinggi 85% dari viewport */
margin: auto; /* Mengatur margin auto untuk sentralisasi */
border: 1px solid black;
border-radius: 25px;
overflow: hidden; /* Menyembunyikan konten yang meluber */
background-color: #FFCB0F;
background: linear-gradient(to bottom, yellow, white, black);
position: relative; /* Mengatur posisi relatif untuk container */
}
.pdf-frame {
width: calc(100% - 20px); /* Lebar PDF frame dengan jarak 10px di kiri dan kanan */
height: 100%; /* Tinggi PDF frame sama dengan tinggi container */
border: none;
overflow: auto; 
border-radius: 25px; 
padding: 5px 5px;/* Mengaktifkan scroll jika konten lebih besar dari ukuran frame */
}

</style>
<div style="margin-top: 15px;">

<a style="background: white; margin-top:10px; margin-bottom:10px; background: inherit;">
<div class="badge"><i class="fas fa-file mr-2"></i>{{$data->judul}}</div></label>
</a>
</div>
<p><br></p>


<div class="pdf-container">
    <iframe class="pdf-frame" src="{{ asset('storage/' . $data->peraturan) }}"></iframe>
</div>


<script>
document.getElementById('downloadBtn').addEventListener('click', function() {
    // URL file PDF
    const pdfUrl = '{{ asset('storage/' . $data->peraturan) }}';
    
    // Nama file yang diunduh berdasarkan atribut judul
    const fileName = '{{ $data->judul }}' + '.pdf'; // Pastikan menambahkan ekstensi file yang sesuai
    
    // Membuat elemen anchor
    const link = document.createElement('a');
    link.href = pdfUrl;
    link.download = fileName;
    
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




</div>


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