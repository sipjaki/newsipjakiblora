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


    <!-- Breaking News Start -->
    <div class="container-fluid mt-6 mb-3">
        <div class="container" style="margin-top: 188px;">
            <div class="row align-items-center">
                <div class="col-12 mt-2" >
                    <div class="d-flex justify-content-between">
                        <div class="section-title border-right-0 mb-0" style="width: 180px;">
                            
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding</h4>
                        </div>
                        <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center bg-white border border-left-0"
                            style="width: calc(100% - 180px); padding-right: 100px;">
                        <?php $__currentLoopData = $data_berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <div class="text-truncate"><a class="text-secondary text-uppercase font-weight-semi-bold" href="/portalberita/<?php echo e($item->judul); ?>"><?php echo e($item->judul); ?></a></div>
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

                


                <div class="col-lg-8">
                    <!-- News Detail Start -->

                    <div class="position-relative mb-3">
                        <!-- Gambar yang membuka modal -->
                        <img class="img-fluid w-100" src="<?php echo e($data->gambar); ?>" style="object-fit: cover; cursor: pointer;" data-toggle="modal" data-target="#imageModal">

                        <!-- Modal -->
                        <!-- Modal -->
                       <!-- Modal -->
                    <div style="margin-top: 115px;" class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered custom-modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <!-- Jika Anda ingin judul atau tombol close, aktifkan bagian ini -->
                             <h5 class="modal-title" id="imageModalLabel"><?php echo e(substr($data->judul, 0, 30)); ?> ...</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="btn btn-sn btn-warning" style="border-radius:5px;" aria-hidden="true">&times;</span>
                            </button> 
                            </div>
                            <div class="modal-body">
                            <img id="modalImage" src="" class="img-fluid" alt="Preview Image">
                            </div>
                        </div>
                        </div>
                    </div>
  
  
                        <!-- Script untuk mengatur gambar di modal -->
                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                        <script>
                        $(document).ready(function() {
                            $('img[data-toggle="modal"]').on('click', function() {
                            var imgSrc = $(this).attr('src');
                            $('#modalImage').attr('src', imgSrc);
                            $('#imageModal').modal('show');
                            });
                        });
                        </script>

                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">News</a>
                                
                            </div>
                            <h1 class="mb-3 text-uppercase font-weight-bold" style="color: black; font-size: 24px; text-align:left;"><?php echo e($data->judul); ?></h1>
                            <h6 style="text-align: justify"><?php echo $item->keterangan; ?></h6>
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

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Tranding News</h4>
                            <img src="/assets/icon/sipjakikbb.png" alt="/assets/icon/sipjakikbb.png" width="40px;">
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                          
                            <?php $__currentLoopData = $data_berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            <div class="owl-carousel main-carousel d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <a href="/portalberita/<?php echo e($item->judul); ?>">
                                    <img src="<?php echo e($item->gambar); ?>" style="width:50%; cursor:pointer" alt="">
                                </a>
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="/portalberita/<?php echo e($item->judul); ?>">News</a>
                                        <a class="text-body" href="/portalberita/<?php echo e($item->judul); ?>"><small><?php echo e($item->tanggal); ?></small></a>
                                    </div>
                                    <br><br>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="/portalberita/<?php echo e($item->judul); ?>"><?php echo e(substr($item->judul, 0, 40)); ?> ....</a>
                                
                                </div>
                            </div>
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <!-- Popular News End -->

                    <!-- Newsletter Start -->
                    
                    <!-- Newsletter End -->

                    <!-- Tags Start -->

                        <div class="mb-3">
                            <div class="section-title mb-0">
                                
                                <h4 class=" text-uppercase font-weight-bold" margin-left:-10px;>Layanan Kami</h4>
                                <img src="/assets/icon/sipjakikbb.png" alt="" style="width: 40px;">
                            </div>
                            
                            <div class="bg-white border border-top-0 p-3">
                                <?php $__currentLoopData = $data_layanankami; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                <a href="" class="d-block w-100 text-white text-decoration-none mb-2 mt-2" style="background: #F7E300; border-radius:10px;" onmouseover="this.style.background='linear-gradient(to right, white, white)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, #F7E300, #F7E300 )'; this.style.color='black';">
                                    <img src="/assets/icon/sipjakikbb.png" alt="/assets/icon/sipjakikbb.png" style="width: 12%">
                                    
                                    <span class="font-weight-medium" style="color:black"><?php echo e($item->program); ?></span>
                                </a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    
                

                <div class="col-lg-12">

                    <div class="container-fluid pt-0 mb-3">
                        <div class="container">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">
                                    <img src="/assets/icon/sipjakikbb.png" alt="/assets/icon/sipjakikbb.png" width="35px;">
                                    News</h4>
                            </div>
                            <div class="owl-carousel news-carousel carousel-item-4 position-relative">
                
                
                                <?php $__currentLoopData = $data_berita; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                <div class="position-relative overflow-hidden" style="height: 300px;">
                                    <img class="img-fluid h-100" src="<?php echo e($item->gambar); ?>" style="object-fit: cover; padding:10px;">
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

                    

                </div>





    </section>


  
  
  


  
  
  






<?php echo $__env->make('frontend.00_atas.footer1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    
    
<?php echo $__env->make('frontend.00_atas.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/frontend/02_berita/portalberita/showindex.blade.php ENDPATH**/ ?>