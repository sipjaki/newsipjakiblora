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


        {{-- @include('backend.00_administrator.00_baganterpisah.06_alert') --}}


        <div class="card card-primary card-outline mb-6">
            <div style="display: flex; justify-content: flex-end; margin-top:10px;">
                <a href="/bedokumentasijakon">
                    <button class="button-newvalidasi">
                    <!-- Ikon Kembali -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    viewBox="0 0 16 16" style="margin-right: 8px;">
                 <path fill-rule="evenodd" d="M15 8a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 0 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 7.5H14.5A.5.5 0 0 1 15 8z"/>
               </svg>
                    Kembali
                </button>
            </a>
        </div>
        <hr>


        {{-- ======================================================= --}}
                    <div class="col-md-12">
                        <!--begin::Quick Example-->
                        <form action="{{ route('update.bedokumentasijakon', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('POST') <!-- Ganti dengan PUT untuk update -->

                            <!-- begin::Body -->
                            <div class="card-body">

                                <div class="row">
    <!-- Judul -->
    <div class="col-12 mb-3">
        <label class="form-label" for="judul">
            <i class="bi bi-card-text" style="margin-right: 8px; color: navy;"></i> Judul Dokumentasi
        </label>
        <input type="text" id="judul" name="judul" class="form-control @error('judul') is-invalid @enderror" value="{{ old('judul', $data->judul) }}">
        @error('judul')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <!-- Foto Kegiatan 1 -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="fotokegiatan1">
            <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan 1
        </label>
        <input type="file" id="fotokegiatan1" name="fotokegiatan1"
               class="form-control @error('fotokegiatan1') is-invalid @enderror"
               accept="image/*"
               onchange="previewImage(event, 'previewBaru1')">
        @error('fotokegiatan1')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="mt-2">
            <p>Gambar sebelumnya:</p>
            @if($data->fotokegiatan1 && file_exists(public_path($data->fotokegiatan1)))
                <img src="{{ asset($data->fotokegiatan1) }}" alt="Foto Lama 1" style="width:100%; max-height:200px; object-fit:contain;">
            @else
                <p>Data belum diupdate</p>
            @endif
        </div>
        <div class="mt-2">
            <p>Preview baru:</p>
            <img id="previewBaru1" style="width:100%; max-height:200px; object-fit:contain; display:none;">
        </div>
    </div>

    <!-- Foto Kegiatan 2 -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="fotokegiatan2">
            <i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan 2
        </label>
        <input type="file" id="fotokegiatan2" name="fotokegiatan2"
               class="form-control @error('fotokegiatan2') is-invalid @enderror"
               accept="image/*"
               onchange="previewImage(event, 'previewBaru2')">
        @error('fotokegiatan2')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        <div class="mt-2">
            <p>Gambar sebelumnya:</p>
            @if($data->fotokegiatan2 && file_exists(public_path($data->fotokegiatan2)))
                <img src="{{ asset($data->fotokegiatan2) }}" alt="Foto Lama 2" style="width:100%; max-height:200px; object-fit:contain;">
            @else
                <p>Data belum diupdate</p>
            @endif
        </div>
        <div class="mt-2">
            <p>Preview baru:</p>
            <img id="previewBaru2" style="width:100%; max-height:200px; object-fit:contain; display:none;">
        </div>
    </div>

    <!-- Foto Kegiatan 3 -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="fotokegiatan3"><i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan 3</label>
        <input type="file" id="fotokegiatan3" name="fotokegiatan3" class="form-control @error('fotokegiatan3') is-invalid @enderror" accept="image/*" onchange="previewImage(event, 'previewBaru3')">
        @error('fotokegiatan3') <div class="invalid-feedback">{{ $message }}</div> @enderror
        <div class="mt-2">
            <p>Gambar sebelumnya:</p>
            @if($data->fotokegiatan3 && file_exists(public_path($data->fotokegiatan3)))
                <img src="{{ asset($data->fotokegiatan3) }}" style="width:100%; max-height:200px; object-fit:contain;">
            @else <p>Data belum diupdate</p> @endif
        </div>
        <div class="mt-2"><p>Preview baru:</p><img id="previewBaru3" style="width:100%; max-height:200px; object-fit:contain; display:none;"></div>
    </div>

    <!-- Foto Kegiatan 4 -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="fotokegiatan4"><i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan 4</label>
        <input type="file" id="fotokegiatan4" name="fotokegiatan4" class="form-control @error('fotokegiatan4') is-invalid @enderror" accept="image/*" onchange="previewImage(event, 'previewBaru4')">
        @error('fotokegiatan4') <div class="invalid-feedback">{{ $message }}</div> @enderror
        <div class="mt-2">
            <p>Gambar sebelumnya:</p>
            @if($data->fotokegiatan4 && file_exists(public_path($data->fotokegiatan4)))
                <img src="{{ asset($data->fotokegiatan4) }}" style="width:100%; max-height:200px; object-fit:contain;">
            @else <p>Data belum diupdate</p> @endif
        </div>
        <div class="mt-2"><p>Preview baru:</p><img id="previewBaru4" style="width:100%; max-height:200px; object-fit:contain; display:none;"></div>
    </div>

    <!-- Foto Kegiatan 5 -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="fotokegiatan5"><i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan 5</label>
        <input type="file" id="fotokegiatan5" name="fotokegiatan5" class="form-control @error('fotokegiatan5') is-invalid @enderror" accept="image/*" onchange="previewImage(event, 'previewBaru5')">
        @error('fotokegiatan5') <div class="invalid-feedback">{{ $message }}</div> @enderror
        <div class="mt-2">@if($data->fotokegiatan5 && file_exists(public_path($data->fotokegiatan5))) <img src="{{ asset($data->fotokegiatan5) }}" style="width:100%; max-height:200px; object-fit:contain;"> @else <p>Data belum diupdate</p> @endif</div>
        <div class="mt-2"><p>Preview baru:</p><img id="previewBaru5" style="width:100%; max-height:200px; object-fit:contain; display:none;"></div>
    </div>

    <!-- Foto Kegiatan 6 -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="fotokegiatan6"><i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan 6</label>
        <input type="file" id="fotokegiatan6" name="fotokegiatan6" class="form-control @error('fotokegiatan6') is-invalid @enderror" accept="image/*" onchange="previewImage(event, 'previewBaru6')">
        @error('fotokegiatan6') <div class="invalid-feedback">{{ $message }}</div> @enderror
        <div class="mt-2">@if($data->fotokegiatan6 && file_exists(public_path($data->fotokegiatan6))) <img src="{{ asset($data->fotokegiatan6) }}" style="width:100%; max-height:200px; object-fit:contain;"> @else <p>Data belum diupdate</p> @endif</div>
        <div class="mt-2"><p>Preview baru:</p><img id="previewBaru6" style="width:100%; max-height:200px; object-fit:contain; display:none;"></div>
    </div>

    <!-- Foto Kegiatan 7 -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="fotokegiatan7"><i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan 7</label>
        <input type="file" id="fotokegiatan7" name="fotokegiatan7" class="form-control @error('fotokegiatan7') is-invalid @enderror" accept="image/*" onchange="previewImage(event, 'previewBaru7')">
        @error('fotokegiatan7') <div class="invalid-feedback">{{ $message }}</div> @enderror
        <div class="mt-2">@if($data->fotokegiatan7 && file_exists(public_path($data->fotokegiatan7))) <img src="{{ asset($data->fotokegiatan7) }}" style="width:100%; max-height:200px; object-fit:contain;"> @else <p>Data belum diupdate</p> @endif</div>
        <div class="mt-2"><p>Preview baru:</p><img id="previewBaru7" style="width:100%; max-height:200px; object-fit:contain; display:none;"></div>
    </div>

    <!-- Foto Kegiatan 8 -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="fotokegiatan8"><i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan 8</label>
        <input type="file" id="fotokegiatan8" name="fotokegiatan8" class="form-control @error('fotokegiatan8') is-invalid @enderror" accept="image/*" onchange="previewImage(event, 'previewBaru8')">
        @error('fotokegiatan8') <div class="invalid-feedback">{{ $message }}</div> @enderror
        <div class="mt-2">@if($data->fotokegiatan8 && file_exists(public_path($data->fotokegiatan8))) <img src="{{ asset($data->fotokegiatan8) }}" style="width:100%; max-height:200px; object-fit:contain;"> @else <p>Data belum diupdate</p> @endif</div>
        <div class="mt-2"><p>Preview baru:</p><img id="previewBaru8" style="width:100%; max-height:200px; object-fit:contain; display:none;"></div>
    </div>

    <!-- Foto Kegiatan 9 -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="fotokegiatan9"><i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan 9</label>
        <input type="file" id="fotokegiatan9" name="fotokegiatan9" class="form-control @error('fotokegiatan9') is-invalid @enderror" accept="image/*" onchange="previewImage(event, 'previewBaru9')">
        @error('fotokegiatan9') <div class="invalid-feedback">{{ $message }}</div> @enderror
        <div class="mt-2">@if($data->fotokegiatan9 && file_exists(public_path($data->fotokegiatan9))) <img src="{{ asset($data->fotokegiatan9) }}" style="width:100%; max-height:200px; object-fit:contain;"> @else <p>Data belum diupdate</p> @endif</div>
        <div class="mt-2"><p>Preview baru:</p><img id="previewBaru9" style="width:100%; max-height:200px; object-fit:contain; display:none;"></div>
    </div>

    <!-- Foto Kegiatan 10 -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="fotokegiatan10"><i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan 10</label>
        <input type="file" id="fotokegiatan10" name="fotokegiatan10" class="form-control @error('fotokegiatan10') is-invalid @enderror" accept="image/*" onchange="previewImage(event, 'previewBaru10')">
        @error('fotokegiatan10') <div class="invalid-feedback">{{ $message }}</div> @enderror
        <div class="mt-2">@if($data->fotokegiatan10 && file_exists(public_path($data->fotokegiatan10))) <img src="{{ asset($data->fotokegiatan10) }}" style="width:100%; max-height:200px; object-fit:contain;"> @else <p>Data belum diupdate</p> @endif</div>
        <div class="mt-2"><p>Preview baru:</p><img id="previewBaru10" style="width:100%; max-height:200px; object-fit:contain; display:none;"></div>
    </div>

    <!-- Foto Kegiatan 11 -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="fotokegiatan11"><i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan 11</label>
        <input type="file" id="fotokegiatan11" name="fotokegiatan11" class="form-control @error('fotokegiatan11') is-invalid @enderror" accept="image/*" onchange="previewImage(event, 'previewBaru11')">
        @error('fotokegiatan11') <div class="invalid-feedback">{{ $message }}</div> @enderror
        <div class="mt-2">@if($data->fotokegiatan11 && file_exists(public_path($data->fotokegiatan11))) <img src="{{ asset($data->fotokegiatan11) }}" style="width:100%; max-height:200px; object-fit:contain;"> @else <p>Data belum diupdate</p> @endif</div>
        <div class="mt-2"><p>Preview baru:</p><img id="previewBaru11" style="width:100%; max-height:200px; object-fit:contain; display:none;"></div>
    </div>

    <!-- Foto Kegiatan 12 -->
    <div class="col-md-6 mb-3">
        <label class="form-label" for="fotokegiatan12"><i class="bi bi-image" style="margin-right: 8px; color: navy;"></i> Foto Kegiatan 12</label>
        <input type="file" id="fotokegiatan12" name="fotokegiatan12" class="form-control @error('fotokegiatan12') is-invalid @enderror" accept="image/*" onchange="previewImage(event, 'previewBaru12')">
        @error('fotokegiatan12') <div class="invalid-feedback">{{ $message }}</div> @enderror
        <div class="mt-2">@if($data->fotokegiatan12 && file_exists(public_path($data->fotokegiatan12))) <img src="{{ asset($data->fotokegiatan12) }}" style="width:100%; max-height:200px; object-fit:contain;"> @else <p>Data belum diupdate</p> @endif</div>
        <div class="mt-2"><p>Preview baru:</p><img id="previewBaru12" style="width:100%; max-height:200px; object-fit:contain; display:none;"></div>
    </div>
</div>
    <!-- End Right Column -->
                                </div>
                                <!-- End row -->

<script>
function previewImage(event, previewId) {
    const file = event.target.files[0];
    const preview = document.getElementById(previewId);

    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result;
            preview.style.display = "block";
        }
        reader.readAsDataURL(file);
    } else {
        preview.style.display = "none";
    }
}
</script>

                            </div>
                            <!-- end::Body -->

                            <div style="display: flex; justify-content: flex-end; margin-bottom:20px;">
                                <div class="flex justify-end">
                                    <button type="button" onclick="openModal()" class="button-berkas">

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
