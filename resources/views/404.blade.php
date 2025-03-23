<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mas Jaki DPUPR Kab Blora </title>

  <link rel="icon" href="assets/icon/logokabupatenblora.png" type="image/x-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Comforter+Brush&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <script src="https://cdn.tailwindcss.com?plugins=typography"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'Montserrat': ['Montserrat'],
            'Noto-Sans': ['"Noto Sans"'],
            'Comforter-Brush': ['"Comforter Brush"']
          }
        }
      }
    }
  </script>

</head>

<body class="font-Noto-Sans">


  <!-- Header -->
  <header class="w-full bg-[url('assets/img/under.jpg')] bg-cover bg-bottom">
    <div class="w-full min-h-screen md:w-1/2 bg-gradient-to-b from-gray-900/90 to-gray-900/95 p-10 flex">
      <div class="w-full text-center my-auto">
        <h1 class="font-bold text-5xl font-Comforter-Brush text-amber-500 mb-10 mt-10 md:text-right">Coming Soon</h1>

        <h6 class="font-Montserrat font-bold uppercase text-4xl md:text-5xl lg:text-3xl mb-14 md:-mr-20 text-white md:text-left">Dinas Pekerjaan Umum dan Penataan Ruang <br> Kabupaten Blora Provinsi Jawa Tengah<span class="text-white/70 md:-mr-20"></span></h6>

        <div>
            <style>
                .button-container {
                    display: inline-block;
                }

                .back-button {
                    background: linear-gradient(to right, black, yellow);
                    border: none;
                    color: white;
                    padding: 10px 20px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 16px;
                    margin: 4px 2px;
                    cursor: pointer;
                    border-radius: 8px;
                    transition: background 0.3s;
                }

                .back-button:hover {
                    background: linear-gradient(to right, white, black);
                    color: black;
                }
            </style>

    <div class="button-container">
        <button class="back-button" onclick="goBack()"><i class="fas fa-warning me-2"></i> KEMBALI</button>
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
        </div>
  </header>

</body>
</html>
