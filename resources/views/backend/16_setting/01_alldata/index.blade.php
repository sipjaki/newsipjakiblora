@include('backend.00_dashboard.part.header')
@include('backend.00_dashboard.part.menuheader')
@include('backend.00_dashboard.part.sidebar')

<!-- Page Wrapper -->
<div class="col-sm-9 col-xs-12 content pl-0">

    
    <div style="width: 100%; height: auto; padding: 3px; background-color: navy; border: none; border-radius: 5px; margin-top:10px; margin-bottom:10px;">
        <button class="badgekembali mb-2 mt-2" style="width: 100%; height: 30px; padding: 0; background: transparent; border: none;">
            <p style="margin: 0; font-size: 12px; text-align: center; color: white;">
                <i class="fas fa-database mr-2"></i>PENGATURAN DATABASE KATEGORI ADMINISTRATOR
            </p>
        </button>
    </div>
    
    <div class="mt-0 mb-2 button-container">
        <div class="row pl-1" style="margin-left: -3px; margin-right: -3px;">
            
            <a href="/settingstatusadmin" class="col-lg-3 col-md-3 col-sm-4 col-6 mb-3" style="background:inherit"   >
                    <div style="background-color: #001f3f; border: 1px solid #001f3f; border-radius: 25px; padding: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); text-align: center; width: calc(100% - 10px); max-width: 250px; margin: 0 auto; cursor: pointer; color: white;"> 
                        <div class="p-2 text-center"
                        onmouseover="this.parentNode.style.backgroundColor='white'; this.parentNode.style.color='black'; this.parentNode.style.boxShadow='0 6px 15px rgba(0, 0, 0, 0.3)'; this.querySelector('small').style.color='black';" 
                        onmouseout="this.parentNode.style.backgroundColor='#001f3f'; this.parentNode.style.color='white'; this.parentNode.style.boxShadow='0 4px 10px rgba(0, 0, 0, 0.2)'; this.querySelector('small').style.color='white';">
                        <h5 class="mb-0 mt-2 text-light">
                            <small style="font-size:12px; color: white;"><strong>STATUS ADMIN</strong></small>
                        </h5>
                        <div class="text-center" style="font-size:14px;">
                            <i class="fas fa-users" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahstatusadmin}} Status Admin
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
                            <i class="fas fa-building" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahpengawasanlokasi}} Daerah
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
                            <i class="fas fa-pen" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahqasebagai}} Subjek 
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
                            <i class="fas fa-pen" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahqapertanyaan}} Pertanyaan 
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
                            <i class="fas fa-file" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahmetodepengadaan}} Pengadaan 
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
                            <i class="fas fa-building" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahpengawasanbangunangedung}} Bangunan Gedung 
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
                            <i class="fas fa-warning" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahpengawasanstatus}} Status 
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
                            <i class="fas fa-warning" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahpengawasantindakan}} Tindakan 
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
                            <i class="fas fa-calendar" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahagendastatus}} Status 
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
                            <i class="fas fa-cogs" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahketerampilanpekerja}} Keterampilan 
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
                            <i class="fas fa-list" style="font-size: 20px; margin-right: 5px;"></i> {{$jumlahpilihantahun}} Pilihan 
                        </div>
                    </div>
                </div>
            </a>
            
    
        </div>
    </div>
    
@include('backend.00_dashboard.part.menufooter')

</div>

@include('backend.00_dashboard.part.footer')
