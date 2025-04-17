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
<div class="max-w-[1130px] mx-auto pt-[50px] px-4 font-poppins" sty>
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
                        {{ $title }}
                    </button>
                </div>
            </div>


            <section class="news-details-section" style="margin-top:-120px; margin-bottom:-100px;">
                    <div class="row">
                        <div class="col-lg-8">

                            {{-- @foreach ($data->skip(0)->take(1) as $item) --}}

                            <div class="news-details-box-image">
                                <div class="news-details-box-image-inner">
                                    <img src="{{ asset('storage/' . $data->foto) }}" class="img-fluid" alt="img-193">

                                    <a href="#" class="news-details-box-date">{{ \Carbon\Carbon::parse($data->tanggal)->translatedFormat('l, d F Y') }}</a>
                                </div><!-- news-details-box-image-inner -->
                            </div><!-- news-details-box-image -->

                            <br><br>
                            <div class="news-details-content-box" style="margin-left: 25px;">
                                <h4>{{$data->judulberita}}</h4>
                                <br>
                                <p style="text-align: justify;">{{$data->keterangan}}

                                </p>

                            </div><!-- /.news-details-content-box -->

                            {{-- @endforeach --}}

                        </div><!-- col-lg-8 -->

                        <div class="col-lg-4">
                            <div class="sidebar">
                                <div class="sidebar-form-content">
                                    <div class="sidebar__item sidebar__item--search">
                                        <form action="#" class="sidebar__search">
                                            <label for="search" class="sr-only">Cari Berita</label><!-- sr-only -->
                                            <input type="text" placeholder="Cari Berita">
                                            <button type="submit" aria-label="search submit" class="thm-btn">
                                                <i class="flaticon-search-interface-symbol"></i>
                                            </button><!-- thm-btn -->
                                        </form><!-- sidebar__search -->
                                    </div><!-- sidebar__item -->
                                </div><!-- sidebar-form-content -->
                                <div class="sidebar-widget sidebar-widget-recent-post">
                                    <h4>Daftar Berita</h4>

                                    @foreach ($databerita->skip(1)->take(7) as $item)

                                    <div class="sidebar-recent-post">
                                        <div class="sidebar-recent-post-img">
                                            <img src="{{ asset('storage/' . $item->foto) }}" alt="Gambar Pelatihan SKK Blora" width="200px" loading="lazy">
                                        </div><!-- sidebar-recent-post-img -->
                                        <div class="sidebar-recent-post-content">
                                            <div class="sidebar-meta">
                                                <div class="sidebar-meta-item">
                                                    <div class="sidebar-meta-icon">
                                                        <span class="author">
                                                            Penulis : <a href="news-details.html">Mas Zaki</a>
                                                        </span><!-- author -->
                                                    </div><!-- sidebar-meta-icon -->
                                                </div><!-- sidebar-meta-item -->
                                                <div class="sidebar-post-title">
                                                    <h5><a href="/beritajakon/{{$item->judulberita}}">{{$item->judulberita}}</a></h5>
                                                </div><!-- sidebar-post-title -->
                                            </div><!-- sidebar-meta -->
                                        </div><!-- sidebar-recent-post-content -->
                                    </div><!-- sidebar-recent-post -->


                                    @endforeach


                                </div><!-- sidebar-widget sidebar-widget-recent-post -->

                                {{-- <div class="sidebar-widget sidebar-widget-recent-category">
                                    <div class="sidebar-widget-recent-category-box">
                                        <h4 class="section-title text-left">Categories</h4>
                                        <ul class="list-unstyled">
                                            <li><a href="news-details.html">City News<i class="fa-solid fa-chevron-right"></i></a></li>
                                            <li><a href="news-details.html">Community<i class="fa-solid fa-chevron-right"></i></a></li>
                                            <li><a href="news-details.html">Culture <i class="fa-solid fa-chevron-right"></i></a></li>
                                            <li><a href="news-details.html">Devlopement<i class="fa-solid fa-chevron-right"></i></a></li>
                                            <li><a href="news-details.html">Government<i class="fa-solid fa-chevron-right"></i></a></li>
                                        </ul><!-- list-unstyled -->
                                    </div><!-- sidebar-widget-recent-category-box -->
                                </div><!-- sidebar-widget-one sidebar-widget-recent-category --> --}}
                                {{-- <div class="sidebar-widget sidebar-widget-tag">
                                    <h4>Tags</h4>
                                    <div class="sidebar-widget-tag-inner">
                                        <a href="news-details.html">Culture</a>
                                        <a href="news-details.html">Government</a>
                                        <a href="news-details.html">City</a>
                                        <a href="news-details.html">Development</a>
                                        <a href="news-details.html">Life</a>
                                    </div><!-- sidebar-widget-tag-inner -->
                                </div><!-- sidebar-widget sidebar-widget-tag --> --}}
                            </div><!-- sidebar -->
                        </div><!-- col-lg-4 -->
                    </div><!-- row -->
            </section><!--causes-one-section-->


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



@include('frontend.00_approve.01_cssterpisah.footer1')
@include('frontend.00_approve.01_cssterpisah.footer')
