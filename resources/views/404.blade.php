<style>
        <style>
      html, body {
        height: 100%;
      }
      body {
        background-color: #fff;
        background: radial-gradient(circle at center, #fff 0%, #f8f8f8 75%, #ebebeb 100%);
        color: #222;
        font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif;
        font-size: 1rem;
        line-height: 1.5;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
      }
      main {
        padding: 1rem;
        text-align: center;
      }
      h1 {
        font-size: 2.5rem;
        line-height: 1.1;
        margin: 0;
      }
      @media screen and (max-width: 480px) {
        h1 {
          font-size: 1.5rem;
        }
      }
      h1::after {
        content: "";
        background-color: #ffe800;
        background: repeating-linear-gradient(45deg, #ffe800, #ffe800 0.5rem, #222 0.5rem, #222 1.0rem);
        display: block;
        height: 0.5rem;
        margin-top: 1rem;
      }
      img {
        max-width: 100%;
        height: auto;
      }
      p {
        margin: 1rem 0 0 0;
      }
    </style>

</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ABG Bangunan Gedung Blora</title>

  <link rel="icon" href="assets/icon/sipjakikbb.png" type="image/x-icon">

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

        <main>
            <h1>Dinas Pekerjaan Umum dan Penataan Ruang <br> Kabupaten Blora Provinsi Jawa Tengah</h1>
            <p>Our Website Is Under Construction <br> Please Wait</p>
          </main>

        {{-- <h6 class="font-Montserrat font-bold uppercase text-4xl md:text-5xl lg:text-3xl mb-14 md:-mr-20 text-white md:text-left">Pemerintah <br> Provinsi Jawa Barat<span class="text-white/70 md:-mr-20"></span></h6> --}}

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

