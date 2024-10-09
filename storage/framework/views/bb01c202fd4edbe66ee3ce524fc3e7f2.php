<?php echo $__env->make('backend.00_dashboard.part.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.00_dashboard.part.menuheader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('backend.00_dashboard.part.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- Page Wrapper -->
<div class="col-sm-9 col-xs-12 content pl-0">

    
    <div style="width: 100%; height: auto; padding: 3px; background-color: navy; border: none; border-radius: 5px; margin-top:10px; margin-bottom:10px;">
        <button class="badgekembali mb-2 mt-2" style="width: 100%; height: 30px; padding: 0; background: transparent; border: none;">
            <p style="margin: 0; font-size: 12px; text-align: center; color: white;">
                <i class="fas fa-database mr-2"></i>DASHBOARD HALAMAN SISTEM INFORMASI PEMBINA JASA KONSTRUKSI
            </p>
        </button>
    </div>
    
    
    <div class="mt-0 mb-2 button-container">
    <div class="row pl-1" style="margin-left: -3px; margin-right: -3px;">
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>HIMBAUAN DINAS</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-bullhorn" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahHimbauan); ?> Data
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>PERTANYAAN PUBLIK</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-question-circle" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahQa); ?> Pertanyaan
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>BERITA</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-newspaper" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahBerita); ?> Berita
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>AGENDA SERTIFIKASI</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-calendar-check" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahAgendasertifikasi); ?> Agenda
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>DOKUMENTASI PELATIHAN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-file-alt" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahDokumentasiPelatihan); ?> Dokumentasi 
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>ACARA KEGIATAN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-calendar-alt" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahDokumentasiAcara); ?> Kegiatan 
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>PENGAWASAN & KETERTIBAN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-eye" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahPengawasandanketeriban); ?> Pengawasan
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>ASOSIASI PENGUSAHA</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-users" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahAsosiasiPengusaha); ?> Asosiasi
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>PAKET PEKERJAAN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-briefcase" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahPaketPekerjaan); ?> Paket
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>IJIN USAHA JASA KONSTRUKSI</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-check-circle" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahIjinUsaha); ?> Ijin Usaha
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>SERTIFIKAT KETERAMPILAN KERJA</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-certificate" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahSertifikatKetermpilan); ?> SKK
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>PENANGGUNG JAWAB TEKNIS</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-user-cog" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahPenanggungJawabTeknis); ?> PJT
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>PEMBINA JASA KONSTRUKSI</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-clipboard-list" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahPembinaJasaKonstruksi); ?> Pembina
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>PELATIHAN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-chalkboard-teacher" style="font-size: 20px; margin-right: 5px;"></i> 1 Kegiatan
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>PENGAWASAN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-eye" style="font-size: 20px; margin-right: 5px;"></i> 1 Kegiatan
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3">
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
                <div class="p-2 text-center"
                     onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                     onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                    <h5 class="mb-0 mt-2 text-light">
                        <small style="font-size:12px; color: white;"><strong>KECELAKAAN</strong></small>
                    </h5>
                    <div class="text-center" style="font-size:14px;">
                        <i class="fas fa-exclamation-triangle" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahKecelakaan); ?> Data
                    </div>
                </div>
            </div>
        </div>
        
<div style="width: 100%; height: auto; padding: 3px; background-color: navy; border: none; border-radius: 5px; margin-top:5px; margin-bottom:10px;">
    <button class="badgekembali mb-2 mt-2" style="width: 100%; height: 5px; padding: 0; background: transparent; border: none;">
        <p style="margin: 0; font-size: 12px; text-align: center; color: white;">
            <i class="fas fa-database mr-2"></i>PENGATURAN DATABASE SIPJAKI  
        </p>
    </button>
</div>
<div class="mt-0 mb-2 button-container">
    <div class="row pl-1" style="margin-left: -3px; margin-right: -3px;">
        <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
            <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;"> 
                <div class="p-2 text-center"
                onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>STATUS ADMIN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    <i class="fas fa-users" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahstatusadmin); ?> Status Admin
                </div>
                
            </div>
        </div>
    </a>
    
    <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>KECAMATAN/KOTA</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    <i class="fas fa-building" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahpengawasanlokasi); ?> Daerah
                </div>
            </div>
        </div>
    </a>
    
    
    <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>QA SEBAGAI</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    <i class="fas fa-pen" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahqasebagai); ?> Subjek 
                </div>
            </div>
        </div>
    </a>
    
    
    <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>QA PERTANYAAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    <i class="fas fa-pen" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahqapertanyaan); ?> Pertanyaan 
                </div>
            </div>
        </div>
    </a>
    
    <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>METODE PANGADAAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    <i class="fas fa-file" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahmetodepengadaan); ?> Pengadaan 
                </div>
            </div>
        </div>
    </a>
    
    <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PENGAWASAN BANGUNAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    <i class="fas fa-building" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahpengawasanbangunangedung); ?> Bangunan Gedung 
                </div>
            </div>
        </div>
    </a>
    
    <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PENGAWASAN STATUS</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    <i class="fas fa-warning" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahpengawasanstatus); ?> Status 
                </div>
            </div>
        </div>
    </a>
    
    
    <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PENGAWASAN TINDAKAN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    <i class="fas fa-warning" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahpengawasantindakan); ?> Tindakan 
                </div>
            </div>
        </div>
    </a>
    
    <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>AGENDA STATUS</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    <i class="fas fa-calendar" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahagendastatus); ?> Status 
                </div>
            </div>
        </div>
    </a>
    
    <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>KETERAMPILAN PEKERJA</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    <i class="fas fa-cogs" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahketerampilanpekerja); ?> Keterampilan 
                </div>
            </div>
        </div>
    </a>
    
    <a href="/404" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
        <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
            <div class="p-2 text-center"
                 onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                 onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                <h5 class="mb-0 mt-2 text-light">
                    <small style="font-size:12px; color: white;"><strong>PILIHAN TAHUN</strong></small>
                </h5>
                <div class="text-center" style="font-size:14px;">
                    <i class="fas fa-list" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahpilihantahun); ?> Pilihan 
                </div>
            </div>
        </div>
    </a>

    </div>
</div>


<div style="width: 100%; height: auto; padding: 3px; background-color: navy; border: none; border-radius: 5px; margin-top:0px; margin-bottom:5px;">
    <button class="badgekembali mb-2 mt-2" style="width: 100%; height: 5px; padding: 0; background: transparent; border: none;">
        <p style="margin: 0; font-size: 12px; text-align: center; color: white;">
            <i class="fas fa-database mr-2"></i>PERATURAN UNDANG - UNDANG 
        </p>
    </button>
</div>
  

        <div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:20px;">
    <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
        <div class="p-2 text-center"
             onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
             onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
            <h5 class="mb-0 mt-2 text-light">
                <small style="font-size:12px; color: white;"><strong>UNDANG-UNDANG</strong></small>
            </h5>
            <div class="text-center" style="font-size:14px;">
                <i class="fas fa-gavel" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahUU); ?> Undang-Undang
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:20px;">
    <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
        <div class="p-2 text-center"
             onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
             onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
            <h5 class="mb-0 mt-2 text-light">
                <small style="font-size:12px; color: white;"><strong>PERATURAN PEMERINTAH</strong></small>
            </h5>
            <div class="text-center" style="font-size:14px;">
                <i class="fas fa-file-contract" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahPeraturanPemerintah); ?> Permen
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:20px;">
    <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
        <div class="p-2 text-center"
             onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
             onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
            <h5 class="mb-0 mt-2 text-light">
                <small style="font-size:12px; color: white;"><strong>PERATURAN PRESIDEN</strong></small>
            </h5>
            <div class="text-center" style="font-size:14px;">
                <i class="fas fa-file-signature" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahPeraturanPresiden); ?> Peraturan
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:20px;">
    <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
        <div class="p-2 text-center"
             onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
             onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
            <h5 class="mb-0 mt-2 text-light">
                <small style="font-size:12px; color: white;"><strong>PERATURAN MENTERI</strong></small>
            </h5>
            <div class="text-center" style="font-size:14px;">
                <i class="fas fa-file-alt" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahPeraturanMenteri); ?> Peraturan
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
    <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
        <div class="p-2 text-center"
             onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
             onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
            <h5 class="mb-0 mt-2 text-light">
                <small style="font-size:12px; color: white;"><strong>KEPUTUSAN MENTERI</strong></small>
            </h5>
            <div class="text-center" style="font-size:14px;">
                <i class="fas fa-user-tie" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahKeputusanMenteri); ?> Keputusan
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
    <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
        <div class="p-2 text-center"
             onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
             onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
            <h5 class="mb-0 mt-2 text-light">
                <small style="font-size:12px; color: white;"><strong>SURAT EDARAN MENTERI</strong></small>
            </h5>
            <div class="text-center" style="font-size:14px;">
                <i class="fas fa-envelope" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahSuratEdaranMenteri); ?> Surat
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
    <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
        <div class="p-2 text-center"
             onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
             onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
            <h5 class="mb-0 mt-2 text-light">
                <small style="font-size:12px; color: white;"><strong>SURAT REFERENSI</strong></small>
            </h5>
            <div class="text-center" style="font-size:14px;">
                <i class="fas fa-book" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahSuratReferensi); ?> Surat
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
    <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
        <div class="p-2 text-center"
             onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
             onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
            <h5 class="mb-0 mt-2 text-light">
                <small style="font-size:12px; color: white;"><strong>PERATURAN DAERAH</strong></small>
            </h5>
            <div class="text-center" style="font-size:14px;">
                <i class="fas fa-map-signs" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahPeraturanDaerah); ?> Peraturan
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
    <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
        <div class="p-2 text-center"
             onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
             onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
            <h5 class="mb-0 mt-2 text-light">
                <small style="font-size:12px; color: white;"><strong>PERATURAN GUBERNUR</strong></small>
            </h5>
            <div class="text-center" style="font-size:14px;">
                <i class="fas fa-gavel" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahPeraturanGubernur); ?> Peraturan
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
    <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
        <div class="p-2 text-center"
             onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
             onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
            <h5 class="mb-0 mt-2 text-light">
                <small style="font-size:12px; color: white;"><strong>PERATURAN WALIKOTA/BUPATI</strong></small>
            </h5>
            <div class="text-center" style="font-size:14px;">
                <i class="fas fa-city" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahPeraturanWalikotaBupati); ?> Peraturan
            </div>
        </div>
    </div>
</div>

<div class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="margin-top:0px;">
    <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;">
        <div class="p-2 text-center"
             onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
             onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
            <h5 class="mb-0 mt-2 text-light">
                <small style="font-size:12px; color: white;"><strong>SURAT KEPUTUSAN</strong></small>
            </h5>
            <div class="text-center" style="font-size:14px;">
                <i class="fas fa-file-alt" style="font-size: 20px; margin-right: 5px;"></i> <?php echo e($jumlahSuratKeputusan); ?> Surat
            </div>
        </div>
    </div>
</div>

    </div>
</div>

<?php echo $__env->make('backend.00_dashboard.part.menufooter', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</div>

<?php echo $__env->make('backend.00_dashboard.part.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/backend/00_dashboard/index.blade.php ENDPATH**/ ?>