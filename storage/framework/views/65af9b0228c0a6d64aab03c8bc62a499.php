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

<div class="col-lg-12" style="margin-top:188px;" >

    <div class="container-fluid">
        <br>
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold" style="font-size: 16px;">
                    <img src="/assets/icon/sipjakikbb.png" alt="/assets/icon/sipjakikbb.png" width="35px;">
                    KEGIATAN SERTIFIKASI PARA PEKERJA TUKANG TERAMPIL</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                <?php $__currentLoopData = $data_laporankegiatanall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid h-100" src="<?php echo e(asset('storage/' . $item->gambar)); ?>" style="object-fit: cover; padding:10px;">
                <div class="overlay">
                    <a href="/detailskegiatan/<?php echo e($item->jabatan); ?>" class="h6 m-0 text-white text-uppercase font-weight-semi-bold"><?php echo e($item->judul_kegiatan); ?></a>
                </div>
            </div>
                
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>

            
        </div>
        
    </div>

    

</div>





    <!-- Breaking News Start -->
    <div class="container-fluid mt-6 mb-3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 mt-2" >
                    <div class="d-flex justify-content-between">
                        <div class="section-title border-right-0 mb-0" style="width: 180px;">
                            
                            <h5 class="m-0 text-uppercase font-weight-bold">Tranding</h5>
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                            style="width: calc(100% - 180px); padding-right: 100px;">
                        <?php $__currentLoopData = $data_laporankegiatanall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="/portalberita/<?php echo e($item->judul_kegiatan); ?>"><?php echo e($item->judul_kegiatan); ?></a></div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">

                


                <div class="col-lg-12">
                    <!-- News Detail Start -->
                      
                    <div class="position-relative mb-3">
                        
                            
                                
                            <!-- Gambar yang membuka modal -->
                            <img class="img-fluid w-100" src="<?php echo e(asset('storage/' . $data_laporankegiatan->gambar)); ?>" style="object-fit: cover; cursor: pointer;" data-toggle="modal" data-target="#imageModal">
                        
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">News</a>
                                
                            </div>
                            <h1 class="mb-3 text-uppercase font-weight-bold" style="color: black; font-size: 20px; text-align:left;"><?php echo e($data_laporankegiatan->judul_kegiatan); ?></h1>
                            <h6 style="text-align: justify"><?php echo $data_laporankegiatan->keterangan_berita; ?></h6>
                        </div>


                        <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
                            <div class="d-flex align-items-center">
                                <img class="rounded-circle mr-2" src="/assets/icon/sipjakikbb.png" width="25" height="25" alt="">
                                <span>Sipjaki Pemerintah Kabupaten Bandung Barat</span>
                            </div>
                            <div class="d-flex align-items-center">
                                
                                
                            </div>
                        </div>
                        
                        
                        
                        
                        
                    </div>
                    <!-- News Detail End -->



                
                    <br><br>

                    
                    <!-- Comment Form End -->
                </div>

                
                <div class="col-lg-4">

                    <!-- Newsletter Start -->
                    
                    <!-- Newsletter End -->

                    <!-- Tags Start -->

                        <div class="mb-3">
                            
                        </div>
                    </div>
                    </div>
                    </div>
                    
                


    </section>


  
  
  


  
  
  






<?php echo $__env->make('frontend.00_atas.footer1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    
    
<?php echo $__env->make('frontend.00_atas.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/frontend/02_berita/02_sertifikasi/showdetails.blade.php ENDPATH**/ ?>