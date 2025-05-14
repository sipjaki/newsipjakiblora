<style>
    /* Gaya untuk tabel */
    .custom-table-container {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        background: #fff;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        border-radius: 20px;
    }

    .custom-fl-table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed; /* Membuat kolom lebih konsisten */
        /* min-width: 700px; */
    }

    .custom-fl-table th,
    .custom-fl-table td {
        padding: 12px 15px;
        border-bottom: 1px solid #998282;
        text-align: left;
        vertical-align: middle;
        height: 48px; /* Tinggi baris tetap */
        box-sizing: border-box;
    }

    .custom-fl-table th {
        background-color:#4ADE80;
        font-weight: 600;
        color: #2d3436;
        font-size: 14px;
        border-bottom: 2px solid #e0e0e0;
    }

    .custom-fl-table td {
        font-size: 14px;
        color: #000000;
        line-height: 1.5;
    }

    /* Zebra striping untuk baris */
    .custom-fl-table tbody tr:nth-child(even) {
        background-color: #f7f7f7;
    }

    /* Hover effect */
    .custom-fl-table tbody tr:hover {
        background-color: #f7f7f7;
    }

    /* Scrollbar styling */
    .custom-table-container::-webkit-scrollbar {
        height: 6px;
    }

    .custom-table-container::-webkit-scrollbar-thumb {
        background-color: #c0c0c0;
        border-radius: 4px;
    }

    .custom-table-container::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
</style>


@include('frontend.00_android.00_fiturmenu.header')

<body class="font-poppins text-[#292E4B] bg-[#F6F9FC]">
    <section class="max-w-[640px] w-full min-h-screen mx-auto flex flex-col bg-[#FCF7F1] overflow-x-hidden pb-4">
        {{-- <div class="header flex flex-col" style="background: linear-gradient(to bottom, #28A745, #FFD100); border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden;"> --}}
            <div class="header flex flex-col" style="background-image: url('/assets/00_android/iconmenu/menuutama1.jpg'); background-size: cover; background-position: center; border-bottom-left-radius: 50px; border-bottom-right-radius: 50px; overflow: hidden; height: 350px;">
                <nav class="pt-5 px-3 flex justify-between items-center">
                    <!-- Logo bagian kiri -->
                    <div class="flex items-center gap-[10px]">
                        <a href="index.html" class="w-10 h-10 flex shrink-0">
                            <img src="/assets/icon/logokabupatenblora.png" alt="icon" loading="lazy" class="w-full h-full object-contain">
                        </a>
                    </div>

                    <!-- Judul bagian tengah -->
                    <div class="flex flex-col items-center justify-center text-center">
                        <p class="font-semibold text-xl text-white">Dinas Pekerjaan Umum Dan Penataan Ruang <br> Kabupaten Blora</p>
                        <br>
                        {{-- <p class="font-semibold text-xl text-white">{{$title}}</p> --}}
                      <div class="z-10" style="margin-top:25px; background-color: rgba(255, 255, 255, 0.7); border-radius: 10px; padding: 20px; max-width: 600px; margin-left: auto; margin-right: auto;">
            <h1 class="font-bold leading-[36px] text-center" style="color: black; font-size:20px;">
                {{$title}}
            </h1>
        </div>
                    </div>

                    <!-- Ikon bagian kanan -->
                    <a href="" class="w-10 h-10 flex shrink-0">
                        <img src="/assets/icon/pupr.png" alt="icon" loading="lazy" class="w-full h-full object-contain">

                    </a>
                </nav>
            </div>

                    <div class="flex flex-col gap-4 px-4" style="margin-top:-100px;">

                            <div class="w-full border border-[#E8E9EE] flex items-center p-[14px] gap-3 rounded-2xl bg-white">

                                <div class="flex justify-center px-4 mt-[-150px]">
                                    <!DOCTYPE html>
    <style>

.certificate-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Card Styles */
        .certificate-card {
            width: 100%;
            max-width: 550px;
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            border: 2px solid #28a745;
            transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        }

        .certificate-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
        }

        /* Header */
        .card-header {
            background-color: #28a745;
            color: white;
            padding: 22px;
            text-align: center;
        }

        .card-header h1 {
            font-size: 1.5rem;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        /* Body Content */
        .card-body {
            padding: 28px;
        }

        .instruction-text {
            color: #6c757d;
            text-align: center;
            font-size: 0.95rem;
            margin-bottom: 22px;
        }

        /* Example Box */
        .example-box {
            background-color: #e8f5e9;
            border-left: 4px solid #4caf50;
            padding: 14px 16px;
            margin-bottom: 26px;
            border-radius: 4px;
            display: flex;
            align-items: center;
        }

        .example-box svg {
            margin-right: 12px;
            color: #2e7d32;
            min-width: 18px;
            flex-shrink: 0;
        }

        .example-text {
            color: #2e7d32;
            font-size: 0.88rem;
        }

        /* Input Group */
        .input-group {
            display: flex;
            width: 100%;
            height: 52px;
        }

        .nik-input {
            flex: 1;
            padding: 0 16px;
            border: 1px solid #ced4da;
            border-radius: 8px 0 0 8px;
            font-size: 1rem;
            outline: none;
            transition: all 0.3s ease;
        }

        .nik-input:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.2);
        }

        /* Button */
        .check-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 0 28px;
            border-radius: 0 8px 8px 0;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .check-button:hover {
            background-color: #218838;
        }

        /* Responsive Adjustments */
        @media (max-width: 480px) {
            .card-header {
                padding: 18px;
            }

            .card-header h1 {
                font-size: 1.3rem;
            }

            .card-body {
                padding: 22px;
            }

            .input-group {
                height: 48px;
            }
        }
    </style>

<div class="certificate-card">
        <div class="card-header">
            <h4>Masukkan NIK & Download Sertifikat</h4>
        </div>
        <div class="card-body">
            <p class="instruction-text">Gunakan Nomor Induk Kependudukan untuk mengecek sertifikat Anda</p>

            <div class="example-box">
                <span class="example-text">Contoh: 3201XXXXXXXXXXXX</span>
            </div>

            <div class="input-group">
                <input type="text" class="nik-input" placeholder="Masukkan NIK Anda">
                <button class="check-button">Cek</button>
            </div>
        </div>

        <div class="w-full px-4 mt-6">
  <div class="w-full bg-white shadow-md rounded-xl overflow-hidden">
    <table class="custom-table w-full table-fixed border-collapse text-sm text-gray-700" id="sortableTable">
      <thead class="bg-gray-100">
        <tr>
          <th onclick="sortTable(0)" class="w-1/12 text-center py-3 px-2 cursor-pointer">
            <i class="bi bi-sort-alpha-down"></i> No
          </th>
          <!-- Jika ingin aktifkan pelatihan, cukup uncomment -->
          <!-- <th onclick="sortTable(1)" class="w-4/12 text-center py-3 px-2 cursor-pointer">
            <i class="bi bi-building"></i> Pelatihan
          </th> -->
          <th onclick="sortTable(3)" class="w-11/12 text-center py-3 px-2 cursor-pointer">
            <i class="bi bi-geo-alt"></i> Download Sertifikat
          </th>
        </tr>
      </thead>
      <tbody id="tableBody">
        <tr class="hover:bg-gray-50 border-t">
          <td class="text-center py-2">1</td>
          <!-- <td class="text-left py-2 capitalize">Percobaan</td> -->
          <td class="text-center py-2">
            <a href="#" class="text-blue-600 hover:underline">Download</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

    </div>




                            <div class="flex flex-col gap-1">



                            </div>
                            </div>
                            </a>



                            </div>
                            </div>
                            </a>


                        </div>

                        @include('frontend.00_android.00_fiturmenu.keterangan')

<br><br><br><br>

        @include('frontend.00_android.00_fiturmenu.android')
    </section>


    @include('frontend.00_android.00_fiturmenu.footer')
