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
            <div class="badge"><i class="fas fa-plus mr-2"></i>Create Agenda Sertifikasi Pekerja Konstruksi </div></label>
        </a>
        <a style="background: white;">
            <div class="badgehidden" style="color: white"><i class="fas fa-file mr-2"></i> ........ ........ ........ ........ ........ ................  ........  ........ ........ ........ ........ ........</div></label>
        </a>
        <a href="/beritaagenda" style="background: white;">
            <button class="badgekembali" style="border: none; font-size:12px; cursor:pointer; "> <i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</button>
        </a>

        <br>
                

        <style>

            
@media (min-width: 768px) {

            .container-update {
                /* margin-top: 500px; */
                width: 900px;
                height: 75vh;
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
                
            
            <form action="<?php echo e(route('create.beritaagenda')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?> <!-- Gunakan metode POST untuk menambahkan data -->
                
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="nama_agenda" class="mr-3" style="width: 200px; text-align:left; font-size:14px;"><i class="fas fa-calendar-alt me-2"></i> Nama Agenda</label>
                        <input type="text" class="form-control" id="nama_agenda" name="nama_agenda" value="<?php echo e(old('nama_agenda')); ?>" required>
                    </div>
                
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="keterangan" class="mr-3" style="width: 200px; text-align:left; font-size:14px;"><i class="fas fa-info-circle me-2"></i> Keterangan</label>
                        <textarea class="form-control" id="keterangan" name="keterangan" rows="4" style="resize: vertical;" required><?php echo e(old('keterangan')); ?></textarea>
                    </div>
                
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="kuota" class="mr-3" style="width: 200px; text-align:left; font-size:14px;"><i class="fas fa-users me-2"></i> Kuota</label>
                        <input type="number" class="form-control" id="kuota" name="kuota" value="<?php echo e(old('kuota')); ?>" required>
                    </div>
                
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="tanggal_mulai" class="mr-3" style="width: 200px; text-align:left; font-size:14px;"><i class="fas fa-calendar-check me-2"></i> Tanggal Mulai</label>
                        <input type="date" class="form-control" id="tanggal_mulai" name="tanggal_mulai" value="<?php echo e(old('tanggal_mulai')); ?>" required>
                    </div>
                
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="tanggal_selesai" class="mr-3" style="width: 200px; text-align:left; font-size:14px;"><i class="fas fa-calendar-times me-2"></i> Tanggal Selesai</label>
                        <input type="date" class="form-control" id="tanggal_selesai" name="tanggal_selesai" value="<?php echo e(old('tanggal_selesai')); ?>" required>
                    </div>
                
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="statusprogram" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                            <i class="fas fa-calendar-times me-2"></i> Status Program
                        </label>
                        <select class="form-control" id="statusprogram" name="statusprogram" required>
                            <option value="" disabled <?php echo e(old('statusprogram') == '' ? 'selected' : ''); ?>>PILIH STATUS</option>
                            <option value="BERJALAN" <?php echo e(old('statusprogram') == 'BERJALAN' ? 'selected' : ''); ?>>BERJALAN</option>
                            <option value="SEGERA HADIR" <?php echo e(old('statusprogram') == 'SEGERA HADIR' ? 'selected' : ''); ?>>SEGERA HADIR</option>
                            <option value="DIBATALKAN" <?php echo e(old('statusprogram') == 'DIBATALKAN' ? 'selected' : ''); ?>>DIBATALKAN</option>
                            <option value="SELESAI" <?php echo e(old('statusprogram') == 'SELESAI' ? 'selected' : ''); ?>>SELESAI</option>
                        </select>
                    </div>
                
                    <div class="form-group d-flex align-items-center mt-3">
                        <label for="pengawasanlokasi_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;"><i class="fas fa-map-marker-alt me-2"></i> Lokasi Sertifikasi</label>
                        <select class="form-control" id="pengawasanlokasi_id" name="pengawasanlokasi_id" required>
                            <option value="" disabled <?php echo e(old('pengawasanlokasi_id') == '' ? 'selected' : ''); ?>>PILIH LOKASI</option>
                            <?php $__currentLoopData = $datapengawasanlokasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lokasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($lokasi->id); ?>" <?php echo e(old('pengawasanlokasi_id') == $lokasi->id ? 'selected' : ''); ?>>
                                    <?php echo e($lokasi->kota); ?>

                                </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                
                    <div class="form-group">
                        <button style="float: right" class="badgenewupdate btn btn-primary" type="submit"><i class="fas fa-save" style="margin-right:5px;"></i> Create</button>
                    </div>
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
    

    <?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/backend/02_berita/02_agendasertifikasi/create.blade.php ENDPATH**/ ?>