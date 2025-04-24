<style>
    /* Container utama */
    .character-container {
      position: fixed;
      top: 20%;
      width: 100vw;
      height: 300px;
      overflow: visible;
      pointer-events: none;
    }

    /* Karakter utama */
    .construction-worker {
      position: absolute;
      right: -200px;
      width: 180px;
      height: 300px;
      animation: walk 15s linear infinite;
      transform-style: preserve-3d;
    }

    /* Animasi jalan */
    @keyframes walk {
      0% {
        transform: translateX(100vw) scale(0.8);
      }
      100% {
        transform: translateX(-100vw) scale(0.8);
      }
    }

    /* Badan */
    .body {
      position: absolute;
      width: 60px;
      height: 100px;
      background: #3a5f8d;
      border-radius: 15px;
      bottom: 50px;
      left: 60px;
      transform: perspective(100px) rotateZ(0.5deg);
    }

    /* Kepala */
    .head {
      position: absolute;
      width: 50px;
      height: 50px;
      background: #ffe0c2;
      border-radius: 40% 40% 50% 50%;
      bottom: 130px;
      left: 65px;
      animation: head-tilt 3s ease-in-out infinite;
    }

    /* Helm proyek */
    .helmet {
      position: absolute;
      width: 60px;
      height: 60px;
      background: #ffd700;
      border-radius: 50%;
      bottom: 125px;
      left: 60px;
      clip-path: polygon(0 35%, 100% 35%, 100% 100%, 0 100%);
      transform: rotateZ(-2deg);
    }

    /* Tangan */
    .arm {
      position: absolute;
      width: 15px;
      height: 60px;
      background: #3a5f8d;
      border-radius: 8px;
      animation: arm-swing 0.8s ease-in-out infinite;
    }

    /* Kaki */
    .leg {
      position: absolute;
      width: 20px;
      height: 80px;
      background: #2a4a6d;
      border-radius: 8px;
      animation: leg-walk 0.8s ease-in-out infinite;
    }

    /* Kertas */
    .papers {
      position: absolute;
      width: 50px;
      height: 70px;
      background: #ffffff;
      border-radius: 5px;
      bottom: 140px;
      left: 130px;
      transform: rotateZ(10deg);
      box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
      animation: paper-move 0.8s ease-in-out infinite;
    }

    /* Animasi detail */
    @keyframes arm-swing {
      0%, 100% { transform: rotate(-15deg); }
      50% { transform: rotate(25deg); }
    }

    @keyframes leg-walk {
      0%, 100% { transform: rotate(-5deg); }
      50% { transform: rotate(15deg); }
    }

    @keyframes head-tilt {
      0%, 100% { transform: rotate(-2deg); }
      50% { transform: rotate(2deg); }
    }

    @keyframes paper-move {
      0%, 100% { transform: translateY(0) rotateZ(10deg); }
      50% { transform: translateY(-5px) rotateZ(15deg); }
    }

    /* Detail tambahan */
    .helmet-strap {
      position: absolute;
      width: 70px;
      height: 8px;
      background: #ffd700;
      top: 30px;
      left: -5px;
      border-radius: 3px;
    }

    .face {
      position: absolute;
      width: 30px;
      height: 15px;
      left: 10px;
      top: 15px;
    }

    .eye {
      position: absolute;
      width: 6px;
      height: 6px;
      background: #333;
      border-radius: 50%;
      animation: blink 4s infinite;
    }

    .mouth {
      position: absolute;
      width: 20px;
      height: 3px;
      background: #333;
      top: 8px;
      left: 5px;
      border-radius: 2px;
    }

    @keyframes blink {
      0%, 95%, 100% { height: 6px; }
      97% { height: 1px; }
    }
    </style>

    <div class="character-container">
      <div class="construction-worker">
        <div class="body"></div>
        <div class="head">
          <div class="face">
            <div class="eye" style="left: 0;"></div>
            <div class="eye" style="left: 20px;"></div>
            <div class="mouth"></div>
          </div>
        </div>
        <div class="helmet">
          <div class="helmet-strap"></div>
        </div>
        <div class="arm" style="left: 40px; top: 60px;"></div>
        <div class="arm" style="left: 100px; top: 60px; animation-delay: -0.4s;"></div>
        <div class="leg" style="left: 50px; bottom: 0;"></div>
        <div class="leg" style="left: 90px; bottom: 0; animation-delay: -0.4s;"></div>
        <div class="papers"></div>
      </div>
    </div>
