<div class="section-title">
    <h4 class="m-0 text-uppercase font-weight-bold">
        <img src="/assets/icon/sipjakikbb.png" alt="/assets/icon/sipjakikbb.png" style="width:40px;">
        Layanan Kami</h4>
</div>

<div class="owl-carousel news-carousel carousel-item-4 position-relative">

    <?php $__currentLoopData = $data_layanankami; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        
    <div class="position-relative overflow-hidden" style="height: 300px;">
        <a href="/">
            <img class="img-fluid h-300" src="<?php echo e($item->gambar); ?>" style="object-fit: cover; padding:10px; cursor:pointer">
            <div class="overlay">
                <div class="">
                    <button class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                    href="/"><?php echo e($item->program); ?></button> <br>
                    <p class="text-white" href=""><small><?php echo e($item->keterangan); ?></small></p>
                </div>
                
            </div>
        </a>
    </div>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    
</div>
<?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/tambahan/layanankami.blade.php ENDPATH**/ ?>