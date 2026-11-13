@include('backend.00_administrator.00_baganterpisah.01_header')

<!--begin::Body-->
  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
{{-- ---------------------------------------------------------------------- --}}

@include('backend.00_administrator.00_baganterpisah.04_navbar')
@include('button')
{{-- ---------------------------------------------------------------------- --}}

      @include('backend.00_administrator.00_baganterpisah.03_sidebar')

      <!--begin::App Main-->
      <main class="app-main">
          {{-- <section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%; min-height: 100vh;" loading="lazy"> --}}
        <section style="background: linear-gradient(to bottom, #a8f0c6, #ffffff); width: 100%; min-height: 100vh;">

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

        <br>
        <!-- Menampilkan pesan sukses -->

            <!-- Menyertakan FontAwesome untuk ikon -->

        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row" style="margin-right: 10px; margin-left:10px;">
                <!-- /.card -->
                <div class="card mb-4">
                    <div class="card-header">
                        @include('backend.00_administrator.00_baganterpisah.12_judulupdate')

                           {{-- ======================================================= --}}
        {{-- ALERT --}}
        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                       <a href="{{ url()->previous() }}">
                            <button class="button-newvalidasi">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
                        </svg>
                        Kembali
                        </button>

                        </a>

        </div>
        <hr>
{{--  --}}


<div class="text-center">
    <hr class="my-4" style="border-top: 2px dashed #03157e; width: 60%; margin: auto;">
    <h5 style="color: #03157e; font-weight: bold; margin-top: 5px; font-size:16px;">
        <i class="bi bi-upload" style="margin-right: 6px;"></i>
        Upload Perbaikan Berkas Saudara !
    </h5>
    <hr class="my-4" style="border-top: 2px dashed #03157e; width: 60%; margin: auto;">
</div>

{{--  --}}

        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form action="{{ route('berkasperbaikandatapeserta', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Ganti dengan PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">
                                <div class="row">
                                    <!-- Left Column (6/12) -->
                                    <div class="col-md-6">
                                        <!-- Nama Kegiatan -->
                                        {{--  --}}
<div class="mb-3">
    <label class="form-label" for="skkanda">
        <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: navy;"></i>
        Upload Screenshot SKK Saudara | .pdf maksimal 15 MB
    </label>

    {{-- Preview File Lama --}}
    @if($data->skkanda)
        @php
            $relativePath = $data->skkanda;
            $fullPath = public_path($relativePath);
            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
        @endphp

        <div class="mb-2 text-center" id="old-preview">
            @if(file_exists($fullPath))
                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                    <img src="{{ asset($relativePath) }}" alt="Preview SKK Lama"
                         style="max-height: 300px; border: 1px solid #ccc;">
                @elseif($ext === 'pdf')
                    <iframe src="{{ asset($relativePath) }}" frameborder="0"
                            width="100%" height="300px"></iframe>
                @else
                    <p>
                        <a href="{{ asset($relativePath) }}" target="_blank"
                           class="btn btn-sm btn-outline-primary">
                           Download File Lama
                        </a>
                    </p>
                @endif
            @else
                <p class="text-danger">File lama tidak ditemukan di server.</p>
            @endif
        </div>
    @endif

    {{-- Preview File Baru --}}
    <div id="new-preview" class="mb-2 text-center" style="display:none;"></div>

    {{-- Input Upload --}}
    <input type="file" id="skkanda" name="skkanda"
           class="form-control @error('skkanda') is-invalid @enderror"
           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>

    @error('skkanda')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Script Preview Baru --}}
<script>
document.getElementById('skkanda').addEventListener('change', function (e) {
    let file = e.target.files[0];
    let preview = document.getElementById('new-preview');
    preview.innerHTML = '';
    if (!file) {
        preview.style.display = 'none';
        return;
    }

    let ext = file.name.split('.').pop().toLowerCase();
    let url = URL.createObjectURL(file);

    if (['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(ext)) {
        preview.innerHTML = `<img src="${url}" alt="Preview Baru"
                              style="max-height:300px; border:1px solid #ccc;">`;
    } else if (ext === 'pdf') {
        preview.innerHTML = `<iframe src="${url}" frameborder="0"
                              width="100%" height="300px"></iframe>`;
    } else {
        preview.innerHTML = `<p><strong>File dipilih:</strong> ${file.name}</p>`;
    }
    preview.style.display = 'block';
});
</script>

<br>
<div class="mb-3">
    <label class="form-label" for="uploadktp">
        <i class="bi bi-file-earmark-person" style="margin-right: 8px; color: navy;"></i>
        Upload KTP | .pdf, .jpg, .jpeg, .png | Max 15 MB
    </label>

    {{-- Preview File Lama --}}
    @if($data->uploadktp)
        @php
            $relativePath = $data->uploadktp;
            $fullPath = public_path($relativePath);
            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
        @endphp

        <div class="mb-2 text-center" id="old-preview-ktp">
            @if(file_exists($fullPath))
                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                    <img src="{{ asset($relativePath) }}" alt="Preview KTP Lama"
                         class="img-fluid border" style="max-height: 300px;">
                @elseif($ext === 'pdf')
                    <iframe src="{{ asset($relativePath) }}" frameborder="0"
                            class="w-100 border" style="height: 300px;"></iframe>
                @else
                    <a href="{{ asset($relativePath) }}" target="_blank" class="btn btn-sm btn-outline-primary">Download File Lama</a>
                @endif
            @else
                <p class="text-danger">File KTP tidak ditemukan di server.</p>
            @endif
        </div>
    @endif

    {{-- Preview File Baru --}}
    <div id="new-preview-ktp" class="mb-2 text-center" style="display:none;"></div>

    {{-- Input Upload --}}
    <input type="file" id="uploadktp" name="uploadktp"
           class="form-control @error('uploadktp') is-invalid @enderror"
           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>

    @error('uploadktp')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Script Preview Baru --}}
<script>
document.getElementById('uploadktp').addEventListener('change', function (e) {
    let file = e.target.files[0];
    let preview = document.getElementById('new-preview-ktp');
    preview.innerHTML = '';
    if (!file) {
        preview.style.display = 'none';
        return;
    }

    let ext = file.name.split('.').pop().toLowerCase();
    let url = URL.createObjectURL(file);

    if (['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(ext)) {
        preview.innerHTML = `<img src="${url}" alt="Preview Baru"
                              class="img-fluid border" style="max-height:300px;">`;
    } else if (ext === 'pdf') {
        preview.innerHTML = `<iframe src="${url}" frameborder="0"
                              class="w-100 border" style="height: 300px;"></iframe>`;
    } else {
        preview.innerHTML = `<p><strong>File dipilih:</strong> ${file.name}</p>`;
    }
    preview.style.display = 'block';
});
</script>


<br>

<div class="mb-3">
    <label class="form-label" for="uploadfoto">
        <i class="bi bi-file-earmark-person" style="margin-right: 8px; color: navy;"></i>
        Upload Pas Foto 4X6 Background Merah | jpg, jpeg, png | Max 15 MB
    </label>

    {{-- Preview File Lama --}}
    @if($data->uploadfoto)
        @php
            $relativePath = $data->uploadfoto;
            $fullPath = public_path($relativePath);
            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
        @endphp

        <div class="mb-2 text-center" id="old-preview-foto">
            @if(file_exists($fullPath))
                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                    <img src="{{ asset($relativePath) }}" alt="Preview Foto Lama"
                         class="img-fluid border" style="max-height: 300px;">
                @elseif($ext === 'pdf')
                    <iframe src="{{ asset($relativePath) }}" frameborder="0"
                            class="w-100 border" style="height: 300px;"></iframe>
                @else
                    <a href="{{ asset($relativePath) }}" target="_blank"
                       class="btn btn-sm btn-outline-primary">Download File Lama</a>
                @endif
            @else
                <p class="text-danger">File lama tidak ditemukan di server.</p>
            @endif
        </div>
    @endif

    {{-- Preview File Baru --}}
    <div id="new-preview-foto" class="mb-2 text-center" style="display:none;"></div>

    {{-- Input Upload --}}
    <input type="file" id="uploadfoto" name="uploadfoto"
           class="form-control @error('uploadfoto') is-invalid @enderror"
           accept=".jpg,.jpeg,.png,.gif,.webp,.pdf">
    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>

    @error('uploadfoto')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Script Preview Baru --}}
<script>
document.getElementById('uploadfoto').addEventListener('change', function (e) {
    let file = e.target.files[0];
    let preview = document.getElementById('new-preview-foto');
    preview.innerHTML = '';
    if (!file) {
        preview.style.display = 'none';
        return;
    }

    let ext = file.name.split('.').pop().toLowerCase();
    let url = URL.createObjectURL(file);

    if (['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(ext)) {
        preview.innerHTML = `<img src="${url}" alt="Preview Baru"
                              class="img-fluid border" style="max-height:300px;">`;
    } else if (ext === 'pdf') {
        preview.innerHTML = `<iframe src="${url}" frameborder="0"
                              class="w-100 border" style="height: 300px;"></iframe>`;
    } else {
        preview.innerHTML = `<p><strong>File dipilih:</strong> ${file.name}</p>`;
    }
    preview.style.display = 'block';
});
</script>

<br>

<div class="mb-3">
    <label class="form-label" for="uploadijazah">
        <i class="bi bi-file-earmark-person" style="margin-right: 8px; color: navy;"></i>
        Upload Ijazah | .pdf | Max 15 MB
    </label>

    {{-- Preview File Lama --}}
    @if($data->uploadijazah)
        @php
            $relativePath = $data->uploadijazah;
            $fullPath = public_path($relativePath);
            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
        @endphp

        <div class="mb-2 text-center" id="old-preview-ijazah">
            @if(file_exists($fullPath))
                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                    <img src="{{ asset($relativePath) }}" alt="Preview Ijazah Lama"
                         class="img-fluid border" style="max-height: 300px;">
                @elseif($ext === 'pdf')
                    <iframe src="{{ asset($relativePath) }}" frameborder="0"
                            class="w-100 border" style="height: 300px;"></iframe>
                @else
                    <a href="{{ asset($relativePath) }}" target="_blank"
                       class="btn btn-sm btn-outline-primary">Download File Lama</a>
                @endif
            @else
                <p class="text-danger">File lama tidak ditemukan di server.</p>
            @endif
        </div>
    @endif

    {{-- Preview File Baru --}}
    <div id="new-preview-ijazah" class="mb-2 text-center" style="display:none;"></div>

    {{-- Input Upload --}}
    <input type="file" id="uploadijazah" name="uploadijazah"
           class="form-control @error('uploadijazah') is-invalid @enderror"
           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>

    @error('uploadijazah')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Script Preview Baru --}}
<script>
document.getElementById('uploadijazah').addEventListener('change', function (e) {
    let file = e.target.files[0];
    let preview = document.getElementById('new-preview-ijazah');
    preview.innerHTML = '';
    if (!file) {
        preview.style.display = 'none';
        return;
    }

    let ext = file.name.split('.').pop().toLowerCase();
    let url = URL.createObjectURL(file);

    if (['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(ext)) {
        preview.innerHTML = `<img src="${url}" alt="Preview Baru"
                              class="img-fluid border" style="max-height:300px;">`;
    } else if (ext === 'pdf') {
        preview.innerHTML = `<iframe src="${url}" frameborder="0"
                              class="w-100 border" style="height: 300px;"></iframe>`;
    } else {
        preview.innerHTML = `<p><strong>File dipilih:</strong> ${file.name}</p>`;
    }
    preview.style.display = 'block';
});
</script>

<br>

                                    </div>

                                    <!-- Right Column -->
                                    <div class="col-md-6">

<div class="mb-3">
    <label class="form-label" for="uploadpengalaman">
        <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: navy;"></i>
        Upload Pengalaman | .pdf | Max 15 MB
    </label>

    {{-- Preview File Lama --}}
    @if($data->uploadpengalaman)
        @php
            $relativePath = $data->uploadpengalaman;
            $fullPath = public_path($relativePath);
            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
        @endphp

        <div class="mb-2 text-center" id="old-preview-pengalaman">
            @if(file_exists($fullPath))
                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                    <img src="{{ asset($relativePath) }}" alt="Preview Pengalaman Lama"
                         class="img-fluid border" style="max-height: 300px;">
                @elseif($ext === 'pdf')
                    <iframe src="{{ asset($relativePath) }}" frameborder="0"
                            class="w-100 border" style="height: 300px;"></iframe>
                @else
                    <a href="{{ asset($relativePath) }}" target="_blank"
                       class="btn btn-sm btn-outline-primary">Download File Lama</a>
                @endif
            @else
                <p class="text-danger">File lama tidak ditemukan di server.</p>
            @endif
        </div>
    @endif

    {{-- Preview File Baru --}}
    <div id="new-preview-pengalaman" class="mb-2 text-center" style="display:none;"></div>

    {{-- Input Upload --}}
    <input type="file" id="uploadpengalaman" name="uploadpengalaman"
           class="form-control @error('uploadpengalaman') is-invalid @enderror"
           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>

    @error('uploadpengalaman')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Script Preview Baru --}}
<script>
document.getElementById('uploadpengalaman').addEventListener('change', function (e) {
    let file = e.target.files[0];
    let preview = document.getElementById('new-preview-pengalaman');
    preview.innerHTML = '';
    if (!file) {
        preview.style.display = 'none';
        return;
    }

    let ext = file.name.split('.').pop().toLowerCase();
    let url = URL.createObjectURL(file);

    if (['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(ext)) {
        preview.innerHTML = `<img src="${url}" alt="Preview Baru"
                              class="img-fluid border" style="max-height:300px;">`;
    } else if (ext === 'pdf') {
        preview.innerHTML = `<iframe src="${url}" frameborder="0"
                              class="w-100 border" style="height: 300px;"></iframe>`;
    } else {
        preview.innerHTML = `<p><strong>File dipilih:</strong> ${file.name}</p>`;
    }
    preview.style.display = 'block';
});
</script>

<br>

<div class="mb-3">
    <label class="form-label" for="uploadkebenarandata">
        <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: navy;"></i>
        Upload Kebenaran Data | .pdf | Max 15 MB
    </label>

    {{-- Preview File Lama --}}
    @if($data->uploadkebenarandata)
        @php
            $relativePath = $data->uploadkebenarandata;
            $fullPath = public_path($relativePath);
            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
        @endphp

        <div class="mb-2 text-center" id="old-preview-kebenarandata">
            @if(file_exists($fullPath))
                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                    <img src="{{ asset($relativePath) }}" alt="Preview Kebenaran Data Lama"
                         class="img-fluid border" style="max-height: 300px;">
                @elseif($ext === 'pdf')
                    <iframe src="{{ asset($relativePath) }}" frameborder="0"
                            class="w-100 border" style="height: 300px;"></iframe>
                @else
                    <a href="{{ asset($relativePath) }}" target="_blank"
                       class="btn btn-sm btn-outline-primary">Download File Lama</a>
                @endif
            @else
                <p class="text-danger">File lama tidak ditemukan di server.</p>
            @endif
        </div>
    @endif

    {{-- Preview File Baru --}}
    <div id="new-preview-kebenarandata" class="mb-2 text-center" style="display:none;"></div>

    {{-- Input Upload --}}
    <input type="file" id="uploadkebenarandata" name="uploadkebenarandata"
           class="form-control @error('uploadkebenarandata') is-invalid @enderror"
           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>

    @error('uploadkebenarandata')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Script Preview Baru --}}
<script>
document.getElementById('uploadkebenarandata').addEventListener('change', function (e) {
    let file = e.target.files[0];
    let preview = document.getElementById('new-preview-kebenarandata');
    preview.innerHTML = '';
    if (!file) {
        preview.style.display = 'none';
        return;
    }

    let ext = file.name.split('.').pop().toLowerCase();
    let url = URL.createObjectURL(file);

    if (['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(ext)) {
        preview.innerHTML = `<img src="${url}" alt="Preview Baru"
                              class="img-fluid border" style="max-height:300px;">`;
    } else if (ext === 'pdf') {
        preview.innerHTML = `<iframe src="${url}" frameborder="0"
                              class="w-100 border" style="height: 300px;"></iframe>`;
    } else {
        preview.innerHTML = `<p><strong>File dipilih:</strong> ${file.name}</p>`;
    }
    preview.style.display = 'block';
});
</script>

<br>

<div class="mb-3">
    <label class="form-label" for="uploadnpwp">
        <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: navy;"></i> Upload NPWP | .pdf | Max 15 MB
    </label>

    {{-- Preview File Lama --}}
    @if($data->uploadnpwp)
        @php
            $relativePath = $data->uploadnpwp;
            $fullPath = public_path($relativePath);
            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
        @endphp

        <div class="mb-2 text-center" id="old-preview-npwp">
            @if(file_exists($fullPath))
                @if(in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp']))
                    <img src="{{ asset($relativePath) }}" alt="Preview NPWP Lama"
                         class="img-fluid border" style="max-height: 300px;">
                @elseif($ext === 'pdf')
                    <iframe src="{{ asset($relativePath) }}" frameborder="0"
                            class="w-100 border" style="height: 300px;"></iframe>
                @else
                    <a href="{{ asset($relativePath) }}" target="_blank"
                       class="btn btn-sm btn-outline-primary">Download File Lama</a>
                @endif
            @else
                <p class="text-danger">File lama tidak ditemukan di server.</p>
            @endif
        </div>
    @endif

    {{-- Preview File Baru --}}
    <div id="new-preview-npwp" class="mb-2 text-center" style="display:none;"></div>

    {{-- Input Upload --}}
    <input type="file" id="uploadnpwp" name="uploadnpwp"
           class="form-control @error('uploadnpwp') is-invalid @enderror"
           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>

    @error('uploadnpwp')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Script Preview Baru --}}
<script>
document.getElementById('uploadnpwp').addEventListener('change', function (e) {
    let file = e.target.files[0];
    let preview = document.getElementById('new-preview-npwp');
    preview.innerHTML = '';
    if (!file) {
        preview.style.display = 'none';
        return;
    }

    let ext = file.name.split('.').pop().toLowerCase();
    let url = URL.createObjectURL(file);

    if (['jpg', 'jpeg', 'png', 'gif', 'webp'].includes(ext)) {
        preview.innerHTML = `<img src="${url}" alt="Preview Baru"
                              class="img-fluid border" style="max-height:300px;">`;
    } else if (ext === 'pdf') {
        preview.innerHTML = `<iframe src="${url}" frameborder="0"
                              class="w-100 border" style="height: 300px;"></iframe>`;
    } else {
        preview.innerHTML = `<p><strong>File dipilih:</strong> ${file.name}</p>`;
    }
    preview.style.display = 'block';
});
</script>

<br>

<div class="mb-3">
    <label class="form-label" for="uploaddaftarriwayathidup">
        <i class="bi bi-file-earmark-text" style="margin-right: 8px; color: navy;"></i> Upload Daftar Riwayat Hidup | .pdf | Max 15 MB
    </label>

    {{-- Preview File Lama --}}
    @if($data->uploaddaftarriwayathidup)
        @php
            $relativePath = $data->uploaddaftarriwayathidup;
            $fullPath = public_path($relativePath);
            $ext = strtolower(pathinfo($fullPath, PATHINFO_EXTENSION));
        @endphp

        <div class="mb-2 text-center" id="old-preview-riwayathidup">
            @if(file_exists($fullPath))
                @if(in_array($ext, ['jpg','jpeg','png','gif','webp']))
                    <img src="{{ asset($relativePath) }}" alt="Preview Lama"
                         class="img-fluid border" style="max-height: 300px;">
                @elseif($ext === 'pdf')
                    <iframe src="{{ asset($relativePath) }}" frameborder="0"
                            class="w-100 border" style="height: 300px;"></iframe>
                @else
                    <a href="{{ asset($relativePath) }}" target="_blank" class="btn btn-sm btn-outline-primary">Download File Lama</a>
                @endif
            @else
                <p class="text-danger">File lama tidak ditemukan di server.</p>
            @endif
        </div>
    @endif

    {{-- Preview File Baru --}}
    <div id="new-preview-riwayathidup" class="mb-2 text-center" style="display:none;"></div>

    {{-- Input Upload --}}
    <input type="file" id="uploaddaftarriwayathidup" name="uploaddaftarriwayathidup"
           class="form-control @error('uploaddaftarriwayathidup') is-invalid @enderror"
           accept=".pdf,.jpg,.jpeg,.png,.gif,.webp">
    <small class="text-muted">Jika upload file baru, maka file lama akan ditimpa.</small>

    @error('uploaddaftarriwayathidup')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

{{-- Script Preview Baru --}}
<script>
document.getElementById('uploaddaftarriwayathidup').addEventListener('change', function(e) {
    let file = e.target.files[0];
    let preview = document.getElementById('new-preview-riwayathidup');
    preview.innerHTML = '';
    if (!file) {
        preview.style.display = 'none';
        return;
    }

    let ext = file.name.split('.').pop().toLowerCase();
    let url = URL.createObjectURL(file);

    if (['jpg','jpeg','png','gif','webp'].includes(ext)) {
        preview.innerHTML = `<img src="${url}" alt="Preview Baru" class="img-fluid border" style="max-height:300px;">`;
    } else if (ext === 'pdf') {
        preview.innerHTML = `<iframe src="${url}" frameborder="0" class="w-100 border" style="height:300px;"></iframe>`;
    } else {
        preview.innerHTML = `<p><strong>File dipilih:</strong> ${file.name}</p>`;
    }
    preview.style.display = 'block';
});
</script>

<input type="hidden" name="verifikasipu" value="">
<input type="hidden" name="validasi_ktp" value="">
<input type="hidden" name="validasi_foto" value="">
<input type="hidden" name="validasi_ijazah" value="">
<input type="hidden" name="validasi_pengalaman" value="">
<input type="hidden" name="validasi_kebenarandata" value="">
<input type="hidden" name="validasi_npwp" value="">
<input type="hidden" name="validasi_daftarriwayathidup" value="">


                                    </div>
                                </div>
                            </div>

                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <div class="flex justify-end">
                                <button type="button" onclick="openModal()"
                                        class="button-berkas flex items-center gap-2 px-4 py-2">
                                    <!-- Ikon Pensil dari Bootstrap Icons -->
                                    <i class="bi bi-pencil" style="font-size: 20px;"></i>

                                    <span style="font-family: 'Poppins', sans-serif;">Perbaikan Data ?</span>
                                </button>

                                </div>
                                <!-- Modal Konfirmasi -->
                                <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                      <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                        Apakah Anda yakin ingin memperbarui data ini?
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
                                    Ya, Update
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

                        </form>

                             </div>
                        <!--end::Quick Example-->

                    </div>
                    <!-- /.card -->
                    <!-- Button Section -->

                    </div>
                    <!--end::Row-->
                    </div>

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
