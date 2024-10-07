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

                <div class="container">
                    <?php
 
$dataPoints1 = array(
	array("label"=> "2010", "y"=> 36.12),
	array("label"=> "2011", "y"=> 34.87),
	array("label"=> "2012", "y"=> 40.30),
	array("label"=> "2013", "y"=> 35.30),
	array("label"=> "2014", "y"=> 39.50),
	array("label"=> "2015", "y"=> 50.82),
	array("label"=> "2016", "y"=> 74.70)
);
$dataPoints2 = array(
	array("label"=> "2010", "y"=> 64.61),
	array("label"=> "2011", "y"=> 70.55),
	array("label"=> "2012", "y"=> 72.50),
	array("label"=> "2013", "y"=> 81.30),
	array("label"=> "2014", "y"=> 63.60),
	array("label"=> "2015", "y"=> 69.38),
	array("label"=> "2016", "y"=> 98.70)
);
	
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Average Amount Spent on Real and Artificial X-Mas Trees in U.S."
	},
	axisY:{
		includeZero: true
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Real Trees",
		indexLabel: "{y}",
		yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Artificial Trees",
		indexLabel: "{y}",
		yValueFormatString: "$#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>                    

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


                @include('backend.00_dashboard.part.menufooter')
                
                
            </div>
        </div>
        
        <!--Main Content-->
        
    </div>
    @include('backend.00_dashboard.part.footer')
    

    