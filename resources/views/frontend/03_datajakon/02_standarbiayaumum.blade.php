@include('frontend.00_atas.header')


{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}

<section id="sec-0">
    
    @include('frontend.00_atas.header1')
    
        <header>
        
        @include('frontend.00_atas.header2_navbar')
            
        </header>
        <div class="div" style="
            justify-content: center;
            text-align:center;
        ">

            <h2 style="
    margin-top: 10px;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    font-size: 14px;
    margin-left: 425px;
    color: #333;
    text-transform: uppercase;
    text-align: center;
    border: 2px solid black;
    padding: 10px;
    border-radius: 25px;
    width: 500px;
    background: linear-gradient(to right, #f0f0f0, #e0e0e0);
    transition: background 0.5s ease, color 0.5s ease;
    " onmouseover="this.style.background='linear-gradient(to right, #f0f0f0, #e0e0e0)'; this.style.color='black';" onmouseout="this.style.background='linear-gradient(to right, black, yellow )'; this.style.color='white';">

Standar Biaya Umum
</h2>
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
    margin-left: 100px;
    background: linear-gradient(to bottom, yellow, white, black);
    align-items: center;
    position: relative;
">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; padding: 0; margin-top: 10px;">
<h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;">Kementrian Pekerjaan Umum Dan Penataan Ruang </h1>
    <div class="container">
        <div class="card" style="
            background-color: white;
            border-radius: 20px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 100%;
            margin: 20px auto;">
            <style>
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
        
                th, td {
                    font-family: 'Lato', sans-serif;
                    font-weight: 700;
                    color: black;
                    border: 1px solid #ddd;
                    padding: 8px;
                }
        
                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }
        
                th {
                    /* background-color: #4CAF50; */
                    /* background: linear-gradient(to bottom, #000000, #FFCB0F); */
                    background-color:  #FFCB0F;
                    color: black;
                }
            </style>
             <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun <br> Anggaran</th>
                        <th>Besaran Anggaran</th>
                        <th>No SK Standar Biaya Umum</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                {{-- @foreach ($collection as $item) --}}
                    
                {{-- @endforeach --}}
                <tbody>
                    {{-- ============================================ --}}
                    <tr>
                        <td>1</td>
                        <td>2020</td>
                        <td>Rp. -</td>
                        <td>SK -</td>
                        <td>
                            <button class="download-btn" onclick="downloadCSV()" style="
                                padding: 5px 15px;
                                background: linear-gradient(to right, #000000, #FFFF00);
                                color: white;
                                border: none;
                                font-size: 12px;
                                border-radius: 15px;
                                width: 70%;
                                cursor: pointer;
                                transition: background 0.3s, color 0.3s;"
                                onmouseover="this.style.background='linear-gradient(to right, #ffffff, #ffffff)'; this.style.color='black';"
                                onmouseout="this.style.background='linear-gradient(to right, #000000, #FFFF00)'; this.style.color='white';">
                                <i class="fas fa-download me-2"></i> Download
                            </button>
                            
                            <script>
                                function downloadCSV() {
                                    // Function to handle CSV download
                                }
                                </script>
                        </td>
                    </tr>
                    {{-- ============================================ --}}
                    
                    {{-- ============================================ --}}
                    <tr>
                        <td>2</td>
                        <td>2021</td>
                        <td>Rp. -</td>
                        <td>SK -</td>
                        <td>
                            <button class="download-btn" onclick="downloadCSV()" style="
                                padding: 5px 15px;
                                background: linear-gradient(to right, #000000, #FFFF00);
                                color: white;
                                border: none;
                                font-size: 12px;
                                border-radius: 15px;
                                width: 70%;
                                cursor: pointer;
                                transition: background 0.3s, color 0.3s;"
                                onmouseover="this.style.background='linear-gradient(to right, #ffffff, #ffffff)'; this.style.color='black';"
                                onmouseout="this.style.background='linear-gradient(to right, #000000, #FFFF00)'; this.style.color='white';">
                                <i class="fas fa-download me-2"></i> Download
                            </button>
                            
                            <script>
                                function downloadCSV() {
                                    // Function to handle CSV download
                                }
                                </script>
                        </td>
                    </tr>
                    {{-- ============================================ --}}
                    
                    {{-- ============================================ --}}
                    <tr>
                        <td>3</td>
                        <td>2022</td>
                        <td>Rp. -</td>
                        <td>SK -</td>
                        <td>
                            <button class="download-btn" onclick="downloadCSV()" style="
                                padding: 5px 15px;
                                background: linear-gradient(to right, #000000, #FFFF00);
                                color: white;
                                border: none;
                                font-size: 12px;
                                border-radius: 15px;
                                width: 70%;
                                cursor: pointer;
                                transition: background 0.3s, color 0.3s;"
                                onmouseover="this.style.background='linear-gradient(to right, #ffffff, #ffffff)'; this.style.color='black';"
                                onmouseout="this.style.background='linear-gradient(to right, #000000, #FFFF00)'; this.style.color='white';">
                                <i class="fas fa-download me-2"></i> Download
                            </button>
                            
                            <script>
                                function downloadCSV() {
                                    // Function to handle CSV download
                                }
                                </script>
                        </td>
                    </tr>
                    {{-- ============================================ --}}
                    
                    {{-- ============================================ --}}
                    <tr>
                        <td>4</td>
                        <td>2024</td>
                        <td>Rp. -</td>
                        <td>SK -</td>
                        <td>
                            <button class="download-btn" onclick="downloadCSV()" style="
                                padding: 5px 15px;
                                background: linear-gradient(to right, #000000, #FFFF00);
                                color: white;
                                border: none;
                                font-size: 12px;
                                border-radius: 15px;
                                width: 70%;
                                cursor: pointer;
                                transition: background 0.3s, color 0.3s;"
                                onmouseover="this.style.background='linear-gradient(to right, #ffffff, #ffffff)'; this.style.color='black';"
                                onmouseout="this.style.background='linear-gradient(to right, #000000, #FFFF00)'; this.style.color='white';">
                                <i class="fas fa-download me-2"></i> Download
                            </button>
                            
                            <script>
                                function downloadCSV() {
                                    // Function to handle CSV download
                                }
                                </script>
                        </td>
                    </tr>
                    {{-- ============================================ --}}
                    
                    
                    {{-- ============================================ --}}
                    <tr>
                        <td>5</td>
                        <td>2025</td>
                        <td>Rp. -</td>
                        <td>SK -</td>
                        <td>
                            <button class="download-btn" onclick="downloadCSV()" style="
                                padding: 5px 15px;
                                background: linear-gradient(to right, #000000, #FFFF00);
                                color: white;
                                border: none;
                                font-size: 12px;
                                border-radius: 15px;
                                width: 70%;
                                cursor: pointer;
                                transition: background 0.3s, color 0.3s;"
                                onmouseover="this.style.background='linear-gradient(to right, #ffffff, #ffffff)'; this.style.color='black';"
                                onmouseout="this.style.background='linear-gradient(to right, #000000, #FFFF00)'; this.style.color='white';">
                                <i class="fas fa-download me-2"></i> Download
                            </button>
                            
                            <script>
                                function downloadCSV() {
                                    // Function to handle CSV download
                                }
                                </script>
                        </td>
                    </tr>
                    {{-- ============================================ --}}
                    
                </tbody>
            </table>
        </div>
</div>
</div>



<br><br>
    </section>


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}






@include('frontend.00_atas.footer1')

    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
@include('frontend.00_atas.footer2')