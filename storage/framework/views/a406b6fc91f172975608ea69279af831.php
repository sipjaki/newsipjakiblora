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

                <?php $__currentLoopData = $data_laporankegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="position-relative overflow-hidden" style="height: 300px;">
                            <img class="img-fluid h-100" src="<?php echo e($item->gambar); ?>" style="object-fit: cover; padding:10px;">
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
                        <?php $__currentLoopData = $data_laporankegiatan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
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

                


                <div class="col-lg-8">
                    <!-- News Detail Start -->
                      
                    <div class="position-relative mb-3">
                        
                            
                                
                            <!-- Gambar yang membuka modal -->
                            <img class="img-fluid w-100" src="<?php echo e($data_berita->gambar); ?>" style="object-fit: cover; cursor: pointer;" data-toggle="modal" data-target="#imageModal">
                        
                        <div class="bg-white border border-top-0 p-4">
                            <div class="mb-3">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                    href="">News</a>
                                
                            </div>
                            <h1 class="mb-3 text-uppercase font-weight-bold" style="color: black; font-size: 20px; text-align:left;"><?php echo e($data_berita->judul); ?></h1>
                            <h6 style="text-align: justify"><?php echo $data_berita->keterangan; ?></h6>
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
                            <div class="section-title mb-0">
                                
                                <h5 class=" text-uppercase font-weight-bold">Layanan Kami</h5>
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
                        <style>
                            .gallery img {
                                width: 100%;
                                height: auto;
                                border-radius: 8px;
                                cursor: pointer;
                                transition: transform 0.3s ease, box-shadow 0.3s ease;
                            }
                            .gallery img:hover {
                                transform: scale(1.05);
                                box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
                            }
                            .modal-dialog {
                                max-width: 90%;
                                width: auto;
                            }
                            .modal-body img {
                                width: 100%;
                                height: auto;
                            }
                        </style>
                    </head>
                    <body>
                    
                    <div class="container my-4">
                        <div class="section-title mb-4">
                            <h5 class="text-uppercase font-weight-bold">Galeri Kegiatan</h5>
                            <img src="/assets/icon/sipjakikbb.png" alt="Logo" style="width: 40px;">
                        </div>
                    
                        <div class="row gallery">
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita1); ?>" alt="Berita 1" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita1); ?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita2); ?>" alt="Berita 2" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita2); ?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita3); ?>" alt="Berita 3" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita3); ?>">
                            </div>
                            <!-- Tambahkan lebih banyak gambar dengan pola yang sama -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita4); ?>" alt="Berita 4" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita4); ?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita5); ?>" alt="Berita 5" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita5); ?>">
                            </div>
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita6); ?>" alt="Berita 6" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita6); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita7); ?>" alt="Berita 7" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita7); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita8); ?>" alt="Berita 8" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita8); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita9); ?>" alt="Berita 9" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita9); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita10); ?>" alt="Berita 10" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita10); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita11); ?>" alt="Berita 11" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita11); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita12); ?>" alt="Berita 12" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita12); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita13); ?>" alt="Berita 13" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita13); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita14); ?>" alt="Berita 14" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita14); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita15); ?>" alt="Berita 15" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita15); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita16); ?>" alt="Berita 16" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita16); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita17); ?>" alt="Berita 17" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita17); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita18); ?>" alt="Berita 18" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita18); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita19); ?>" alt="Berita 19" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita19); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita20); ?>" alt="Berita 20" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita20); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita21); ?>" alt="Berita 21" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita21); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita22); ?>" alt="Berita 22" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita22); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita23); ?>" alt="Berita 23" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita23); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita24); ?>" alt="Berita 24" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita24); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita25); ?>" alt="Berita 25" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita25); ?>">
                            </div>
                            <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                            <div class="col-md-4 mb-3">
                                <img src="<?php echo e($data_kegiatanjaskon->berita26); ?>" alt="Berita 26" data-toggle="modal" data-target="#imageModal" data-image="<?php echo e($data_kegiatanjaskon->berita26); ?>">
                            </div>
                                    <!-- Lanjutkan menambahkan gambar sesuai kebutuhan -->
                        </div>
                    </div>
                    
                    <!-- Modal -->
                    <div style="margin-top:120px;" class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="imageModalLabel"></h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <img id="modalImage" src="" alt="Gambar Besar">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('.gallery img').on('click', function() {
                                var imageUrl = $(this).data('image');
                                $('#modalImage').attr('src', imageUrl);
                            });
                        });
                    </script>



                    </div>
                    </div>
                    </div>
                    
                


    </section>


  
  
  


  
  
  






<?php echo $__env->make('frontend.00_atas.footer1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    
    
<?php echo $__env->make('frontend.00_atas.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/frontend/02_berita/03_sertifikasi/show.blade.php ENDPATH**/ ?>