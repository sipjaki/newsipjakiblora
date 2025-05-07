<style>
    .btn-navy {
        background-color: navy;
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
    }


    /* Styling untuk tabel */
    .custom-fl-table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
    }

    .custom-fl-table th, .custom-fl-table td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ddd;
    }

    .custom-fl-table th {
        background-color: #4CAF50;
        color: white;
        font-weight: bold;
    }

    .custom-fl-table td {
        background-color: #f9f9f9;
    }

    /* Styling untuk baris yang tidak memiliki materi */
    .no-materi-message {
        color: red;
        font-weight: bold;
        text-align: center;
        background-color: #ffcccc;
        display: block;
        margin: 10px 0;
        padding: 5px;
    }

    /* Styling untuk pesan 'MATERI BELUM DI UPLOAD' di luar tabel */
    .no-data-message {
        color: red;
        font-weight: bold;
        text-align: center;
        margin-top: 20px;
    }


    .header-surat {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 20px;

}

.header-text {
    margin: 0 auto;
}

.header-text h3, .header-text h4, .header-text p {
    margin: 5px 0; /* Memberikan jarak antar elemen */
}

.table-identitas {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.table-identitas td {
    padding: 8px 12px;
    border: 1px solid #ddd;
}

.table-identitas .label {
    font-weight: bold;
}

.table-identitas .colon {
    text-align: center;
    font-weight: bold;
}

.table-identitas tr:nth-child(even) {
    background-color: #f9f9f9; /* Memberikan latar belakang berbeda pada baris genap */
}

.table-identitas tr:hover {
    background-color: #f1f1f1; /* Efek hover untuk baris */
}

.table-identitas td {
    vertical-align: middle; /* Memastikan konten ter-align dengan baik di tengah */
}

h4 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}

.table-profil {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    margin-bottom: 20px;
}

.table-profil td {
    padding: 8px 12px;
    border: 1px solid #ddd;
}

.table-profil .label {
    font-weight: bold;
    width: 25%; /* Menjaga label agar tidak terlalu melebar */
}

.table-profil .colon {
    text-align: center;
    font-weight: bold;
    width: 10%;
}

.table-profil tr:nth-child(even) {
    background-color: #f9f9f9; /* Memberikan latar belakang berbeda pada baris genap */
}

.table-profil tr:hover {
    background-color: #f1f1f1; /* Efek hover untuk baris */
}

.table-profil td {
    vertical-align: middle; /* Memastikan konten ter-align dengan baik di tengah */
}

h4 {
    font-size: 1.4rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}

h5 {
    font-size: 1.2rem;
    margin-bottom: 10px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
}



</style>
@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-white overflow-x-hidden">
        <div class="header flex flex-col bg-[#56BBC5] overflow-hidden h-[350px] relative -mb-[92px]">
            <nav class="pt-5 px-3 flex justify-between items-center relative z-20">
                <div class="flex items-center gap-[10px]">
                    <a href="#" class="w-10 h-10 flex shrink-0">
                        {{-- <img src="assets/images/icons/back.svg" alt="icon"> --}}
                        <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                    </a>
                </div>
                <div class="flex flex-col items-center text-center max-w-full px-2">
                    <p class="text-xs leading-[18px] text-white break-words whitespace-normal">{{$title}}</p>
                </div>
                <a href="" class="w-10 h-10 flex shrink-0">
                    {{-- <img src="assets/images/icons/like.svg" alt="icon"> --}}
                    <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                </a>
            </nav>
            <div class="w-full h-full absolute bg-white overflow-hidden">
                <div class="w-full h-[266px] bg-gradient-to-b from-black/90 to-[#080925]/0 absolute z-10"></div>
                <img src="/assets/00_android/iconmenu/menuutama2.jpg" class="w-full h-full object-cover" alt="cover">
            </div>
        </div>
        <div class="flex flex-col z-30">

            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">

                <div class="container-surat">
                    <div class="header-surat">
                        <div class="header-text">
                            <h3>AGENDA PELATIHAN TKK KABUPATEN BLORA </h3>
                            <h4>DINAS PEKERJAAN UMUM DAN PENATAAN RUANG <br> KABUPATEN BLORA PROVINSI JAWA TENGAH</h4>
                            <p>------------------------------------------------------------</p>
                            <p>FORMULIR PENDAFTARAN</p>

                            <div class="full-width-container mx-auto px-4 pb-10">
                                <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] shadow-md w-full">
                                    <div style="display: flex; justify-content: center; margin-bottom: -20px;">
                                        <div style="width: 100%; max-width: 500px; overflow-x: auto;">
                                            <button type="button" style="
                                                display: inline-flex;
                                                align-items: center;
                                                justify-content: flex-start;
                                                gap: 10px;
                                                padding: 12px 20px;
                                                font-size: 16px;
                                                font-family: 'Poppins', sans-serif;
                                                border: 1px solid #28a745;
                                                background-color: #28a745;
                                                color: white;
                                                border-radius: 6px;
                                                cursor: pointer;
                                                transition: all 0.3s ease;
                                                white-space: normal;
                                                word-break: break-word;
                                                width: 100%;
                                                text-align: left;
                                            "
                                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                            onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white';">
                                                <img src="/assets/icon/pupr.png" alt="icon" style="width: 20px; height: 20px; object-fit: contain;">
                                                <span style="flex: 1;">{{ $title }} : {{ $agendaskknamakegiatan }}</span>
                                            </button>
                                        </div>

                                    </div>


                                    <div class="table-wrapper">


                                                <button
                                                onclick="history.back();"
                                                onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                                onmouseout="this.style.backgroundColor='#374151'; this.style.color='white';"
                                                style="background-color: #374151; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">
                                                <!-- Ikon Kembali -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                                    viewBox="0 0 16 16" style="margin-right: 8px;">
                                                    <path fill-rule="evenodd"
                                                        d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z" />
                                                </svg>
                                                Kembali
                                            </button>

                                            <style>
                                                button {
                                                    border-radius: 15px; /* Ensure border radius */
                                                    background-color: #64748b; /* Initial background */
                                                    color: white; /* Initial text color */
                                                    border: 2px solid #64748b; /* Initial border color */
                                                    transition: background-color 0.3s ease, color 0.3s ease, border-color 0.3s ease; /* Smooth transition */
                                                }

                                                button:hover {
                                                    background-color: white; /* Change background on hover */
                                                    color: black; /* Change text color on hover */
                                                    border-color: black; /* Change border color on hover */
                                                }
                                            </style>
                                            <br><br>

                        </div>
                    </div>
            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
