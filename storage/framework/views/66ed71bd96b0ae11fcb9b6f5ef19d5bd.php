<style>

.loader-wrapper {
    position: fixed;
    z-index: 9999;
    background: #fff;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
}

.loader-circle {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 200px;
    height: 200px;
    transform: translate(-50%, -50%);
    border-radius: 50%;
    overflow: hidden;
}

.loader-wave {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: rgba(13, 71, 161, 0.5);
    animation: wave 4s infinite ease-in-out;
}

.loader-wind {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.3);
    animation: wind 3s infinite linear;
    clip-path: ellipse(60% 70% at 50% 50%);
}

.loader-image {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 80%;
    height: auto;
    transform: translate(-50%, -50%);
    z-index: 10;
    animation: rotate 9s infinite linear;
}

@keyframes wave {
    0% {
        transform: translate(-50%, -50%) scale(1);
    }
    50% {
        transform: translate(-50%, -50%) scale(1.1);
    }
    100% {
        transform: translate(-50%, -50%) scale(1);
    }
}

@keyframes wind {
    0% {
        transform: translate(-50%, -50%) rotate(0deg);
        opacity: 0.6;
    }
    50% {
        transform: translate(-50%, -50%) rotate(180deg);
        opacity: 0.3;
    }
    100% {
        transform: translate(-50%, -50%) rotate(360deg);
        opacity: 0.6;
    }
}

</style>

<div class="loader-wrapper">
    <div class="loader-circle">
        <div class="loader-wave"></div>
        <div class="loader-wind"></div>
        <img src="/assets/sipjakikbb.png" alt="Loading" class="loader-image">
    </div>
</div>

<!--Page loader-->

<!--Page Wrapper-->

<div class="container-fluid">

    <!--Header-->
    <div class="row header shadow-sm" style="background: #FFCB0F ">
        
                    <style>
                /* CSS untuk gaya elemen h3 */
                h3 {
                    font-family: Arial, sans-serif; /* jenis huruf */
                    font-size: 18px; /* ukuran huruf */
                    font-weight: 700; /* ketebalan huruf */
                    color: darkblue; /* warna teks */
                    text-align: center; /* penataan teks */
                    height: 20px;
                    text-transform: uppercase; /* mengubah teks menjadi huruf besar */
                    background: white; /* gradasi dari kuning ke hitam sebagai latar belakang */
                    -webkit-background-clip: text; /* untuk mendukung latar belakang berbasis teks di browser WebKit */
                    background-clip: text; /* mengatur latar belakang berbasis teks */
                    -webkit-text-fill-color: transparent; /* membuat teks asli transparan untuk mengungkapkan latar belakang */
                }
                </style>
        <!--Logo-->
        <div class="col-sm-3 pl-0 text-center" style="background: #FFCB0F; height:60px;"> 
           <div class=" mr-3 mb-0 mt-10 mb-10 " style="display: flex; align-items: center; margin-bottom:10px">
           <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="margin-left:25px; margin-top:5px; width: 50px; height: 50px; object-fit: cover; margin-right: 10px; padding: 0;">
        
           <h3>SIPJAKIKBB</h3>
           
           </div>
        </div>

        <!--Logo-->
        
        <!--Header Menu-->
        <div class="col-sm-9 header-menu pt-2 pb-0">
            <div class="row">
                
                <!--Menu Icons-->
                
                <span class="menu-icon" onclick="toggle_sidebar()">
                    <span id="sidebar-toggle-btn"></span>
                </span>
                <div class="col-sm-4 col-8 pl-0">
                    <!--Toggle sidebar-->
                    <!--Toggle sidebar-->
                    <!--Notification icon-->
                    <style>
                        .notification-container {
                            position: relative; /* Establish positioning context */
                            display: inline-block; /* Keep it inline with other elements */
                        }
                    
                        .badge-notif {
                            background-color: red; /* Red background */
                            color: white; /* White text */
                            padding: 2px 5px; /* Small padding */
                            border-radius: 5px; /* Rounded corners */
                            font-size: 0.7em; /* Smaller font size */
                            position: absolute; /* Position relative to the container */
                            top: 0; /* Align to the top */
                            right: 0; /* Align to the right */
                            transform: translate(10%, -50%); /* Adjust position slightly for better visibility */
                            animation: blink 1.5s infinite; /* Apply blink animation */
                        }
                    
                        @keyframes blink {
                            0%, 100% {
                                opacity: 1; /* Fully visible */
                            }
                            50% {
                                opacity: 0.5; /* Half visible */
                            }
                        }
                    </style>
                    
                    <div class="menu-icon">
                        <div class="notification-container">
                            <a style="margin-right: 10px; background: white; color: black; transition: background 0.3s, color 0.3s;" 
                               href="#" 
                               onclick="toggle_dropdown(this); return false" 
                               role="button" 
                               onmouseover="this.style.background='black'; this.style.color='white';" 
                               onmouseout="this.style.background='white'; this.style.color='black';">
                                <i class="fa fa-user"></i>
                                <span class="badge-notif">3</span>
                            </a>
                        </div>
                    
                        

                        
                        
                        
                        
                            
                             
                            
                            
                            
                            
                     </div>
                    <!--Notication icon-->



                    <!--Inbox icon-->
                    <!-- <span class="menu-icon">
                        <i class="fa fa-th-large"></i>
                    </span> -->
                    </div>


                    <style>
        .marquee-container {
            width: 250px;
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
            border: 1px solid #000;
            width: 375px;
            padding: 5px 10px;
            margin-top: 2.5px;
            margin-bottom: 2px;
            margin-left: 150px;
            margin-right: 15px;
            border-radius: 20px;
            background: #00008b;
            
        }
        .marquee {
            display: inline-block;
            padding-left: 100%;
            animation: marquee 15s linear infinite;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(-100%);
            }
        }
    </style>
     <div class="marquee-container">
        <div class="marquee" style="color: white">Selamat Datang ! di Halaman Admin Sistem Informasi Pembina Jasa Konstruksi Pemerintah Kabupaten Bandung Barat Anda Adalah <?php echo e($user->username); ?>  </div>
    </div>
    
                
                <!--Menu Icons-->

                            
                        
                            
                            <style>
                                .logout-button {
                                    border: none; /* Menghilangkan border */
                                    outline: none; /* Menghilangkan outline */
                                    background: transparent; /* Atur background menjadi transparan */
                                    cursor: pointer; /* Mengubah kursor menjadi pointer */
                                }
                            </style>
                            
                            <div class="menu-icon">
                                <form action="/logout" method="POST" class="dropdown-item" style="border: none; background: transparent; padding: 0; margin: 0;">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="logout-button" 
                                        onmouseover="this.style.background='red'; this.style.color='white';" 
                                        onmouseout="this.style.background='white'; this.style.color='black';">
                                        <i class="fa fa-sign-out"></i>
                                        
                                    </button>
                                </form>
                            </div>
                            
            </div>    

                
        
        </div>
        <!--Header Menu-->
    </div>
    <!--Header-->

    <!-- Tambahkan jQuery (pastikan Anda menyertakan jQuery di proyek Anda) -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function() {
    var header = $(".header");

    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) { // Ubah nilai 100 sesuai dengan ketinggian yang Anda inginkan sebelum header tetap
            header.addClass("header-fixed");
        } else {
            header.removeClass("header-fixed");
        }
    });
});
</script>


<script>

    // Contoh menggunakan Google Analytics Reporting API v4
fetch('https://analytics.googleapis.com/v4/reports:batchGet', {
    method: 'POST',
    headers: {
        'Authorization': 'Bearer YOUR_ACCESS_TOKEN',
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        "reportRequests": [{
            "viewId": "YOUR_VIEW_ID",
            "dateRanges": [{
                "startDate": "30daysAgo",
                "endDate": "today"
            }],
            "metrics": [{
                "expression": "ga:users" // Jumlah pengguna
            }]
        }]
    })
})
.then(response => response.json())
.then(data => {
    const totalVisitors = data.reports[0].data.totals[0].values[0];
    document.getElementById('visitorCount').innerText = totalVisitors;
})
.catch(error => console.error('Error fetching data:', error));

</script><?php /**PATH D:\01. SIPJAKI KABUPATEN BANDUNG BARAT\APLIKASI\sipjakikbbpermen\resources\views/backend/00_dashboard/part/menuheader.blade.php ENDPATH**/ ?>