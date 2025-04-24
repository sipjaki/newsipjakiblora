<style>
    /* Container Animasi */
    .construction-character {
      position: relative;
      width: 200px;
      height: 400px;
      margin: 50px auto;
      transform-style: preserve-3d;
      animation: float 3s ease-in-out infinite;
    }

    /* Animasi mengambang */
    @keyframes float {
      0%, 100% { transform: translateY(0) rotateY(-10deg); }
      50% { transform: translateY(-20px) rotateY(10deg); }
    }

    /* Badan */
    .body {
      position: absolute;
      width: 80px;
      height: 120px;
      background: #4B8BBE;
      border-radius: 15px;
      bottom: 100px;
      left: 60px;
      transform-style: preserve-3d;
    }

    /* Kepala */
    .head {
      position: absolute;
      width: 60px;
      height: 60px;
      background: #FFD7B5;
      border-radius: 50%;
      bottom: 160px;
      left: 70px;
      animation: nod 2s infinite;
    }

    /* Helm Proyek */
    .helmet {
      position: absolute;
      width: 70px;
      height: 70px;
      background: #FFD700;
      border-radius: 50%;
      bottom: 155px;
      left: 65px;
      clip-path: polygon(0 40%, 100% 40%, 100% 100%, 0 100%);
      transform: rotateZ(-5deg);
    }

    /* Tangan */
    .arm {
      position: absolute;
      width: 20px;
      height: 80px;
      background: #4B8BBE;
      border-radius: 10px;
      animation: wave 2s infinite;
    }

    /* Kertas */
    .papers {
      position: absolute;
      width: 60px;
      height: 80px;
      background: white;
      border-radius: 5px;
      bottom: 170px;
      left: 140px;
      transform: rotateZ(15deg);
      box-shadow: 2px 2px 5px rgba(0,0,0,0.2);
      animation: paper-float 1.5s ease-in-out infinite;
    }

    /* Animasi gerakan */
    @keyframes wave {
      0%, 100% { transform: rotate(0deg); }
      50% { transform: rotate(-120deg); }
    }

    @keyframes nod {
      0%, 100% { transform: rotate(0deg); }
      50% { transform: rotate(-5deg); }
    }

    @keyframes paper-float {
      0%, 100% { transform: translateY(0) rotateZ(15deg); }
      50% { transform: translateY(-10px) rotateZ(10deg); }
    }

    /* Detail tambahan */
    .helmet:after {
      content: "";
      position: absolute;
      width: 80px;
      height: 10px;
      background: #FFD700;
      top: 25px;
      left: -5px;
      border-radius: 3px;
    }

    /* Efek 3D */
    .construction-character:hover {
      animation: spin 1s ease;
    }

    @keyframes spin {
      from { transform: rotateY(0deg); }
      to { transform: rotateY(360deg); }
    }
    </style>

    <div class="construction-character">
      <div class="body"></div>
      <div class="head"></div>
      <div class="helmet"></div>
      <div class="arm" style="left: 50px;"></div>
      <div class="arm" style="left: 130px;"></div>
      <div class="papers"></div>
    </div>
