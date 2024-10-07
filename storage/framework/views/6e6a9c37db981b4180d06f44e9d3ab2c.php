<?php echo $__env->make('frontend.00_atas.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>






<section id="sec-0">
    
    <div class="div" style="z-index: 9999; position: fixed;
            top: 0; left: 0; width: 100%; z-index: 9999;
            background-color: white; border-bottom: 1px solid black; 
            ">

        <?php echo $__env->make('frontend.00_atas.header1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <header>
            
                <?php echo $__env->make('frontend.00_atas.header2_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            
        </div>
        </header>
    




    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-3" style="margin-top: 165px;">
        <div class="container col-11">
                    <!-- Popular News Start -->
                    <div class="mb-3 mt-0">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">
                               <img src="/assets/icon/sipjakikbb.png" alt="/assets/icon/sipjakikbb.png" style="width: 40px;"> KEGIATAN SERTIFIKASI JASA KONSTRUKSI </h4>
                        <style>
                            /* Styling untuk tautan */
                                    .button-link {
                                        text-decoration: none; /* Menghilangkan garis bawah pada tautan */
                                    }

                                    /* Styling untuk tombol */
                                    .custom-button {
                                        background-color: #f1c40f; /* Warna latar belakang biru */
                                        border: none; /* Menghilangkan border bawaan tombol */
                                        color: black; /* Warna teks putih */
                                        padding: 5px 20px; /* Jarak dalam tombol (vertikal, horizontal) */
                                        font-size: 14px; /* Ukuran font */
                                        border-radius: 15px; /* Sudut membulat */
                                        cursor: pointer; /* Mengubah kursor saat hover */
                                        transition: background-color 0.3s ease, transform 0.3s ease; /* Efek transisi */
                                    }

                                    .custom-button:hover {
                                        background-color: #001F3F; /* Warna latar belakang saat hover */
                                        transform: scale(1.05);
                                        color: white; /* Memperbesar tombol sedikit saat hover */
                                    }

                                    .custom-button:active {
                                        background-color: #001F3F;
                                        color: white; /* Warna latar belakang saat tombol diklik */
                                    }

                        </style>
                                <?php $__currentLoopData = $data_jaskon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <a href="/kegiatansertifikasi/<?php echo e($item->judul_kegiatan); ?>" class="button-link">
                                <button class="custom-button"><i class="fas fa-eye me-2"></i>Lihat Kegiatan</button>
                            </a>
                            
                        
                            </div>
                        <div class="bg-white border border-top-0 p-3">
                               
                            <div class="w-100 h-100 d-flex flex-column justify-content-center border border-left-0" style="margin-bottom:10px;">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2 mr-2 ml-2" href=""" ><span style="color: #000000; font-size:16px;"><?php echo e($item->judul_kegiatan); ?></span></a>
                                </div>
                                <div class="mb-2">
                                    <a href="">
                                        <p class="px-3" style="color: #000000"><?php echo e($item->alamat_kegiatan); ?></p>    
                                    </a>
                                    
                                </div>
                                
                            </div>

                            

                            <style>
                            .scroll-container {
                                overflow: hidden;
                                white-space: nowrap;
                                width: 100%;
                                background-color: white;
                                position: relative;
                            }
                            
                            .scrolling-content {
                                display: inline-block;
                                white-space: nowrap;
                                animation: scroll 10s linear infinite;
                            }
                            
                            .scrolling-content img {
                                width: 15%;
                                height: auto;
                                display: inline-block;
                                margin-right: 10px;
                            }
                            
                            @keyframes scroll {
                                0% { transform: translateX(0); }
                                100% { transform: translateX(-50%); }
                            }
                            </style>
                         
                                
                            <div class="scroll-container">
                                <div class="scrolling-content">
                                    <img src="<?php echo e(asset('storage/' . $item->berita1)); ?>" alt="<?php echo e(asset('storage/' . $item->berita1)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita2)); ?>" alt="<?php echo e(asset('storage/' . $item->berita2)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita3)); ?>" alt="<?php echo e(asset('storage/' . $item->berita3)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita4)); ?>" alt="<?php echo e(asset('storage/' . $item->berita4)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita5)); ?>" alt="<?php echo e(asset('storage/' . $item->berita5)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita6)); ?>" alt="<?php echo e(asset('storage/' . $item->berita6)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita7)); ?>" alt="<?php echo e(asset('storage/' . $item->berita7)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita8)); ?>" alt="<?php echo e(asset('storage/' . $item->berita8)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita9)); ?>" alt="<?php echo e(asset('storage/' . $item->berita9)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita10)); ?>" alt="<?php echo e(asset('storage/' . $item->berita10)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita11)); ?>" alt="<?php echo e(asset('storage/' . $item->berita11)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita12)); ?>" alt="<?php echo e(asset('storage/' . $item->berita12)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita13)); ?>" alt="<?php echo e(asset('storage/' . $item->berita13)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita14)); ?>" alt="<?php echo e(asset('storage/' . $item->berita14)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita15)); ?>" alt="<?php echo e(asset('storage/' . $item->berita15)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita16)); ?>" alt="<?php echo e(asset('storage/' . $item->berita16)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita17)); ?>" alt="<?php echo e(asset('storage/' . $item->berita17)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita18)); ?>" alt="<?php echo e(asset('storage/' . $item->berita18)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita19)); ?>" alt="<?php echo e(asset('storage/' . $item->berita19)); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita20)); ?>" alt="<?php echo e(asset('storage/' . $item->berita20)); ?>">
                                    
                                </div>
                            </div>
                          
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                           
                            
                            
                        </div>
                    </div>
                    <!-- Popular News End -->


            <?php echo $__env->make('tambahan.layanankami', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        
    </div>


    <br><br><br>
    <!-- Featured News Slider End -->

           

    </div>
    <!-- News With Sidebar End -->
    <!-- News With Sidebar End -->



        
        
        
    </section>


  
  
  


  
  
  



    
  
  


    
    
  
  
  


    
    
    





<?php echo $__env->make('frontend.00_atas.footer1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    
    
<?php echo $__env->make('frontend.00_atas.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/frontend/02_berita/02_sertifikasi/index.blade.php ENDPATH**/ ?>