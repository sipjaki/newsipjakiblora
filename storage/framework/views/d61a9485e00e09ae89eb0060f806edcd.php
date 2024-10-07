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
    height: 240vh;
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
            <div class="badge"><i class="fas fa-plus mr-2"></i>Create Dokumentasi Pelatihan Pekerja Konstruksi   </div></label>
        </a>
        <a style="background: white;">
            <div class="badgehidden" style="color: white"><i class="fas fa-file mr-2"></i> ........ ........ ........ ........ ........ ................  ........  ........ ........ ........ ........ ........</div></label>
        </a>
        <a href="/dokumentasipelatihan" style="background: white;">
            <button class="badgekembali" style="border: none; font-size:12px; cursor:pointer; "> <i class="fa fa-arrow-left" style="margin-right: 5px;"></i>Kembali</button>
        </a>

        <br>
                

        <style>

            
@media (min-width: 768px) {

            .container-update {
                /* margin-top: 500px; */
                width: 900px;
                height: 200vh;
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
                
            
            <form action="<?php echo e(route('newcreatestore.dokumentasipelatihan')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('POST'); ?>
            
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="judul_kegiatan" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-calendar-alt me-2"></i> Judul Kegiatan
                    </label>
                    <input type="text" class="form-control" id="judul_kegiatan" name="judul_kegiatan" value="<?php echo e(old('judul_kegiatan')); ?>" required>
                    <?php if($errors->has('judul_kegiatan')): ?>
                        <div class="text-danger"><?php echo e($errors->first('judul_kegiatan')); ?></div>
                    <?php endif; ?>
                </div>
            
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="pengawasanlokasi_id" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-map-marker-alt me-2"></i> Lokasi Pengawasan
                    </label>
                    <select class="form-control" id="pengawasanlokasi_id" name="pengawasanlokasi_id" required>
                        <option value="" disabled selected>PILIH LOKASI</option>
                        <?php $__currentLoopData = $datapengawasanlokasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lokasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($lokasi->id); ?>" <?php echo e(old('pengawasanlokasi_id') == $lokasi->id ? 'selected' : ''); ?>>
                                <?php echo e($lokasi->kota); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <?php if($errors->has('pengawasanlokasi_id')): ?>
                        <div class="text-danger"><?php echo e($errors->first('pengawasanlokasi_id')); ?></div>
                    <?php endif; ?>
                </div>
            
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="user_id" class="mr-3" style="width: 200px; text-align:left;">
                        <i class="fas fa-user me-2"></i> Penulis
                    </label>
                    <input type="text" class="form-control" id="user_id_display" value="<?php echo e($user->username); ?>" readonly>
                    <input type="hidden" id="user_id" name="user_id" value="<?php echo e($user->id); ?>">
                    <?php if($errors->has('user_id')): ?>
                        <div class="text-danger"><?php echo e($errors->first('user_id')); ?></div>
                    <?php endif; ?>
                </div>
            
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="alamat_kegiatan" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-road me-2"></i> Alamat Kegiatan 
                    </label>
                    <input type="text" class="form-control" id="alamat_kegiatan" name="alamat_kegiatan" value="<?php echo e(old('alamat_kegiatan')); ?>" required>
                    <?php if($errors->has('alamat_kegiatan')): ?>
                        <div class="text-danger"><?php echo e($errors->first('alamat_kegiatan')); ?></div>
                    <?php endif; ?>
                </div>
            
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="tanggal" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-calendar me-2"></i> Tanggal Kegiatan 
                    </label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?php echo e(old('tanggal')); ?>" required>
                    <?php if($errors->has('tanggal')): ?>
                        <div class="text-danger"><?php echo e($errors->first('tanggal')); ?></div>
                    <?php endif; ?>
                </div>
            
                
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita1" class="mr-3" style="width: 200px; text-align:left; font-size:14px;" >
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita1" name="berita1" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita1')); ?>">
                    <?php if($errors->has("berita1")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita1")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita2" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita2" name="berita2" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita2')); ?>">
                    <?php if($errors->has("berita2")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita2")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita3" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita3" name="berita3" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita3')); ?>">
                    <?php if($errors->has("berita3")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita3")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita4" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita4" name="berita4" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita4')); ?>">
                    <?php if($errors->has("berita4")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita4")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita5" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita5" name="berita5" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita5')); ?>">
                    <?php if($errors->has("berita5")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita5")); ?></div>
                    <?php endif; ?>
                </div>

                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita6" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita6" name="berita6" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita6')); ?>">
                    <?php if($errors->has("berita6")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita6")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita7" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita7" name="berita7" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita7')); ?>">
                    <?php if($errors->has("berita7")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita7")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita8" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita8" name="berita8" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita8')); ?>">
                    <?php if($errors->has("berita8")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita8")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita9" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita9" name="berita9" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita9')); ?>">
                    <?php if($errors->has("berita9")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita9")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita10" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita10" name="berita10" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita10')); ?>">
                    <?php if($errors->has("berita10")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita10")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita11" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita11" name="berita11" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita11')); ?>">
                    <?php if($errors->has("berita11")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita11")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita12" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita12" name="berita12" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita12')); ?>">
                    <?php if($errors->has("berita12")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita12")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita13" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita13" name="berita13" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita13')); ?>">
                    <?php if($errors->has("berita13")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita13")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita14" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita14" name="berita14" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita14')); ?>">
                    <?php if($errors->has("berita14")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita14")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita15" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita15" name="berita15" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita15')); ?>">
                    <?php if($errors->has("berita15")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita15")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita16" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita16" name="berita16" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita16')); ?>">
                    <?php if($errors->has("berita16")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita16")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita17" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita17" name="berita17" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita17')); ?>">
                    <?php if($errors->has("berita17")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita17")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita18" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita18" name="berita18" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita18')); ?>">
                    <?php if($errors->has("berita18")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita18")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita19" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita19" name="berita19" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita19')); ?>">
                    <?php if($errors->has("berita19")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita19")); ?></div>
                    <?php endif; ?>
                </div>
                
                <div class="form-group d-flex align-items-center mt-3">
                    <label for="berita20" class="mr-3" style="width: 200px; text-align:left; font-size:14px;">
                        <i class="fas fa-image me-2"></i> Upload Gambar Kegiatan
                    </label>
                    <input type="file" class="form-control" id="berita20" name="berita20" accept="image/*" required style="max-width: 300px;" value="<?php echo e(old('berita20')); ?>">
                    <?php if($errors->has("berita20")): ?>
                        <div class="text-danger"><?php echo e($errors->first("berita20")); ?></div>
                    <?php endif; ?>
                </div>


                



            

                
                   
                
            
                <div class="form-group">
                    <button style="float: right" class="badgenewupdate btn btn-primary" type="submit">
                        <i class="fas fa-paper-plane" style="margin-right:10px;"></i> Create
                    </button>
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
    

        <?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/backend/02_berita/03_dokumentasipelatihan/create.blade.php ENDPATH**/ ?>