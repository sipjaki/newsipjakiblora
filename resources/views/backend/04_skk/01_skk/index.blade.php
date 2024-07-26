@include('backend.00_dashboard.part.header')
@include('backend.00_dashboard.part.menuheader')
@include('backend.00_dashboard.part.sidebar')
    
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
    margin-bottom: 0px;
    border-radius: 25px;
    text-align: center;
    width: 100%;
    height: 90vh;
    margin-left: none;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
<div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div>


    <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;">Kementrian Pekerjaan Umum Dan Penataan Ruang </h1>
    <div class="container">
        <div class="card" style="
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 20px auto;">


            {{-- ------------------------------------ FITUR TAMBAHAN ------------- --}}

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
            .badge {
                background: linear-gradient(to right, yellow, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                margin-right: 10px;
                text-align: center;
                transition: background-color 0.3s, color 0.3s;
            }
    
            .badge:hover {
                background-color: white;
                color: black;
            }
        </style>
        <div class="badge"><i class="fas fa-edit me-2"></i>Sertifikat Keahlian </div></label>
    {{-- <select id="entries" onchange="showEntries()">
        <option value="5">5</option>
        <option value="10">10</option>
        <option value="15">15</option>
        <option value="20">20</option>
        <option value="25">25</option>
        </select> --}}
</div>
<div class="search-entries">
    <style>
        .search-container {
            position: relative;
            display: inline-block;
        }
        .search-container input {
            border-radius: 15px;
            padding: 2px 5px 2px 25px; /* Extra padding for the icon */
        }
        .search-container .fa-search {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
    <div class="search-container">
        <input
            type="text"
            id="searchInput"
            onkeyup="searchEntries()"
            placeholder="  Search..">
        <i class="fas fa-search"></i>
    </div>

    <script>
        function searchEntries() {
            // Your JavaScript function for searching entries
        }
    </script>
</div>
</div>




                
                <!--Custom cards section-->
                <div class="row ">
                    <!-- <div class="col-sm-3">
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Emails</h6>
                            
                            <p class="mb-2 mt-3">Open rate <span class="pull-right">70%</span></p>
                            <div class="progress mb-4" style="height: 7px;">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="70" style="width: 70%"  aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <p class="mb-2">Sent <span class="pull-right">310/500</span></p>
                            <div class="progress mb-4" style="height: 7px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 45%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                            <p class="mb-2">Recieved <span class="pull-right">210/500</span></p>
                            <div class="progress mb-4" style="height: 7px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            
                        </div>
                    </div> -->

                    <!-- <div class="col-sm-3">
                        <div class="mt-1 mb-3 p-3 button-container bg-white shadow-sm border">
                            <h6 class="mb-3">Top Products</h6>
                            
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>IphoneX</td>
                                        <td>225</td>
                                    </tr>
                                    <tr>
                                        <td>Onesplus</td>
                                        <td>1850</td>
                                    </tr>
                                    <tr>
                                        <td>Samsung S7</td>
                                        <td>1550</td>
                                    </tr>
                                </table>
                            </div>
                            
                        </div>
                    </div> -->

                    <div class="col-sm-6">
                        <div class="mt-1 mb-3 p-3 button-container bg-theme shadow border">
                            <!-- <h6 class="mb-4 text-center text-light">Average Deal Size</h6> -->
                            
                            <!-- <div class="row">
                                <div class="col-sm-6">
                                    <div class="text-center pb-3">
                                        <h5 class="mb-3 mt-2 text-light"><small><strong>30%</strong></small></h5>
                                        <h1 class="text-light">$25,650</h1>
                                        <h5 class="mb-0 mt-3 text-light"><small><strong>per rep</strong></small></h5>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="text-center pb-3">
                                        <h5 class="mb-3 mt-2 text-light"><small><strong>12%</strong></small></h5>
                                        <h1 class="text-light">$15,650</h1>
                                        <h5 class="mb-0 mt-3 text-light"><small><strong>per team</strong></small></h5>
                                    </div>
                                </div>
                            </div>
                             -->
                        </div>
                    </div>
                </div>


                <!--Dashboard widget-->
                <div class="mt-1 mb-3 button-container">
                    <div class="row pl-0">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-theme border shadow rounded">
                                <div class="p-2 text-center">
                                    <h5 class="mb-0 mt-2 text-light"><small><strong>DATA KONSTRUKSI</strong></small></h5>
                                    <!-- <h1>$36,500</h1> -->
                                </div>
                                <!--<div class="align-bottom">
                                    <span id="incomeBarCol"></span>
                                </div>-->
                                <div class="text-center text-light">
                                    SEGERA HADIR
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-success border shadow rounded">
                                <div class="p-2 mb-1 text-center">
                                    <h5 class="mb-0 mt-2 text-light"><small><strong>DATA TENAGA KERJA</strong></small></h5>
                                    <!-- <h1 class="text-white">$25,650</h1> -->
                                </div>
                                <!--<div class="align-bottom">
                                    <span id="profitBarCol"></span>
                                </div>-->
                                <div class="text-center text-light">
                                    SEGERA HADIR
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-3">
                            <div class="bg-danger border shadow rounded">
                                <div class="p-2 text-center">
                                    <h5 class="mb-0 mt-2 text-light"><small><strong>DATA PEMBINA KONSTRUKSI</strong></small></h5>
                                    <!-- <h1 class="text-white">$10,850</h1> -->
                                </div>
                                <!--<div class="align-bottom">
                                    <span id="expensesBarCol"></span>
                                </div>-->
                                <div class="text-center text-light">
                                    SEGERA HADIR
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Dashboard widget-->


                
                
            </div>
        </div>
        
        @include('backend.00_dashboard.part.menufooter')
        <!--Main Content-->
        
    </div>
    @include('backend.00_dashboard.part.footer')
    

    