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
          <a href="/datajakon/bujkkontraktor" class="font-medium text-blue-600" style="font-size: 16px; color:blue;">
            {{$title}}
          </a>
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
                        width: 100%;
                    "
                    onmouseover="this.style.backgroundColor='white'; this.style.color='black';"
                    onmouseout="this.style.backgroundColor='#28a745'; this.style.color='white';"
                    >
                        <img src="/assets/icon/pupr.png" alt="icon" style="width: 20px; height: 20px; object-fit: contain;">
                        {{ $title }} : {{$data->namakegiatan}}
                    </button>
                </div>
            </div>


            <div class="table-wrapper">

                <form action="{{ route('daftarpesertapelatihancreatenew') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="agendapelatihan_id" value="{{ $agendapelatihan_id }}">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">

                                <div class="mb-3">
                                    <label class="form-label">
                                        <i class="bi bi-person"></i> Nama Lengkap
                                    </label>
                                    <input type="text" name="namalengkap" class="form-control @error('namalengkap') is-invalid @enderror" value="{{ old('namalengkap') }}">
                                    @error('namalengkap') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        <i class="bi bi-card-list"></i> Jenjang Pendidikan
                                    </label>
                                    <select name="jenjangpendidikan_id" class="form-control @error('jenjangpendidikan_id') is-invalid @enderror">
                                        <option value="" disabled selected>Pilih Jenjang</option>
                                        @foreach($jenjangpendidikan as $jenjang)
                                            <option value="{{ $jenjang->id }}" {{ old('jenjangpendidikan_id') == $jenjang->id ? 'selected' : '' }}>{{ $jenjang->jenjangpendidikan }}</option>
                                        @endforeach
                                    </select>
                                    @error('jenjangpendidikan_id') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        <i class="bi bi-person-badge"></i> NIK
                                    </label>
                                    <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{ old('nik') }}">
                                    @error('nik') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        <i class="bi bi-gender-ambiguous"></i> Jenis Kelamin
                                    </label>
                                    <select name="jeniskelamin" class="form-control @error('jeniskelamin') is-invalid @enderror">
                                        <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                        <option value="Laki-laki" {{ old('jeniskelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ old('jeniskelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                    @error('jeniskelamin') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        <i class="bi bi-calendar"></i> Tanggal Lahir
                                    </label>
                                    <input type="date" name="tanggallahir" class="form-control @error('tanggallahir') is-invalid @enderror" value="{{ old('tanggallahir') }}">
                                    @error('tanggallahir') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        <i class="bi bi-telephone"></i> Nomor Telepon
                                    </label>
                                    <input type="text" name="notelepon" class="form-control @error('notelepon') is-invalid @enderror" value="{{ old('notelepon') }}">
                                    @error('notelepon') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        <i class="bi bi-building"></i> Instansi
                                    </label>
                                    <input type="text" name="instansi" class="form-control @error('instansi') is-invalid @enderror" value="{{ old('instansi') }}">
                                    @error('instansi') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">
                                        <i class="bi bi-upload"></i> Upload Sertifikat (PDF)
                                    </label>
                                    <input type="file" name="sertifikat" class="form-control @error('sertifikat') is-invalid @enderror" accept=".pdf">
                                    @error('sertifikat') <div class="invalid-feedback">{{ $message }}</div> @enderror
                                </div>

                                <button type="submit" class="btn btn-primary">Kirim</button>
                            </div>
                        </div>
                    </div>
                </form>


            </div>


            <div style="position: relative;">
                <button onclick="window.history.back();" class="px-3 py-2 text-white rounded-[15px] border border-slate-700 flex items-center gap-2"
                        style="background-color: #64748b; width: auto; position: absolute; right: 10px; font-family: 'Poppins', sans-serif; transition: all 0.3s ease;">
                    <!-- SVG Icon -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m7 7l-7-7 7-7"/>
                    </svg>
                    Kembali
                </button>
            </div>

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
