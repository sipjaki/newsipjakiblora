    <style>
        /* Modal Style */
        .modal-alert-verifikasi {
            display: block;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background: rgba(0,0,0,0.4);
        }
        .modal-alert-verifikasi .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 500px; /* Atur lebar card */
            height: 500px; /* Atur tinggi card */
            position: relative;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center; /* Center content horizontally */
            justify-content: center; /* Center content vertically */
        }
        /* Close Button Style */
        .btnalert-view {
            background: none;
            border: none;
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }
        .btnalert-view:hover,
        .btnalert-view:focus {
            color: black;
            text-decoration: none;
        }
        /* Success Text Style */
        .success-text {
            font-size: 36px;
            color: #4CAF50; /* Green color */
            font-weight: bold;
            margin: 20px 0; /* Add spacing around the success text */
        }
        
        .success-textupdate {
            font-size: 36px;
            color: navy; /* Green color */
            font-weight: bold;
            margin: 20px 0; /* Add spacing around the success text */
        }
        /* Button Style */
        .button-text {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 20px; /* Border radius */
            background: green; /* Green background */
            color: white; /* White text color */
            font-size: 18px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button-text:hover {
            background: white;
            color: black; /* Darker green on hover */
        }
        .button-textupdate {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 20px; /* Border radius */
            background: navy; /* Green background */
            color: white; /* White text color */
            font-size: 18px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button-textupdate:hover {
            background: white;
            color: black; /* Darker green on hover */
        }
        .button-textupdate {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 20px; /* Border radius */
            background: navy; /* Green background */
            color: white; /* White text color */
            font-size: 18px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .button-textupdate:hover {
            background: white;
            color: black; /* Darker green on hover */
        }

        
    </style>

<?php if(session('create')): ?>
    <div class="modal-alert-verifikasi">
        <div class="modal-content">
            <button type="button" class="btnalert-view" onclick="document.querySelector('.modal-alert-verifikasi').style.display='none';">
                &times;
            </button>
            <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 20px;">
            <p style="color: black;">Pemerintah Kabupaten Bandung Barat</p>
            <div class="success-text">Success</div>
            <br>
            <button class="button-text" style="color: white;"><?php echo e(session('create')); ?></button> <!-- Wrapped text in a styled button -->
        </div>
    </div>
<?php endif; ?>

<?php if(session('update')): ?>
    <div class="modal-alert-verifikasi">
        <div class="modal-content">
            <button type="button" class="btnalert-view" onclick="document.querySelector('.modal-alert-verifikasi').style.display='none';">
                &times;
            </button>
            <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 20px;">
            <p style="color: black;">Pemerintah Kabupaten Bandung Barat</p>
            <div class="success-textupdate">Update Success</div>
            <br>
            <button class="button-textupdate" style="color: white;"><?php echo e(session('update')); ?></button> <!-- Wrapped text in a styled button -->
        </div>
    </div>
<?php endif; ?>

<?php if(session('delete')): ?>
    <div class="modal-alert-verifikasi">
        <div class="modal-content">
            <button type="button" class="btnalert-view" onclick="document.querySelector('.modal-alert-verifikasi').style.display='none';">
                &times;
            </button>
            <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 20px;">
            <p style="color: black;">Pemerintah Kabupaten Bandung Barat</p>
            <div style="
            font-size: 36px;
            color: red; /* Green color */
            font-weight: bold;
            margin: 20px 0; /*
            "
            >Delete Success</div>
            <br>
            <button style="color: white;
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 20px; /* Border radius */
            background:red; /* Green background */
            color: white; /* White text color */
            font-size: 18px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
            "><?php echo e(session('delete')); ?></button> <!-- Wrapped text in a styled button -->
        </div>
    </div>
<?php endif; ?>


<?php if(session('pertanyaan')): ?>
    <div class="modal-alert-verifikasi">
        <div class="modal-content">
            <button type="button" class="btnalert-view" onclick="document.querySelector('.modal-alert-verifikasi').style.display='none';">
                &times;
            </button>
            <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 20px;">
            <p style="color: black;">Pemerintah Kabupaten Bandung Barat</p>
            
            <br>
            <button class="button-textupdate" style="color: white;"><?php echo e(session('pertanyaan')); ?></button> <!-- Wrapped text in a styled button -->
        </div>
    </div>
<?php endif; ?>









<?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/tambahan/alert.blade.php ENDPATH**/ ?>