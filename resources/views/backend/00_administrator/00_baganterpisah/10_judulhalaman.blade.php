<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<div class="card mb-4">
    <div class="card-header">
      <div class="halaman-title">
        📌 Halaman : {{ $title }}
      </div>
    </div>
  </div>

  <style>
    @keyframes gradientShift {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
        }

        .halaman-title {
        margin-bottom: 10px;
        font-weight: 900;
        font-size: 16px;
        text-align: center;
        color: white;
        padding: 10px 25px;
        border-radius: 10px;
        display: inline-block;
        width: 100%;
        box-shadow: 3px 3px 10px rgba(0, 0, 0, 0.2);
        background: linear-gradient(135deg, #06af0c, #b4c6d6, #06af0c);
        background-size: 300% 300%;
        animation: gradientShift 6s ease infinite;
        font-family: 'Poppins', sans-serif;
        }

  </style>
