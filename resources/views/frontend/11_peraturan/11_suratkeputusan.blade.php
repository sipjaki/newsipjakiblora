@include('frontend.00_atas.header')


{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}
{{-- ------------------------------------------------------------------------------------------ --}}

<section id="sec-0">
    
    <div class="div" style="z-index: 9999; position: fixed;
    top: 0; left: 0; width: 100%; z-index: 9999;
    background-color: white; border-bottom: 1px solid black; 
    ">

@include('frontend.00_atas.header1')
<header>
    
        @include('frontend.00_atas.header2_navbar')
    
</div>
</header>

<div class="div" style="
            justify-content: center;
            text-align:center;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            margin-top:165px;
        ">

            <h2 style="
    margin-top: 10px;
    font-family: 'Lato', sans-serif;
    font-weight: 700;
    font-size: 14px;
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

Surat Keputusan Tentang Jasa Konstruksi
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
    height: 135vh;
    background: linear-gradient(to bottom, yellow, white, white);
    align-items: center;
    position: relative;
">
  <div style="display: flex; align-items: center;">
    <img src="/assets/icon/pupr.png" alt="Logo SIPJAKIKBB" style="width: 50px; height: 50px; object-fit: cover; margin: 0 10px;">
    <img src="/assets/icon/sipjakikbb.png" alt="Logo SIPJAKIKBB" style="width: 70px; height: 70px; object-fit: cover; margin: 0 10px;">
</div>


    <h1 style="margin-top:10px; font-size: 16px; font-family: 'Lato', sans-serif; font-weight: 700;">Kementrian Pekerjaan Umum Dan Perumahan Rakyat </h1>
    <div class="container" style="margin-top: 20px;">
    <style>
        .pdf-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            width: 80%;
            height: 85vh;
            margin: auto;
            border: 1px solid black;
            border-radius: 25px;
            overflow: hidden;
            background-color: #FFCB0F;
            background: linear-gradient(to bottom, yellow, white, black);
        }
        .pdf-frame {
            width: 100%;
            height: 100%;
            border: none;
        }
        .badgedownload {
                background: linear-gradient(to right, navy, black);
                color: white;
                padding: 10px 20px;
                border-radius: 10px;
                display: inline-block;
                font-size: 1rem;
                text-align: center;
                font-size: 12px;
                margin-top: 20px;
                margin-left: 500px;
                transition: background-color 0.3s, color 0.3s;
                margin-left: 225px;
                cursor: pointer;
             
            }
    
            .badgedownload:hover {
                background-color: white;
                color: black;
                background: white;
            }

    </style>

    

<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        font-family: 'Lato', sans-serif;
        font-weight: 700;
        color: black;
        font-size: 12px;
        border: 1px solid #ddd;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
        font-size: 12px;
    }

    th {
        /* background-color: #4CAF50; */
        /* background: linear-gradient(to bottom, #000000, #FFCB0F); */
        background-color:  #FFCB0F;
        color: black;
        font-size: 14px;
    }
</style>
 <table>
    <thead>
        <tr>
            <th style="width:45px;">No</th>
            <th>Judul</th>
            
            <th style="width: 100px;">View Dokumen</th>
        </tr>
    </thead>
    <tbody>

        {{-- ============================================ --}}
        @php
    $start = ($data->currentPage() - 1) * $data->perPage() + 1;
        @endphp

        @foreach($data as $item )
        
        <tr>
            <td style="font-size: 12px;">{{ $loop->iteration + $start - 1 }}</td>
            <td style="font-size: 12px; text-align:left;">{{ $item->judul}}</td>
            
            <td>
                
            <style>
                                    /* Container for the buttons */
        .button-container {
            display: flex;
            gap: 10px; /* Space between icons */
            justify-content: center; /* Center the icons horizontally */
        }

        /* Style for the individual buttons */
        .iconhover {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 25px; /* Adjust width as needed */
            height: 25px; /* Adjust height as needed */
            background: black; /* Yellow background */
            color: white; /* Text color */
            border: none;
            border-radius: 50%;
            text-decoration: none;
            padding: 3px 3px;
            font-size: 15px; /* Adjust font size as needed */
            transition: background 0.3s, color 0.3s;
            cursor: pointer;
        }

        .iconhover:hover {
            background: white; /* White background on hover */
            color: black; /* Black text color on hover */
        }

        .iconhover i {
            margin: 0;
        }
        
            </style>

            <div class="button-container">
            <a href="/peraturan/suratkeputusan/{{$item->judul}}" class="iconhover" title="View">
                <i class="fas fa-eye"></i>
            </a>
                  
                </div>

                <script>
                    function downloadCSV() {
                        // Function to handle CSV download
                    }
                    </script>
            </td>
        </tr>
        @endforeach
        {{-- ============================================ --}}
        
        
    </tbody>
</table>


</div>


<style>

    .page-item {
        display: inline-block;
    }
    
    .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: white;
        background: navy;
        border: 1px solid #dee2e6;
        font-size: 12px;
        border-radius: 5px;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .page-link:hover {
        background: white;
        color: black;
        border-color: black;
    }
    
    .page-link2:hover {
        background: white;
        color: black;
        border-color: black;
    }
    
    .page-item.disabled .page-link {
        pointer-events: none;
        opacity: 0.5;
    }
    
    </style>
    
    
    
    <div class="pagination-container" style="margin-top: 25px; margin-bottom: 200px; display: flex; flex-direction: column; align-items: center;">
        <div class="pagination-info mb-2" style="margin-bottom: 100px; color: black; font-weight: 500;">
            Data Ke {{ $data->firstItem() }} Sampai {{ $data->lastItem() }} Dari {{ $data->total() }} Jumlah {{$title}}
        </div>
        <ul class="pagination-paginate" style="display: flex; padding-left: 0; list-style: none; margin-top: 10px;">
            <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}" style="margin-right: 5px;">
                <a class="page-link" href="{{ $data->previousPageUrl() }}">
                    <i class="fas fa-arrow-left" style="margin-right: 10px;"></i>Previous
                </a>
            </li>
            <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}" style="margin-right: 5px;">
                <a class="page-link" href="{{ $data->nextPageUrl() }}">
                    Next <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
                </a>
            </li>
        </ul>
    </div>
    

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