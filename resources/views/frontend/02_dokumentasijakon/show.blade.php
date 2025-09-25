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
                <div class="flex flex-col items-center text-center">
                    <p class="text-xs leading-[18px] text-white">{{$title}}</p>
                    {{-- <p class="font-semibold text-sm text-white">#WeNeedHelp</p> --}}
                </div>
                <a href="" class="w-10 h-10 flex shrink-0">
                    {{-- <img src="assets/images/icons/like.svg" alt="icon"> --}}
                    <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                </a>
            </nav>
            <div class="w-full h-full absolute bg-white overflow-hidden">
                <div class="w-full h-[266px] bg-gradient-to-b from-black/90 to-[#080925]/0 absolute z-10"></div>
                <div style="margin-top: 10px;">
                    @if($data->fotokegiatan1 && file_exists(public_path('storage/' . $data->fotokegiatan1)))
                        <!-- Menampilkan gambar dari storage -->
                        <img src="{{ asset('storage/' . $data->fotokegiatan1) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 500px; object-fit: contain;">
                    @elseif($data->fotokegiatan1)
                        <!-- Menampilkan gambar dari path luar storage -->
                        <img src="{{ asset($data->fotokegiatan1) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 500px; object-fit: contain;">
                    @else
                        <!-- Placeholder jika tidak ada data -->
                        <p>Data belum diupdate</p>
                    @endif
                </div>


            </div>
        </div>
        <div class="flex flex-col z-30">
            <div id="content" class="w-full bg-white rounded-t-[40px] flex flex-col gap-5 p-[30px_24px_60px]">
                <div class="flex flex-col gap-[10px]">
                    {{-- <p class="badge bg-[#76AE43] rounded-full p-[6px_12px] font-bold text-xs text-white w-fit leading-[18px]">FINISHED</p> --}}
                    <h1 class="font-extrabold leading-[39px]" style="font-size: 16px;">{{$data->judulberita}}</h1>
                    <div class="flex items-center gap-2">
                        <div class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden">
                            {{-- <img src="assets/images/photos/photo.png" class="w-full h-full object-cover" alt="photo"> --}}
                            {{-- <img src="{{asset('storage/' . $data->user->avatar)}}" class="w-full h-full object-cover" alt="photo"> --}}

                            {{-- <div style="margin-top: 10px;">
                                @if($data->user->avatar && file_exists(public_path('storage/' . $data->user->avatar)))
                                    <!-- Menampilkan gambar dari storage -->
                                    <img src="{{ asset('storage/' . $data->user->avatar) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;">
                                @elseif($data->user->avatar)
                                    <!-- Menampilkan gambar dari path luar storage -->
                                    <img src="{{ asset($data->user->avatar) }}" alt="Gambar Peraturan" style="width: 100%; max-height: 300px; object-fit: contain;">
                                @else
                                    <!-- Placeholder jika tidak ada data -->
                                    <p>Data belum diupdate</p>
                                @endif
                            </div> --}}

                        </div>
                        <div class="flex gap-1 items-center">
<p class="font-semibold text-sm d-flex align-items-center">
    <i class="bi bi-clipboard-check me-2 text-primary"></i>
    Kegiatan : {{$data->judul ?? 'DPUPR Kab Blora'}}
</p>

{{-- <p class="font-semibold text-sm">{{$data->tanggal}}</p> --}}
                        </div>

                    </div>
                </div>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="row g-3">
    @for($i=1; $i<=12; $i++)
        @php $foto = 'fotokegiatan'.$i; @endphp
        @if(!empty($data->$foto))
            @php
                $path = public_path('storage/' . $data->$foto);
                $src = file_exists($path)
                    ? asset('storage/' . $data->$foto)
                    : asset($data->$foto);
            @endphp

            <div class="col-6 col-md-4">
                <img src="{{ $src }}"
                     class="img-fluid rounded shadow-sm foto-kegiatan"
                     data-src="{{ $src }}"
                     style="cursor:pointer;">
            </div>
        @endif
    @endfor
</div>

<!-- Modal -->
<div class="modal fade" id="fotoModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Foto Kegiatan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <img id="modalImage" src="" class="img-fluid rounded border">
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle (WAJIB) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const modalEl  = document.getElementById("fotoModal");
  const modalImg = document.getElementById("modalImage");
  const bsModal  = new bootstrap.Modal(modalEl, {
    backdrop: true,   // backdrop aktif
    keyboard: true    // bisa close pakai ESC
  });

  document.querySelectorAll(".foto-kegiatan").forEach(img => {
    img.addEventListener("click", () => {
      const src = img.getAttribute("data-src");
      modalImg.src = src;
      bsModal.show();
    });
  });

  // pastikan tombol close bener2 hide modal
  modalEl.addEventListener("hidden.bs.modal", () => {
    modalImg.src = ""; // reset biar ga nempel
  });
});
</script>

            </div>
        </div>

        @include('frontend.00_android.00_fiturmenu.keterangan')

        <br><br><br><br><br>

                @include('frontend.00_android.00_fiturmenu.android')

    </section>

    @include('frontend.00_android.00_fiturmenu.footer')
