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
                 <!-- /.card-header -->
                 <div class="card-header">
                    @include('backend.00_administrator.00_baganterpisah.10_judulhalaman')

                     <div style="display: flex; justify-content: flex-end; margin-bottom: 5px;">

                            <div style="display: flex; align-items: center; gap: 8px; margin-right:10px;">
        </div>


        <script>
                  function updateEntries() {
                let selectedValue = document.getElementById("entries").value;
                let url = new URL(window.location.href);
                url.searchParams.set("perPage", selectedValue);
                window.location.href = url.toString();
            }
        </script>

<!-- Tombol Create -->
    <a href="{{ url()->previous() }}">
    <button
        onmouseover="this.style.background='white'; this.style.color='#555'; this.style.border='1px solid #ddd'; this.style.transform='scale(1.05)'; this.querySelector('i').style.color='#555'"
        onmouseout="this.style.background='linear-gradient(45deg, #504d4d, #ffffff)'; this.style.color='#555'; this.style.border='1px solid #eee'; this.style.transform='scale(1)'; this.querySelector('i').style.color='#555'"
        style="
            background: linear-gradient(45deg, #504d4d, #ffffff);
            color: white;
            border: 1px solid #eee;
            margin-right: 10px;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        "
    >
        <i class="bi bi-arrow-left" style="color: #555; font-size: 18px; transition: all 0.3s ease;"></i>
        Kembali
    </button>
</a>


                        </div>
                 </div>
                 <!-- /.card-header -->
                 <div class="card-body p-0">
                     <div class="table-responsive" style="overflow-x: auto; white-space: nowrap;">

<div class="admin-profile-container" style="
    max-width: 800px;
    margin: 30px auto;
    padding: 30px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
    border: 2px solid;
    border-image: linear-gradient(45deg, #D4AF37, #2ECC71) 1;
    position: relative;
    overflow: hidden;
">
    <!-- Hiasan sudut -->
    <div class="corner-decor" style="
        position: absolute;
        width: 50px;
        height: 50px;
        top: 0;
        right: 0;
        border-top: 2px solid #D4AF37;
        border-right: 2px solid #D4AF37;
        border-top-right-radius: 10px;
    "></div>

    <div class="corner-decor" style="
        position: absolute;
        width: 50px;
        height: 50px;
        bottom: 0;
        left: 0;
        border-bottom: 2px solid #2ECC71;
        border-left: 2px solid #2ECC71;
        border-bottom-left-radius: 10px;
    "></div>

    <h4 style="
        text-align: center;
        margin-bottom: 30px;
        color: #333;
        font-family: 'Arial', sans-serif;
        border-bottom: 1px solid #eee;
        padding-bottom: 10px;
    ">Update Profil Anda</h4>

    <form action="{{ route('admin.profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="admin-avatar" style="text-align: center; margin-bottom: 20px;">
            <div style="margin-top: 10px; position: relative;">
                @if($user->avatar && file_exists(public_path($user->avatar)))
                    <img src="{{ asset($user->avatar) }}" alt="Admin Avatar" id="avatar-preview" style="
                        width: 150px;
                        height: 150px;
                        border-radius: 50%;
                        border: 3px solid #D4AF37;
                        object-fit: cover;
                        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    ">
                @elseif($user->avatar)
                    <img src="{{ $user->avatar }}" alt="Admin Avatar" id="avatar-preview" style="
                        width: 150px;
                        height: 150px;
                        border-radius: 50%;
                        border: 3px solid #D4AF37;
                        object-fit: cover;
                        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    ">
                @else
                    <img src="https://via.placeholder.com/150" alt="Admin Avatar" id="avatar-preview" style="
                        width: 150px;
                        height: 150px;
                        border-radius: 50%;
                        border: 3px solid #D4AF37;
                        object-fit: cover;
                        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
                    ">
                @endif
                <div style="margin-top: 10px;">
                    <label for="avatar" style="
                        display: inline-block;
                        padding: 8px 15px;
                        background: linear-gradient(to right, #D4AF37, #2ECC71);
                        color: white;
                        border-radius: 4px;
                        cursor: pointer;
                        font-size: 14px;
                    ">
                        Ganti Foto Profil
                        <input type="file" id="avatar" name="avatar" accept="image/*" style="display: none;" onchange="previewImage(this)">
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group" style="
            margin-bottom: 20px;
            padding: 15px;
            background: linear-gradient(to right, #f9f9f9, #fff);
            border-left: 4px solid #2ECC71;
            border-radius: 5px;
        ">
            <label style="
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                color: #555;
            ">Nama Lengkap</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" style="
                width: 100%;
                padding: 10px;
                background: #fff;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-family: inherit;
                font-size: inherit;
            ">
            @error('name')
                <div style="color: #e74c3c; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group" style="
            margin-bottom: 20px;
            padding: 15px;
            background: linear-gradient(to right, #f9f9f9, #fff);
            border-left: 4px solid #D4AF37;
            border-radius: 5px;
        ">
            <label style="
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                color: #555;
            ">Username</label>
            <input type="text" name="username" value="{{ old('username', $user->username) }}" style="
                width: 100%;
                padding: 10px;
                background: #fff;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-family: inherit;
                font-size: inherit;
            ">
            @error('username')
                <div style="color: #e74c3c; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group" style="
            margin-bottom: 20px;
            padding: 15px;
            background: linear-gradient(to right, #f9f9f9, #fff);
            border-left: 4px solid #D4AF37;
            border-radius: 5px;
        ">
            <label style="
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
                color: #555;
            ">Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" style="
                width: 100%;
                padding: 10px;
                background: #fff;
                border: 1px solid #ddd;
                border-radius: 4px;
                font-family: inherit;
                font-size: inherit;
            ">
            @error('email')
                <div style="color: #e74c3c; font-size: 14px; margin-top: 5px;">{{ $message }}</div>
            @enderror
        </div>

                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <div class="flex justify-end">
                                    <button type="button" onclick="openModal()"
                                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                                    onmouseout="this.style.backgroundColor='#189200'; this.style.color='white';"
                                    style="background-color: #189200; color: white; border: none; margin-right: 10px; padding: 10px 20px; border-radius: 15px; font-size: 16px; cursor: pointer; display: flex; align-items: center; transition: background-color 0.3s, color 0.3s; text-decoration: none;">

                                    <!-- Ikon SVG Pensil -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                         fill="currentColor" viewBox="0 0 16 16" style="margin-right: 8px;">
                                      <path d="M15.502 1.94a1.5 1.5 0 0 1 0 2.12L5.207 14.354a1 1 0 0 1-.39.243l-4 1.5a.5.5 0 0 1-.641-.641l1.5-4a1 1 0 0 1 .243-.39L13.44.44a1.5 1.5 0 0 1 2.12 0zm-2.121 1.415L4.854 11.882l-.708 2.122 2.121-.707L15.5 3.354l-2.12-2.121z"/>
                                    </svg>

                                    <span style="font-family: 'Poppins', sans-serif;">Update</span>
                                </button>
                                </div>
                                <!-- Modal Konfirmasi -->
                                <div id="confirmModal" style="display: none; position: fixed; inset: 0; background-color: rgba(0, 0, 0, 0.5); z-index: 1000; justify-content: center; align-items: center;">
                                    <div style="background: white; padding: 24px 30px; border-radius: 12px; max-width: 400px; width: 90%; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.2);">
                                      <p style="font-size: 16px; font-weight: 600; margin-bottom: 20px;">
                                        Apakah Anda yakin ingin memperbarui profile anda?
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

    </form>
</div>

<script>
    function previewImage(input) {
        const preview = document.getElementById('avatar-preview');
        const file = input.files[0];
        const reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = "";
        }
    }
</script>

                    </div>
                 </div>

                 {{-- @include('backend.00_administrator.00_baganterpisah.07_paginations') --}}

                 <br><br>


                 <!-- Modal Konfirmasi Hapus -->
                 <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                         <div class="modal-content">
                             <div class="modal-header">
                                 <img src="/assets/icon/pupr.png" alt="" width="30" style="margin-right: 10px;">
                                 <h5 class="modal-title" id="deleteModalLabel">DPUPR Kabupaten Blora</h5>
                                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                 <p>Apakah Anda Ingin Menghapus Data : <span id="itemName"></span>?</p>
                             </div>
                             <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                 <form id="deleteForm" method="POST" action="">
                                     @csrf
                                     @method('DELETE')
                                     <button type="submit" class="btn btn-danger">Hapus</button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>

                 <script>
                 function setDeleteUrl(button) {
                     var namasekolah = button.getAttribute('data-judul');
                     document.getElementById('itemName').innerText = namasekolah;
                     var deleteUrl = "/namasekolah/delete/" + encodeURIComponent(namasekolah);
                     document.getElementById('deleteForm').action = deleteUrl;
                 }
                 </script>

                 <style>
                     .table-responsive {
                         max-width: 100%;
                         overflow-x: auto;
                     }
                 </style>

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

   <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.1/xlsx.full.min.js"></script>
   <script>
    function exportTableToExcel(tableID, filename = '') {
        var table = document.getElementById(tableID);
        var wb = XLSX.utils.table_to_book(table, {sheet:"Sheet 1"});
        return XLSX.writeFile(wb, filename + '.xlsx');
    }
    </script>
