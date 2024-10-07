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



   



    <!-- Main News Slider Start -->
    <div class="container-fluid" style="margin-top:165px;">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                  
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <a href="/portalberita/<?php echo e($item->judul); ?>">
                            <img class="img-fluid h-100" src="<?php echo e(asset('storage/' . $item->gambar )); ?>" style="object-fit: cover;">
                        </a>
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="/portalberita/<?php echo e($item->judul); ?>">News</a>
                                
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" style="font-size: 24px;" href="/portalberita/<?php echo e($item->judul); ?>"><?php echo e($item->judul); ?></a>
                        </div>
                    </div>
                    
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    


                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    <?php $__currentLoopData = $data->slice(-4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
                        <div class="col-md-6 px-0">
                            <a href="/portalberita/<?php echo e($item->judul); ?>">

                                <div class="position-relative overflow-hidden" style="height: 250px;">
                                    <img class="img-fluid w-100 h-100" src="<?php echo e(asset('storage/' . $item->gambar )); ?>" style="object-fit: cover;">
                                    <div class="overlay">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="/portalberita/<?php echo e($item->judul); ?>">News</a>
                                        
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/portalberita/<?php echo e($item->judul); ?>"><?php echo e($item->judul); ?></a>
                                </div>
                            </a>

                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Breaking News Start -->
    <div class="container-fluid bg-dark py-3 mb-3">
        <div class="container">
            <div class="row align-items-center bg-dark">
                <div class="col-12">
                    <a href="">
                        <div class="d-flex justify-content-between">
                            <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">News</div>
                            <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                            style="width: calc(100% - 170px); padding-right: 90px;">
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="/portalberita/<?php echo e($item->judul); ?>"><?php echo e($item->judul); ?></a></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-5">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">news</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">


                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="<?php echo e(asset('storage/' . $item->gambar )); ?>" style="object-fit: cover; padding:10px;">
                    <div class="overlay">
                        <div class="mb-2">
                            
                            
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/portalberita/<?php echo e($item->judul); ?>"><?php echo e($item->judul); ?></a>
                    </div>
                </div>
                
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </div>

    <br>

        
    </section>


  
  
  


  
  
  
   
    
    
    

    
  
  

    
    
    





<?php echo $__env->make('frontend.00_atas.footer1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    
    
<?php echo $__env->make('frontend.00_atas.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/frontend/02_berita/01_portalberita/navbarberita.blade.php ENDPATH**/ ?>