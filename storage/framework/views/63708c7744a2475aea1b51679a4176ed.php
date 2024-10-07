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
    <div class="container-fluid" style="margin-top: 165px;">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                  
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <a href="/portalberita/<?php echo e($item->judul); ?>">
                            <img class="img-fluid h-100" src="<?php echo e(asset('storage/' . $item->gambar)); ?>" style="object-fit: cover;">
                        
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
                                    <img class="img-fluid w-100 h-100" src="<?php echo e(asset('storage/'. $item->gambar )); ?>" style="object-fit: cover;">
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
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href=""><?php echo e($item->judul); ?></a></div>
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
    <div class="container-fluid pt-5 mb-3">
        <div class="container col-11">
            
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">


                

                
            </div>
                    <!-- Popular News Start -->
                    <div class="mb-3 mt-0">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">
                               <img src="/assets/icon/sipjakikbb.png" alt="/assets/icon/sipjakikbb.png" style="width: 40px;"> KEGIATAN SERTIFIKASI JASA KONSTRUKSI </h4>
                        </div>
                        <div class="bg-white border border-top-0 p-3">
                               
                            <?php $__currentLoopData = $data_jaskon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="w-100 h-100 d-flex flex-column justify-content-center border border-left-0" style="margin-bottom:10px;">
                                <div class="mb-2">
                                    <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2 mr-2 ml-2" href="/kegiatansertifikasi" style="margin-top:15px;"><span style="color: #000000; font-size:16px;"><?php echo e($item->judul_kegiatan); ?></span></a>
                                </div>
                                <div class="mb-2">
                                    <a href="/kegiatansertifikasi">
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
                                    <img src="<?php echo e(asset('storage/' . $item->berita1 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita1 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita2 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita2 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita3 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita3 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita4 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita4 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita5 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita5 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita6 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita6 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita7 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita7 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita8 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita8 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita9 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita9 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita10 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita10 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita11 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita12 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita12 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita13 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita13 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita14 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita15 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita15 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita16 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita16 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita17 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita17 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita18 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita18 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita19 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita19 )); ?>">
                                    <img src="<?php echo e(asset('storage/' . $item->berita20 )); ?>" alt="<?php echo e(asset('storage/' . $item->berita20 )); ?>">
                                    
                                </div>
                            </div>
                          
                            
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                           
                            <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                                <img class="img-fluid" src="img/news-110x110-1.jpg" alt="">
                                <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="">Comming Soon</a>
                                        <a class="text-body" href=""><small>Agustus 10, 2024</small></a>
                                    </div>
                                    <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="">PELATIHAN BIMBINGAN TEKNIS TENAGA KONSTRUKSI KABUPATEN BANDUNG BARAT .....</a>
                                </div>
                            </div>
                            
                            
                        </div>
                    </div>
                    <!-- Popular News End -->


        </div>
        
    </div>


    <br><br><br>
    <!-- Featured News Slider End -->

           

    </div>
    <!-- News With Sidebar End -->
    <!-- News With Sidebar End -->



        
        
        
    </section>


  
  
  


  
  
  



    
  
  


    
    
  
  
  

     <section id="sec-5">
        <div class="container">
            <h1 style="
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 20px;
            text-transform: uppercase;
            text-align: center;
            border: 2px solid black;
            padding: 10px;
            border-radius: 25px;
            width: 500px;
            margin-left: 325px;
            background: linear-gradient(to right, #f0f0f0, #e0e0e0);
            transition: background 0.5s ease, color 0.5s ease;
        " onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow )'; this.style.color='white';">
        
        Himbauan Dinas Terkait</h1>
            <p>
                Kami informasikan bahwa Sistem Informasi Pembina Jasa Konstruksi kini tersedia untuk memudahkan akses informasi terkait jasa konstruksi. Sistem ini menyediakan data terpercaya, regulasi terbaru, dan informasi penting lainnya mengenai layanan konstruksi. Silakan kunjungi platform ini untuk mendapatkan informasi yang Anda butuhkan dan memastikan kepatuhan terhadap peraturan yang berlaku.
                <div class="cont">
                    <?php $__currentLoopData = $datahimbauandinas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    <article class="quoteblock">
                        <div class="quotetxt arrow">
                            <p><img style="width:10%" src="<?php echo e(asset('storage/' . $item->foto_pejabat)); ?>" alt="<?php echo e(asset('storage/' . $item->foto_pejabat)); ?>"></p>
                            <p><span style="color: black"><?php echo $item->himbauan; ?></span></p>
                        </div>
                        <figure>
                            <img style="width:30%" class="customer" src="<?php echo e(asset('storage/' . $item->foto_pejabat)); ?>" alt="Dinas Terkait">
                            <figcaption><?php echo e($item->nama_lengkap); ?></figcaption>
                            <figcaption><?php echo e($item->jabatan); ?></figcaption>
                        </figure>
                    </article>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <div class="contactUs" style="background-color: #FFCB0F; height: 60vh; margin-bottom: 0px;">
            <div class="container" >
            
                <aside>
                    <h1 style="
                    font-family: 'Lato', sans-serif;
                    font-weight: 700;
                    font-size: 18px;
                    color: #333;
                    margin-bottom: 20px;
                    text-transform: uppercase;
                    text-align: center;
                    border: 2px solid black;
                    padding: 5px;
                    border-radius: 25px;

                    transition: background 0.5s ease, color 0.5s ease;
                " onmouseover="this.style.background='linear-gradient(to right, black, yellow)'; this.style.color='white';" onmouseout="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='#333';">Informasi Lebih Lanjut <i class="fas fa-arrow-right ml-2"></i></h1>
                    <h2 style="
                    font-family: 'Lato', sans-serif;
                    font-weight: 700;
                    font-size: 1.5rem;
                    color: #333;
                    margin-bottom: 20px;
                    text-transform: uppercase;
                    text-align: center;
                    padding: 5px;
                    border-radius: 25px;
                        ">
                        <img src="assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin-right: 10px; padding: 0;">
                        Q&A Jasa Konstruksi <br> Hub Kami</h2>
                        <p style="
                        font-family: 'Lato', sans-serif;
                        font-weight: 700;
                        font-size: 14px;
                        color: #333;
                        margin-bottom: 20px;
                        text-transform: uppercase;
                        text-align: center;
                        padding: 5px;
                        border-radius: 25px;
                            "> Dinas Pekerjaan Umum dan Penataan Ruang <br>
                            Pemerintah Kabupaten Bandung Barat </p>
                </aside>
                <form id="form" action="/qapertanyaancreate" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required 
                        style="
                            font-family: 'Lato', sans-serif;
                            font-size: 14px; 
                            padding: 10px;
                            border: 1px solid #1a237e; 
                            border-radius: 15px; 
                            width: 40%; 
                            height: 20%; 
                            color: black;
                        "
                    >
                    
                    <input type="text" name="email" placeholder="Email" required 
                        style="
                            font-family: 'Lato', sans-serif;
                            font-size: 14px; 
                            padding: 10px;
                            border: 1px solid #1a237e; 
                            border-radius: 15px; 
                            width: 40%; 
                            height: 20%; 
                            color: black;
                            margin-bottom: 10px;
                        "
                    >
                    
                    <input type="number" name="telepon" placeholder="No Whatsapp" required 
                        style="
                            font-family: 'Lato', sans-serif;
                            font-size: 14px; 
                            padding: 10px;
                            border: 1px solid #1a237e; 
                            border-radius: 15px;
                            width: 40%; 
                            height: 20%; 
                            color: black;
                            margin-bottom: 10px;
                        "
                    >
                    
                    <style>
                        .custom-select {
                            font-family: 'Lato', sans-serif;
                            font-size: 14px; 
                            padding: 10px;
                            border: 1px solid #1a237e; 
                            border-radius: 15px;
                            margin-bottom: 10px; 
                            width: 490px;
                            height: 50px; 
                            color: black;
                            background-color: white;
                        }
                        .custom-select:hover {
                            background-color: white;
                            color: black;
                        }
                    </style>
                    
                    <select name="qasebagai_id" id="qasebagai_id" class="custom-select" required>
                        <option value="" disabled selected>Anda Sebagai</option>
                        <?php $__currentLoopData = $dataqasebagai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($data->sebagai); ?>"><?php echo e($data->sebagai); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                
                    <select name="qapertanyaan_id" id="qapertanyaan_id" class="custom-select" required>
                        <option value="" disabled selected>Jenis Q&A Pertanyaan Anda</option>
                        <?php $__currentLoopData = $dataqapertanyaan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item->pertanyaan); ?>"><?php echo e($item->pertanyaan); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                
                    <br>
                
                    <button type="submit" style="
                        font-family: 'Lato', sans-serif;
                        font-size: 14px; 
                        padding: 10px;
                        border: 1px solid #1a237e; 
                        border-radius: 15px;
                        width: 200px; 
                        height: 20%; 
                        color: white;
                        background-image: linear-gradient(to bottom, #FFCB0F, #000000);
                        transition: background-color 0.3s, color 0.3s;
                        margin-left: 100px;
                        "
                        onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" 
                        onmouseout="this.style.background='linear-gradient(to right, black, #FFCB0F )'; this.style.color='white';">
                        <i class="fab fa-telegram me-2"></i> Send QA
                    </button>
                </form>
                
            </div>
        </div>
        

    </section> 

    
    
    





<?php echo $__env->make('frontend.00_atas.footer1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    
    
    
<?php echo $__env->make('frontend.00_atas.footer2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/frontend/00_full/index.blade.php ENDPATH**/ ?>