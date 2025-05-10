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
                            <h3>AGENDA SERTFIKASI TKK</h3>
                            <h4>DPUPR KABUPATEN BLORA <br> PROVINSI JAWA TENGAH</h4>
                            <p>------------------------------------</p>
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

                                        <form action="{{ route('daftarpesertasertifikasiskkcreatenew') }}" method="POST" enctype="multipart/form-data" style="font-family: 'Poppins', sans-serif;">
                                            @csrf
                                            <input type="hidden" name="agendaskk_id" value="{{ $agendaskk_id }}">
                                                <br>

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        @php
                                                        $inputStyle = "
                                                            width: 500px;
                                                            padding: 10px 14px;
                                                            border-radius: 8px;
                                                            border: 1px solid #ccc;
                                                            transition: 0.3s;
                                                            font-size: 14px;
                                                        ";

                                                        $labelStyle = "
                                                            margin-bottom: 6px;
                                                            font-weight: 500;
                                                            display: block;
                                                            text-align: left;
                                                        ";

                                                        $divStyle = "margin-bottom: 20px;";
                                                        $iconStyle = "color: navy;";
                                                        $errorTextStyle = "color: red; font-size: 12px; margin-top: 4px;";
                                                    @endphp

                                                        <div style="{{ $divStyle }}">
                                                            <label class="form-label" style="{{ $labelStyle }}">
                                                                <i class="bi bi-person" style="{{ $iconStyle }}"></i> Nama Lengkap (Terisi Otomatis)
                                                            </label>
                                                            <input type="text" style="{{ $inputStyle }}" class="form-control" value="{{ $namalengkap }}" readonly>
                                                        </div>

                                                        <div style="{{ $divStyle }}">
                                                            <label class="form-label" style="{{ $labelStyle }}">
                                                                <i class="bi bi-building" style="color: navy;"></i> Nomor Induk Kependudukan (NIK)
                                                            </label>
                                                            <input type="number" name="nik" style="{{ $inputStyle }}" class="@error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                                                            @error('nik')
                                                            <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                        </div>

                                                        <div class="col-md-6" style="{{ $divStyle }}">
                                                            <label class="form-label" style="{{ $labelStyle }}">
                                                                <i class="bi bi-mortarboard" style="{{ $iconStyle }}"></i> Jenjang Pendidikan
                                                            </label>
                                                            <select name="jenjangpendidikan_id" style="{{ $inputStyle }}" class="form-select @error('jenjangpendidikan_id') is-invalid @enderror">
                                                                <option value="">-- Pilih Jenjang Pendidikan --</option>
                                                                @foreach($jenjangpendidikan as $item)
                                                                    <option value="{{ $item->id }}" {{ old('jenjangpendidikan_id') == $item->id ? 'selected' : '' }}>
                                                                        {{ $item->jenjangpendidikan }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            {{-- @error('jenjangpendidikan_id') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                            @error('jenjangpendidikan_id')
                                                            <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                        </div>

                                                        <!-- Jabatan Kerja -->
                                                        <div class="col-md-6" style="{{ $divStyle }}">
                                                            <label class="form-label" style="{{ $labelStyle }}">
                                                                <i class="bi bi-person-workspace" style="{{ $iconStyle }}"></i> Jabatan Kerja
                                                            </label>
                                                            <select name="jabatankerja_id" style="{{ $inputStyle }}" class="form-select @error('jabatankerja_id') is-invalid @enderror">
                                                                <option value="">-- Pilih Jabatan Kerja --</option>
                                                                @foreach($jabatankerja as $item)
                                                                    <option value="{{ $item->id }}" {{ old('jabatankerja_id') == $item->id ? 'selected' : '' }}>
                                                                        {{ $item->jabatankerja }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            {{-- @error('jabatankerja_id') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                            @error('jabatankerja_id')
                                                            <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                        </div>

                                                        <!-- Nama Sekolah -->
                                                        <div class="col-md-6" style="{{ $divStyle }}">
                                                            <label class="form-label" style="{{ $labelStyle }}">
                                                                <i class="bi bi-building" style="{{ $iconStyle }}"></i> Nama Sekolah
                                                            </label>
                                                            <select name="namasekolah_id" style="{{ $inputStyle }}" class="form-select @error('namasekolah_id') is-invalid @enderror">
                                                                <option value="">-- Pilih Universitas/Sekolah/Instansi --</option>
                                                                @foreach($sekolah as $item)
                                                                    <option value="{{ $item->id }}" {{ old('namasekolah_id') == $item->id ? 'selected' : '' }}>
                                                                        {{ $item->namasekolah }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            Ket: Silahkan hubungi <a href="https://wa.me/6281326277717" target="_blank"><i class="bi bi-whatsapp"></i></a>
                                                            {{-- @error('namasekolah_id') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                            @error('namasekolah_id')
                                                            <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                        </div>

                                                        <!-- Tahun Bimtek -->
                                                        <div class="col-md-6" style="{{ $divStyle }}">
                                                            <label class="form-label" style="{{ $labelStyle }}">
                                                                <i class="bi bi-calendar-event" style="{{ $iconStyle }}"></i> Tahun Bimtek | Isi dengan (2025)
                                                            </label>
                                                            <select name="tahunpilihan_id" style="{{ $inputStyle }}" class="form-select @error('tahunpilihan_id') is-invalid @enderror">
                                                                <option value="">-- Pilih Tahun Bimtek --</option>
                                                                @foreach($tahunbimtek as $item)
                                                                    <option value="{{ $item->id }}" {{ old('tahunpilihan_id') == $item->id ? 'selected' : '' }}>
                                                                        {{ $item->tahunpilihan }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            {{-- @error('tahunpilihan_id') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                            @error('tahunpilihan_id')
                                                            <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror

                                                        </div>

                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <!-- Tempat Lahir -->
                                                            <div class="col-md-6" style="{{ $divStyle }}">
                                                                <label class="form-label" style="{{ $labelStyle }}">
                                                                    <i class="bi bi-geo-alt" style="color: navy;"></i> Tempat Lahir
                                                                </label>
                                                                <input type="text" name="tempatlahir" style="{{ $inputStyle }}" class="@error('tempatlahir') is-invalid @enderror" value="{{ old('tempatlahir') }}">
                                                                {{-- @error('tempatlahir') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}

                                                                @error('tempatlahir')
                                                                <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                                </div>

                                                            <!-- Tanggal Lahir -->
                                                            <div class="col-md-6" style="{{ $divStyle }}">
                                                                <label class="form-label" style="{{ $labelStyle }}">
                                                                    <i class="bi bi-calendar" style="color: navy;"></i> Tanggal Lahir
                                                                </label>
                                                                <input type="date" name="ttl" style="{{ $inputStyle }}" class="@error('ttl') is-invalid @enderror" value="{{ old('ttl') }}">
                                                                {{-- @error('ttl') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                                @error('ttl')
                                                                <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            </div>

                                                            <!-- Jenis Kelamin -->
                                                            <div class="col-md-6" style="{{ $divStyle }}">
                                                                <label class="form-label" style="{{ $labelStyle }}">
                                                                    <i class="bi bi-gender-ambiguous" style="color: navy;"></i> Jenis Kelamin
                                                                </label>
                                                                <select name="jeniskelamin" style="{{ $inputStyle }}" class="@error('jeniskelamin') is-invalid @enderror">
                                                                    <option value="">-- Pilih Jenis Kelamin --</option>
                                                                    <option value="Laki-laki" {{ old('jeniskelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                                                    <option value="Perempuan" {{ old('jeniskelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                                                </select>
                                                                {{-- @error('jeniskelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                                @error('jeniskelamin')
                                                                <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            </div>

                                                            <!-- Nomor Telepon -->
                                                            <div class="col-md-6" style="{{ $divStyle }}">
                                                                <label class="form-label" style="{{ $labelStyle }}">
                                                                    <i class="bi bi-telephone" style="color: navy;"></i> Nomor Telepon
                                                                </label>
                                                                <input type="text" name="notelepon" style="{{ $inputStyle }}" class="@error('notelepon') is-invalid @enderror" value="{{ old('notelepon') }}">
                                                                {{-- @error('notelepon') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                                @error('notelepon')
                                                                <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            </div>

                                                            <!-- Email -->
                                                            <div class="col-md-6" style="{{ $divStyle }}">
                                                                <label class="form-label" style="{{ $labelStyle }}">
                                                                    <i class="bi bi-envelope" style="color: navy;"></i> Email
                                                                </label>
                                                                <input type="email" name="email" style="{{ $inputStyle }}" class="@error('email') is-invalid @enderror" value="{{ old('email') }}">
                                                                {{-- @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                                @error('email')
                                                                <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            </div>

                                                            <!-- Tahun Lulus -->
                                                            <div class="col-md-6" style="{{ $divStyle }}">
                                                                <label class="form-label" style="{{ $labelStyle }}">
                                                                    <i class="bi bi-hourglass-split" style="color: navy;"></i> Tahun Lulus
                                                                </label>
                                                                <input type="number" name="tahunlulus" style="{{ $inputStyle }}" class="@error('tahunlulus') is-invalid @enderror" value="{{ old('tahunlulus') }}">
                                                                {{-- @error('tahunlulus') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                                @error('tahunlulus')
                                                                <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            </div>
                        <!-- Alamat -->
                                                            <div class="col-md-12" style="{{ $divStyle }}">
                                                                <label class="form-label" style="{{ $labelStyle }}">
                                                                    <i class="bi bi-house" style="color: navy;"></i> Alamat
                                                                </label>
                                                                <textarea name="alamat" rows="4" style="{{ $inputStyle }}" class="@error('alamat') is-invalid @enderror">{{ old('alamat') }}</textarea>
                                                                {{-- @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                                @error('alamat')
                                                                <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-12">
                                                        <!-- Nama Asosiasi -->
                                                        <div style="{{ $divStyle }}">
                                                            <label class="form-label" style="{{ $labelStyle }}">
                                                                <i class="bi bi-diagram-3" style="color: navy;"></i> Utusan
                                                            </label>
                                                            <input type="text" name="namaasosiasi" style="{{ $inputStyle }}" class="@error('namaasosiasi') is-invalid @enderror" value="{{ old('namaasosiasi') }}">
                                                            {{-- @error('namaasosiasi') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                            @error('namaasosiasi')
                                                            <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                            <p>Keterangan : Badan Usaha/ Perorangan/ Instansi/ Badan Usaha</p>
                                                        </div>

                                                        <div class="row">
                                                            <!-- Punya SKK -->
                                                            <div class="col-md-3" style="{{ $divStyle }}">
                                                                <label class="form-label" style="{{ $labelStyle }}">
                                                                    <i class="bi bi-card-checklist" style="color: navy;"></i> Apakah sebelumnya sudah pernah memiliki SKK dengan jabatan kerja yang lain ?

                                                                </label>
                                                                <select name="punyaskk" style="{{ $inputStyle }}" class="@error('punyaskk') is-invalid @enderror">
                                                                    <option value="">-- Pilih --</option>
                                                                    <option value="Ya" {{ old('punyaskk') == 'Ya' ? 'selected' : '' }}>Ya</option>
                                                                    <option value="Tidak" {{ old('punyaskk') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                                                </select>
                                                                {{-- @error('punyaskk') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                                @error('punyaskk')
                                                                <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            </div>

                                                            <!-- Punya SIKI -->
                                                            <div class="col-md-3" style="{{ $divStyle }}">
                                                                <label class="form-label" style="{{ $labelStyle }}">
                                                                    <i class="bi bi-patch-check" style="color: navy;"></i> Apakah sudah memiliki akun SIKI/ akun SIMPAN PUPR ?
                                                                </label>
                                                                <select name="punyasiki" style="{{ $inputStyle }}" class="@error('punyasiki') is-invalid @enderror">
                                                                    <option value="">-- Pilih --</option>
                                                                    <option value="Ya" {{ old('punyasiki') == 'Ya' ? 'selected' : '' }}>Ya</option>
                                                                    <option value="Tidak" {{ old('punyasiki') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                                                </select>
                                                                {{-- @error('punyasiki') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                                @error('punyasiki')
                                                                <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            </div>

                                                            <!-- Siap Patuhi Kode Etik -->
                                                            <div class="col-md-3" style="{{ $divStyle }}">
                                                                <label class="form-label" style="{{ $labelStyle }}">
                                                                    <i class="bi bi-shield-check" style="color: navy;"></i> Siap Patuhi Kode Etik?
                                                                </label>
                                                                <select name="siappatuh" style="{{ $inputStyle }}" class="@error('siappatuh') is-invalid @enderror">
                                                                    <option value="">-- Pilih --</option>
                                                                    <option value="Ya" {{ old('siappatuh') == 'Ya' ? 'selected' : '' }}>Ya</option>
                                                                    <option value="Tidak" {{ old('siappatuh') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                                                </select>
                                                                {{-- @error('siappatuh') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                                @error('siappatuh')
                                                                <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            </div>

                                                            <div class="col-md-3" style="{{ $divStyle }}">
                                                                <label class="form-label" style="{{ $labelStyle }}">
                                                                    <i class="bi bi-shield-check" style="color: navy;"></i> Apakah sudah memiliki Akun Portal Perizinan PUPR ?
                                                                </label>
                                                                <select name="portalpupr" style="{{ $inputStyle }}" class="@error('portalpupr') is-invalid @enderror">
                                                                    <option value="">-- Pilih --</option>
                                                                    <option value="Ya" {{ old('portalpupr') == 'Ya' ? 'selected' : '' }}>Ya</option>
                                                                    <option value="Tidak" {{ old('portalpupr') == 'Tidak' ? 'selected' : '' }}>Tidak</option>
                                                                </select>
                                                                {{-- @error('portalpupr') <div class="invalid-feedback">{{ $message }}</div> @enderror --}}
                                                                @error('portalpupr')
                                                                <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <br><br>
                                                        <!-- Upload KTP -->
                                                        <div class="col-md-4" style="{{ $divStyle }}">
                                                            <label class="form-label" style="{{ $labelStyle }}">
                                                                <i class="bi bi-file-earmark-person" style="color: navy;"></i> Upload KTP
                                                            </label>
                                                            <input type="file" name="uploadktp" style="{{ $inputStyle }}" class="form-control @error('uploadktp') is-invalid @enderror" accept="application/pdf,image/*" onchange="previewFile('ktpPreview', this)">
                                                            {{-- <div class="invalid-feedback">@error('uploadktp') {{ $message }} @enderror</div> --}}
                                                            @error('uploadktp')
                                                                <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                            <div id="ktpPreview" class="preview-container"></div>
                                                        </div>

                                                        <!-- Upload Foto -->
                                                        <div class="col-md-4" style="{{ $divStyle }}">
                                                            <label class="form-label" style="{{ $labelStyle }}">
                                                                <i class="bi bi-image" style="color: navy;"></i> Upload Pas Foto 3X4 Background Warna Merah
                                                            </label>
                                                            <input type="file" name="uploadfoto" style="{{ $inputStyle }}" class="form-control @error('uploadfoto') is-invalid @enderror" accept="image/*" onchange="previewFile('fotoPreview', this)">
                                                            {{-- <div class="invalid-feedback">@error('uploadfoto') {{ $message }} @enderror</div> --}}
                                                            @error('uploadfoto')
                                                            <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                            <div id="fotoPreview" class="preview-container"></div>
                                                        </div>

                                                        <!-- Upload Ijazah -->
                                                        <div class="col-md-4" style="{{ $divStyle }}">
                                                            <label class="form-label" style="{{ $labelStyle }}">
                                                                <i class="bi bi-file-earmark" style="color: navy;"></i> Upload Ijazah
                                                            </label>
                                                            <input type="file" name="uploadijazah" style="{{ $inputStyle }}" class="form-control @error('uploadijazah') is-invalid @enderror" accept="application/pdf,image/*" onchange="previewFile('ijazahPreview', this)">
                                                            {{-- <div class="invalid-feedback">@error('uploadijazah') {{ $message }} @enderror</div> --}}
                                                            @error('uploadijazah')
                                                            <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                            <div id="ijazahPreview" class="preview-container"></div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <!-- Upload Pengalaman -->
                                                        <div class="col-md-4" style="{{ $divStyle }}">
                                                            @php
                                                            $firstItem = $datacontohsurat->sortBy('id')->first(); // ambil berdasarkan ID terkecil
                                                            $fileDownload = null;

                                                            if ($firstItem && $firstItem->berkas) {
                                                                $path = public_path('storage/' . $firstItem->berkas);
                                                                if (file_exists($path)) {
                                                                    $fileDownload = asset('storage/' . $firstItem->berkas);
                                                                } else {
                                                                    $fileDownload = asset($firstItem->berkas); // fallback dari path luar storage
                                                                }
                                                            }
                                                        @endphp

                                                        <label class="form-label" style="{{ $labelStyle }}">
                                                            <i class="bi bi-file-earmark-text" style="color: navy;"></i> Upload Pengalaman |
                                                            @if ($fileDownload)
                                                                <a href="{{ $fileDownload }}" download style="color:rgba(0, 26, 255);">
                                                                    Contoh Pengalaman Kerja <i class="bi bi-download"></i>
                                                                </a>
                                                                {{-- <div style="font-size: 0.9em; color: gray;">
                                                                    File: {{ $firstItem->berkas }}
                                                                </div> --}}
                                                            @else
                                                                <span style="color: gray;">Contoh belum tersedia</span>
                                                            @endif
                                                        </label>

                                                            <input type="file" name="uploadpengalaman" style="{{ $inputStyle }}" class="form-control @error('uploadpengalaman') is-invalid @enderror" accept="application/pdf,image/*" onchange="previewFile('pengalamanPreview', this)">
                                                            {{-- <div class="invalid-feedback">@error('uploadpengalaman') {{ $message }} @enderror</div> --}}
                                                            @error('uploadpengalaman')
                                                            <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                            <div id="pengalamanPreview" class="preview-container"></div>
                                                        </div>

                                                        <!-- Upload NPWP -->
                                                        <div class="col-md-4" style="{{ $divStyle }}">
                                                            <label class="form-label" style="{{ $labelStyle }}">
                                                                <i class="bi bi-file-earmark" style="color: navy;"></i> Upload NPWP
                                                            </label>
                                                            <input type="file" name="uploadnpwp" style="{{ $inputStyle }}" class="form-control @error('uploadnpwp') is-invalid @enderror" accept="application/pdf,image/*" onchange="previewFile('npwpPreview', this)">
                                                            {{-- <div class="invalid-feedback">@error('uploadnpwp') {{ $message }} @enderror</div> --}}
                                                            @error('uploadnpwp')
                                                            <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                            <p>Ket : Wajib NPWP K3 dan Jenjang 5, 6 </p>
                                                            <div id="npwpPreview" class="preview-container"></div>
                                                        </div>

                                                        <!-- Upload Daftar Riwayat Hidup -->
                                                        <div class="col-md-4" style="{{ $divStyle }}">
                                                            <label class="form-label" style="{{ $labelStyle }}">
                                                                <i class="bi bi-file-earmark-text" style="color: navy;"></i> Upload Daftar Riwayat Hidup
                                                            </label>
                                                            <input type="file" name="uploaddaftarriwayathidup" style="{{ $inputStyle }}" class="form-control @error('uploaddaftarriwayathidup') is-invalid @enderror" accept="application/pdf,image/*" onchange="previewFile('riwayatPreview', this)">
                                                            {{-- <div class="invalid-feedback">@error('uploaddaftarriwayathidup') {{ $message }} @enderror</div> --}}
                                                            @error('uploaddaftarriwayathidup')
                                                            <div class="invalid-feedback" style="color: red; font-size: 13px;">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                            <div id="riwayatPreview" class="preview-container"></div>
                                                        </div>
                                                    </div>


<div class="row">
    <div class="col-md-4" style="{{ $divStyle }}">
        @php
            $secondItem = $datacontohsurat->sortBy('id')->skip(1)->first(); // ambil data ke-2 berdasarkan ID terkecil
            $fileDownload = null;

            if ($secondItem && $secondItem->berkas) {
                $path = public_path('storage/' . $secondItem->berkas);
                if (file_exists($path)) {
                    $fileDownload = asset('storage/' . $secondItem->berkas);
                } else {
                    $fileDownload = asset($secondItem->berkas); // fallback jika path bukan di storage
                }
            }
        @endphp

        <label class="form-label" style="{{ $labelStyle }}">
            <i class="bi bi-file-earmark-check" style="color: navy;"></i> Upload Kebenaran Data |
            @if ($fileDownload)
                <a href="{{ $fileDownload }}" download style="color:rgb(0, 26, 255);">
                    Contoh Surat Pernyataan <i class="bi bi-download"></i>
                </a>
            @else
                <span style="color: gray;">Contoh belum tersedia</span>
            @endif
        </label>

        <input type="file" name="uploadkebenarandata" style="{{ $inputStyle }}" class="form-control @error('uploadkebenarandata') is-invalid @enderror" accept="application/pdf,image/*" onchange="previewFile('kebenaranDataPreview', this)">
        {{-- <div class="invalid-feedback">@error('uploadkebenarandata') {{ $message }} @enderror</div> --}}
        @error('uploadkebenarandata')
        <div class="invalid-feedback" style="color: red; font-size: 13px;">
            {{ $message }}
        </div>
    @enderror
        <div id="kebenaranDataPreview" class="preview-container"></div>
    </div>

    </div>


                                                    <script>
                                                        function previewFile(previewId, input) {
                                                            const file = input.files[0];
                                                            const previewContainer = document.getElementById(previewId);
                                                            previewContainer.innerHTML = '';  // Clear previous preview

                                                            if (file) {
                                                                const reader = new FileReader();
                                                                reader.onload = function(e) {
                                                                    const fileType = file.type.split('/')[0];

                                                                    if (fileType === 'image') {
                                                                        const imgElement = document.createElement('img');
                                                                        imgElement.src = e.target.result;
                                                                        imgElement.style.width = '100%';
                                                                        imgElement.style.maxWidth = '210mm';  // A4 width
                                                                        imgElement.style.height = 'auto';
                                                                        previewContainer.appendChild(imgElement);
                                                                    } else if (fileType === 'application') {
                                                                        if (file.type === 'application/pdf') {
                                                                            const iframe = document.createElement('iframe');
                                                                            iframe.src = e.target.result;
                                                                            iframe.style.width = '100%';
                                                                            iframe.style.height = '400px';  // Adjust as needed
                                                                            previewContainer.appendChild(iframe);
                                                                        }
                                                                    }
                                                                };
                                                                reader.readAsDataURL(file);
                                                            }
                                                        }
                                                    </script>

                                                    <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">

                                                        <div class="flex justify-end">
                                                            <button type="button" onclick="openModal()"
                                                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                                            onmouseout="this.style.backgroundColor='#002a5a'; this.style.color='white';"
                                                            style="background-color: #002a5a; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">

                                                            <!-- Ikon SVG Pensil -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                            viewBox="0 0 24 24" fill="currentColor" style="margin-right: 8px;">
                                                        <path d="M9.99 15.21L9.9 19.48c.42 0 .6-.18.81-.39l1.94-1.89 4.02 2.93c.74.41 1.27.2 1.46-.68l2.64-12.36c.27-1.24-.47-1.73-1.24-1.45L2.58 9.75c-1.2.47-1.18 1.13-.2 1.42l4.87 1.52 11.3-7.1c.53-.35 1.01-.16.61.22"/>
                                                        </svg>

                                                            <span style="font-family: 'Poppins', sans-serif;">Kirim Formulir Pendaftaran </span>
                                                        </button>
                                                        </div>
                                                        <!-- Modal Konfirmasi -->
                                                        <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                                            <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                                              <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px; font-family: 'Poppins', sans-serif;">
                                                                Apakah Anda yakin data sudah benar dan ingin mengirim formulir ini?
                                                            </p>

                                                              <!-- Tombol -->
                                                              <div style="display: flex; justify-content: center; gap: 12px;">
                                                                <button id="confirmSubmitBtn"
                                                                onclick="submitForm()"
                                                                style="background-color: #10B981; color: white; padding: 8px 16px; border-radius: 8px; border: none; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                                                                onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                                                onmouseout="this.style.backgroundColor='#10B981'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                                                            <!-- Telegram SVG -->
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 448 512" fill="white">
                                                                <path d="M446.7 68.8c-5.7-4.8-13.8-5.7-20.3-2.2L26.1 263.5c-7.2 3.7-11.4 11.5-10.4 19.5s6.7 14.5 14.4 16.5l85.1 23.3 40.6 98.8c2.9 7.1 9.6 11.7 17.1 11.7h.4c7.7-.2 14.4-5.1 16.8-12.3l33.2-96.5 109.7 88.1c3.5 2.8 7.9 4.3 12.3 4.3 2.5 0 5-.5 7.4-1.4 6.4-2.5 11.2-8.2 12.7-15.1L448 89.4c1.3-7.6-1.6-15.3-7.3-20.6z"/>
                                                            </svg>
                                                            Ya
                                                        </button>

                                                        <!-- Tombol Batal dengan ikon X (SVG) -->
                                                        <button type="button"
                                                                onclick="closeModal()"
                                                                style="background-color: #EF4444; color: white; padding: 8px 16px; border-radius: 8px; border: none; cursor: pointer; transition: 0.3s; display: flex; align-items: center; gap: 6px;"
                                                                onmouseover="this.style.backgroundColor='white'; this.style.color='black'; this.querySelector('svg').style.fill='black';"
                                                                onmouseout="this.style.backgroundColor='#EF4444'; this.style.color='white'; this.querySelector('svg').style.fill='white';">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="16" viewBox="0 0 384 512" fill="white">
                                                                <path d="M231.6 256l142.7-142.7c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L186.3 210.7 43.6 68c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L141 256 0 397.7c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L186.3 301.3l142.7 142.7c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L231.6 256z"/>
                                                            </svg>
                                                            Batal
                                                        </button>

                                                              </div>
                                                            </div>
                                                        </div>

                                                        <!-- Script -->
                                                        <script>
                                                        function openModal() {
                                                            const modal = document.getElementById("confirmModal");
                                                            if (modal) modal.style.display = "flex";
                                                        }

                                                        function closeModal() {
                                                            const modal = document.getElementById("confirmModal");
                                                            if (modal) modal.style.display = "none";
                                                        }

                                                        </script>

                                                    </div>

                                                </div>
                                            </div>
                                        </form>

                                        {{-- <button
                                        onclick="history.back()"
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
                                    </button> --}}

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
                                    {{-- @include('frontend.00_approve.01_cssterpisah.paginations') --}}
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
