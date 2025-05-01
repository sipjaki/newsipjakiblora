<style>
    /* file: resources/css/custom.css atau langsung di style tag */
.full-width-container {
  max-width: 80% !important;
  width: 80%;
  margin-top: 10px;
}

.table-wrapper {
  overflow-x: auto;
  border-radius: 15px;
}

.zebra-table {
  width: 100%;
  border-collapse: collapse;
  border: 1px solid #e5e7eb; /* Tailwind gray-200 */
}

.zebra-table th,
.zebra-table td {
  padding: 12px 16px;
  border: 1px solid #e5e7eb;
  text-align: left;
}

.zebra-table thead {
  background-color: #f9fafb; /* Tailwind gray-50 */
}

.view-icon {
  color: #374151; /* Tailwind gray-700 */
  cursor: pointer;
}

table.zebra-table {
            border-collapse: collapse;
            width: 100%;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            border-radius: 15px;
            overflow: hidden;
        }

        .zebra-table thead {
            background-color: #28a745;
            color: white;
        }

        .zebra-table th,
        .zebra-table td {
            padding: 6px 12px;
            text-align: left;
        }

        .zebra-table tbody tr:nth-child(odd) {
            background-color: #ffffff;
        }

        .zebra-table tbody tr:nth-child(even) {
            background-color: #dfdddd;
        }

        .zebra-table tbody tr:hover {
            background-color: #ffd100;
        }

        body {
          font-family: 'Poppins', sans-serif;
        }


        .btn-navy {
        background-color: #001f3f;
        color: white;
        border: none;
        padding: 5px 10px;
        border-radius: 5px;
        font-size: 12px;
        font-family: 'Poppins', sans-serif;
        cursor: default;
        transition: all 0.3s ease;
    }

    .btn-navy:hover {
        background-color: white;
        color: black;
        border: 1px solid #001f3f;
    }

</style>
{{-- ================================ --}}

@include('frontend.00_approve.01_cssterpisah.header')

    {{-- @include('frontend.00_approve.01_cssterpisah.loader') --}}
    @include('frontend.00_approve.01_cssterpisah.header1')

<!-- Wrapper Background Section -->
<section style="background-image: url('/assets/00_android/iconmenu/menuutama.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat; width: 100%;">

<!-- Breadcrumb + Search Bar -->
<div class="max-w-[1130px] mx-auto pt-[50px] px-4 font-poppins">
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">

      <!-- KIRI: Gambar + Breadcrumb -->
      <div class="flex items-center gap-4">
        <img src="/assets/icon/info.png" alt="Logo" style="margin-bottom: 4px;" width="15%" />
        <div class="flex gap-[30px] items-center flex-wrap text-sm sm:text-base">
          <span>/</span>
          <a href="#" class="font-medium text-blue-600" style="font-size: 16px; color:blue;">
            {{$title}}
          </a>
          @include('backend.00_administrator.00_baganterpisah.01_header')
          @include('backend.00_administrator.00_baganterpisah.11_alert')
          {{-- <span>/</span>
          <a href="/datajakon/statistikabujkblora" class="font-medium" style="font-size: 16px;">
            Data Statistik
          </a> --}}
        </div>
      </div>


      <!-- KANAN: Search Bar -->
   <!-- Search Bar Wrapper -->
<div class="w-full sm:w-auto">
    <div class="flex items-center gap-2 px-3 py-2 bg-white rounded-xl border border-gray-300 w-full sm:w-[260px] focus-within:ring-2 focus-within:ring-[#6635F1] transition-all duration-300">

      <!-- Input -->
      <input
        type="text"
        id="searchInput"
        placeholder="Cari Data ..."
        oninput="searchTable()"
        class="w-full appearance-none outline-none text-sm font-medium placeholder:font-normal placeholder:text-[#545768] bg-transparent font-[Poppins]"
      />

      <!-- Button with SVG Icon -->
      <button onclick="searchTable()" class="flex items-center justify-center w-6 h-6 shrink-0">
        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#545768" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
      </button>

    </div>
  </div>


    </div>
  </div>

    <!-- Konten Data -->
    <div class="full-width-container mx-auto px-4 pb-10">
        <div class="bg-white flex flex-col gap-5 p-5 rounded-[20px] shadow-md w-full">
            <div style="display: flex; justify-content: center; margin-bottom: -20px;">
                <div style="width: 100%; max-width: 500px;"> <!-- Optional max-width buat tampilan elegan -->
                    <button type="button" style="
                                display: inline-flex;
                                align-items: center;
                                justify-content: center;
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
                                white-space: nowrap;
                            "
                            onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                            onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white';"
                            >
                                <img src="/assets/icon/pupr.png" alt="icon" style="width: 20px; height: 20px; object-fit: contain;">
                                {{ $title }} : {{ $agendapelatihannamakegiatan }}
                            </button>

                </div>
            </div>


            <div class="table-wrapper">

                <form action="{{ route('daftarpesertapelatihancreatenew') }}" method="POST" enctype="multipart/form-data" style="font-family: 'Poppins', sans-serif;">
                    @csrf
                    <input type="hidden" name="agendapelatihan_id" value="{{ $agendapelatihan_id }}">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                @php
                                    $inputStyle = "
                                        width: 100%;
                                        padding: 10px 14px;
                                        border-radius: 8px;
                                        border: 1px solid #ccc;
                                        transition: 0.3s;
                                        font-size: 14px;
                                    ";
                                    $labelStyle = "margin-bottom: 6px; font-weight: 500; display: block;";
                                    $divStyle = "margin-bottom: 20px;";
                                    $iconStyle = "color: navy;";
                                @endphp

                                <div style="{{ $divStyle }}">
                                    <label class="form-label" style="{{ $labelStyle }}">
                                        <i class="bi bi-person" style="{{ $iconStyle }}"></i> Nama Lengkap
                                    </label>
                                    <input type="text" name="namalengkap" style="{{ $inputStyle }}" class="@error('namalengkap') is-invalid @enderror" value="{{ old('namalengkap') }}">
                                    @error('namalengkap') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div style="{{ $divStyle }}">
                                    <label class="form-label" style="{{ $labelStyle }}">
                                        <i class="bi bi-person-badge" style="{{ $iconStyle }}"></i> NIK
                                    </label>
                                    <input type="number" name="nik" style="{{ $inputStyle }}" class="@error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                                    @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div style="{{ $divStyle }}">
                                    <label class="form-label" style="{{ $labelStyle }}">
                                        <i class="bi bi-calendar" style="{{ $iconStyle }}"></i> Tanggal Lahir
                                    </label>
                                    <input type="date" name="tanggallahir" style="{{ $inputStyle }}" class="@error('tanggallahir') is-invalid @enderror" value="{{ old('tanggallahir') }}">
                                    @error('tanggallahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div style="{{ $divStyle }}">
                                    <label class="form-label" style="{{ $labelStyle }}">
                                        <i class="bi bi-telephone" style="{{ $iconStyle }}"></i> Nomor Telepon
                                    </label>
                                    <input type="text" name="notelepon" style="{{ $inputStyle }}" class="@error('notelepon') is-invalid @enderror" value="{{ old('notelepon') }}">
                                    @error('notelepon') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div style="display: none;">
                                    <label class="form-label" style="{{ $labelStyle }}">
                                        <i class="bi bi-upload" style="{{ $iconStyle }}"></i> Upload Sertifikat (PDF)
                                    </label>
                                    <input type="file" name="sertifikat" style="{{ $inputStyle }}" class="@error('sertifikat') is-invalid @enderror" accept=".pdf">
                                    @error('sertifikat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div style="display: flex; gap: 20px; flex-wrap: wrap;">
                                    <div style="{{ $divStyle }}; flex: 1 1 25%;">
                                        <label class="form-label" style="{{ $labelStyle }}">
                                            <i class="bi bi-card-list" style="color: navy;"></i> Jenjang Pendidikan
                                        </label>
                                        <select name="jenjangpendidikan_id" style="{{ $inputStyle }}" class="@error('jenjangpendidikan_id') is-invalid @enderror">
                                            <option value="" disabled selected>Pilih Jenjang</option>
                                            @foreach($jenjangpendidikan as $jenjang)
                                                <option value="{{ $jenjang->id }}" {{ old('jenjangpendidikan_id') == $jenjang->id ? 'selected' : '' }}>
                                                    {{ $jenjang->jenjangpendidikan }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('jenjangpendidikan_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>

                                    <div style="{{ $divStyle }}; flex: 1 1 25%;">
                                        <label class="form-label" style="{{ $labelStyle }}">
                                            <i class="bi bi-gender-ambiguous" style="color: navy;"></i> Jenis Kelamin
                                        </label>
                                        <select name="jeniskelamin" style="{{ $inputStyle }}" class="@error('jeniskelamin') is-invalid @enderror">
                                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki" {{ old('jeniskelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                            <option value="Perempuan" {{ old('jeniskelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                        </select>
                                        @error('jeniskelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                    </div>
                                </div>

                                <div style="{{ $divStyle }}">
                                    <label class="form-label" style="{{ $labelStyle }}">
                                        <i class="bi bi-building" style="color: navy;"></i> Instansi/Universitas/Lembaga/Perseorangan
                                    </label>
                                    <input type="text" name="instansi" style="{{ $inputStyle }}" class="@error('instansi') is-invalid @enderror" value="{{ old('instansi') }}">
                                    @error('instansi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>
                            </div>

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

    <br><br><br>

</section>


<div class="progress-wrap">
          <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
              <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
          </svg>
      </div>
      <!-- back to top end -->

    </div>

    <script>
        function updateEntries() {
          let selectedValue = document.getElementById("entries").value;
          let url = new URL(window.location.href);
          url.searchParams.set("perPage", selectedValue);
          window.location.href = url.toString();
        }

        function searchTable() {
          let input = document.getElementById("searchInput").value;

          fetch(`/daftarpesertapelatihans/{id}?search=${input}`)
            .then(response => response.text())
            .then(html => {
              let parser = new DOMParser();
              let doc = parser.parseFromString(html, "text/html");
              let newTableBody = doc.querySelector("#tableBody").innerHTML;
              document.querySelector("#tableBody").innerHTML = newTableBody;
            })
            .catch(error => console.error("Error fetching search results:", error));
        }
      </script>


@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
