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
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Sertifikat dengan NIK</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .certificate-card {
            width: 100%;
            max-width: 480px;
            background-color: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            border: 2px solid #28a745;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .certificate-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }

        .card-header {
            background-color: #28a745;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .card-header h1 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .card-body {
            padding: 25px;
        }

        .instruction-text {
            color: #6c757d;
            text-align: center;
            font-size: 0.9rem;
            margin-bottom: 20px;
            line-height: 1.5;
        }

        .example-box {
            background-color: #e8f5e9;
            border-left: 4px solid #4caf50;
            padding: 12px 15px;
            margin-bottom: 25px;
            border-radius: 4px;
            display: flex;
            align-items: center;
        }

        .example-box svg {
            margin-right: 10px;
            color: #2e7d32;
            min-width: 18px;
        }

        .example-text {
            color: #2e7d32;
            font-size: 0.85rem;
        }

        .input-group {
            display: flex;
            width: 100%;
        }

        .nik-input {
            flex: 1;
            padding: 14px 16px;
            border: 1px solid #ced4da;
            border-radius: 8px 0 0 8px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .nik-input:focus {
            border-color: #28a745;
            box-shadow: 0 0 0 3px rgba(40, 167, 69, 0.25);
        }

        .check-button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 0 24px;
            border-radius: 0 8px 8px 0;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .check-button:hover {
            background-color: #218838;
        }
    </style>

<div class="certificate-card">
        <div class="card-header">
            <h1>Masukkan NIK dan Cek Sertifikat</h1>
        </div>
        <div class="card-body">
            <p class="instruction-text">Gunakan Nomor Induk Kependudukan untuk mengecek sertifikat Anda</p>

            <div class="example-box">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd" />
                </svg>
                <span class="example-text">Contoh: 3201XXXXXXXXXXXX</span>
            </div>

            <div class="input-group">
                <input type="text" class="nik-input" placeholder="Masukkan NIK Anda">
                <button class="check-button">Cek</button>
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
