<?php echo $__env->make('backend.00_dashboard.part.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.00_dashboard.part.menuheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.00_dashboard.part.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <!--Page Wrapper-->

        <!--Main Content-->

            <!--Content right-->
            <div class="col-sm-9 col-xs-12 content  pl-0">

                    
                <div class="row mb-0 ">
                    <div class="font-bold col-sm-8"><h6 class="mb-4 bc-header">.</h6></div>
                    <div class="col-sm-4 text-right pb-3">
                        <div class="pull-right mr-3 btn-order-bulk">
                        
                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="container" style="
    display: flex;
    flex-direction: column;
    background-color: #FFCB0F;
    padding: 10px;
    border: 1px solid black;
    margin-bottom: 10px;
    margin-top: none;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: 120vh;
    margin-left: none;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
<div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div>


    <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700; "><span style="color: #000000;"> Kementrian Pekerjaan Umum Dan Penataan Ruang </span></h1>
    <div class="container">
        <div class="card" style="
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 20px auto;
            align-items: center;
            "
            >


            

            <div class="controls" style="  
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            border-radius:5px;
            ">
<div class="show-entries" style="border-radius: 10px;">
    <label for="entries" style="margin-right: 5px;">
        <style>
          
         
          /* Untuk memastikan tata letak responsif, Anda bisa menggunakan media queries */
@media (min-width: 768px) {
    .badge {
                background: linear-gradient(to right, blue, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 10px;
                text-align: center;
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background-color: white;
                color: black;
                background: white;
            }

    .badgeupdate {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badgeupdate:hover {
                background-color: white;
                color: black;
                background: white;
            }
    .badgenewupdate {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badgenewupdate:hover {
                background: white;
                color: black;
                background: white;
            }

    
    .badgedownload {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 8px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgedownload:hover {
                background-color: white;
                color: black;
                background: white;
            }
    
    .badgekembali {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
            .badgekembali:hover {
                background-color: white;
                color: black;
                background: white;
            }
    
    .savedata {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
                float: right;
            }
            .savedata:hover {
                background-color: white;
                color: black;
                background: white;
            }
    
    .badgehidden {
                background: linear-gradient(to right, white, white);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                cursor: pointer;
                transition: background-color 0.3s, color 0.3s;
            }
    
}

        </style>
<a style="background: white;">
    <div class="badge"><i class="fas fa-plus-circle mr-2"></i> Create Paket Pekerjaan Kabupaten Bandung Barat </div>
</a>
<a style="background: white;">
    <div class="badgehidden" style="color: white;">
        <i class="fas fa-file-alt mr-2"></i> ........ ........ ........ ........ ........ ................  ........  ........ ........ ........ ........ ........
    </div>
</a>
<a href="/paketpekerjaan" style="background: white;">
    <button class="badgekembali" style="border: none; font-size:12px; cursor:pointer;">
        <i class="fa fa-arrow-circle-left mr-2"></i>Kembali
    </button>
</a>

        <br>
                

        <style>

            
@media (min-width: 768px) {

            .container-update {
                /* margin-top: 500px; */
                width: 900px;
                height: 70vh;
                margin: 0 auto;
                padding: 20px;
                background-color: #f0f0f0; /* Warna silver */
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .form-group {
                /* margin-top: 150px; */
                /* margin-bottom: 15px; */
            }
            .form-group label {
                display: block;
                margin-bottom: 8px;
            }
            .form-group input[type="text"],
            .form-group input[type="file"] {
                width: 100%;
                padding: 8px;
                box-sizing: border-box;
            }
            .form-group textarea {
                width: 100%;
                padding: 8px;
                box-sizing: border-box;
                resize: vertical;
            }
            .form-group button {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 10px 20px;
                cursor: pointer;
                border-radius: 5px;
            }
            .form-group button:hover {
                background-color: #45a049;
            }
            .success-message {
                color: green;
                margin-bottom: 20px;
            }

        }
        </style>
    
<br>
        <div class="container-update" style="col-lg-12">
            <!-- Menampilkan pesan sukses jika ada -->
                
            
            
            <form action="<?php echo e(route('create.paketpekerjaan')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?> <!-- Gunakan metode POST untuk menambahkan data -->
            
            
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="instansi" class="mr-3" style="width: 200px; text-align:left; font-size: 14px;">
                        <i class="fas fa-building me-2"></i> Instansi
                    </label>
                    <input type="text" class="form-control" id="instansi" name="instansi" required style="font-size: 14px;">
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="jumlah_pagu" class="mr-3" style="width: 200px; text-align:left; font-size: 14px;">
                        <i class="fas fa-money-bill-wave me-2"></i> Jumlah Pagu
                    </label>
                    <input type="text" class="form-control" id="jumlah_pagu" name="jumlah_pagu" required style="font-size: 14px;">
                </div>
                
                <script>
                    function formatRupiah(angka, prefix) {
                        var number_string = angka.replace(/[^,\d]/g, '').toString(),
                            split = number_string.split(','),
                            sisa = split[0].length % 3,
                            rupiah = split[0].substr(0, sisa),
                            ribuan = split[0].substr(sisa).match(/\d{3}/gi);
                
                        if (ribuan) {
                            separator = sisa ? '.' : '';
                            rupiah += separator + ribuan.join('.');
                        }
                
                        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                        return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                    }
                
                    const input = document.getElementById('jumlah_pagu');
                
                    input.addEventListener('input', function(e) {
                        let value = e.target.value;
                        e.target.value = formatRupiah(value, 'Rp. ');
                    });
                
                    input.addEventListener('blur', function(e) {
                        let value = e.target.value;
                        e.target.value = value.replace(/[^,\d]/g, '');
                    });
                
                    document.querySelector('form').addEventListener('submit', function(e) {
                        let input = document.getElementById('jumlah_pagu');
                        input.value = input.value.replace(/[^,\d]/g, '');
                    });
                </script>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="pekerjaan" class="mr-3" style="width: 200px; text-align:left; font-size: 14px;">
                        <i class="fas fa-hammer me-2"></i> Pekerjaan
                    </label>
                    <input type="text" class="form-control" id="pekerjaan" name="pekerjaan" required style="font-size: 14px;">
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="foto_pekerjaan" class="mr-3" style="width: 200px; text-align:left; font-size: 14px;">
                        <i class="fas fa-image me-2"></i> Foto Pekerjaan (Optional)
                    </label>
                    <input type="file" class="form-control-file" id="foto_pekerjaan" name="foto_pekerjaan" accept=".jpeg,.png,.jpg">
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="metodepengadaan_id" class="mr-3" style="width: 200px; text-align:left; font-size: 14px;">
                        <i class="fas fa-cogs me-2"></i> Metode Pengadaan
                    </label>
                    <select class="form-control" id="metodepengadaan_id" name="metodepengadaan_id" required style="font-size: 14px;">
                        <?php $__currentLoopData = $datametodepengadaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metode): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($metode->id); ?>"><?php echo e($metode->metode); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="tahun" class="mr-3" style="width: 200px; text-align: left; font-size: 14px;">
                        <i class="fas fa-calendar-alt me-2"></i> Tahun
                    </label>
                    <select class="form-control" id="tahun" name="tahun" required style="font-size: 14px;">
                        <?php for($year = 2021; $year <= 2029; $year++): ?>
                            <option value="<?php echo e($year); ?>"><?php echo e($year); ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="progress_fisik" class="mr-3" style="width: 200px; text-align: left; font-size: 14px;">
                        <i class="fas fa-chart-line me-2"></i> Progress Fisik (%)
                    </label>
                    <select class="form-control" id="progress_fisik" name="progress_fisik" required style="font-size: 14px;">
                        <?php for($i = 0; $i <= 100; $i++): ?>
                            <option value="<?php echo e($i); ?>" <?php echo e($i == 0 ? 'selected' : ''); ?>><?php echo e($i); ?></option>
                        <?php endfor; ?>
                    </select>
                </div>
                
            
                <button class="savedata" type="submit" class="btn btn-primary mt-3"><i class="fas fa-save mr-2"></i>Save</button>


            </form>
            



        </div>


        

        
                        <!-- <button id="downloadBtn" class="badge" style="border:none; font-size:12px; cursor:pointer "> <i class="fas fa-download"></i> Download</button> -->
                        
      

</div>

    
</div>
</div>

             

        </div>

        
                
        </div>
        <hr style="border:0; height:5px; background-color:navy; margin: 20px 0px;">
        <?php echo $__env->make('backend.00_dashboard.part.menufooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>
        </div>
        
        <!--Main Content-->
        
    </div>
    <?php echo $__env->make('backend.00_dashboard.part.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    

    <?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/backend/03_datajakon/04_paketpekerjaan/create.blade.php ENDPATH**/ ?>