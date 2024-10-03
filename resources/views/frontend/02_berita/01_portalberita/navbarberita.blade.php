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

{{-- ======================================================================================================================= --}}
{{-- ======================================================================================================================= --}}
   



    <!-- Main News Slider Start -->
    <div class="container-fluid" style="margin-top:188px;">
        <div class="row">
            <div class="col-lg-7 px-0">
                <div class="owl-carousel main-carousel position-relative">
                  
                    @foreach ($data as $item )
                        
                    
                    <div class="position-relative overflow-hidden" style="height: 500px;">
                        <a href="/portalberita/{{ $item->judul}}">
                            <img class="img-fluid h-100" src="{{asset('storage/' . $item->gambar ) }}" style="object-fit: cover;">
                        </a>
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                                href="/portalberita/{{ $item->judul}}">News</a>
                                {{-- <a class="text-white" href="">Jan 01, 2045</a> --}}
                            </div>
                            <a class="h2 m-0 text-white text-uppercase font-weight-bold" style="font-size: 24px;" href="/portalberita/{{ $item->judul}}">{{ $item->judul }}</a>
                        </div>
                    </div>
                    
                    
                    @endforeach
                    


                </div>
            </div>
            <div class="col-lg-5 px-0">
                <div class="row mx-0">
                    @foreach ($data->slice(-4) as $item)
        
                        <div class="col-md-6 px-0">
                            <a href="/portalberita/{{$item->judul}}">

                                <div class="position-relative overflow-hidden" style="height: 250px;">
                                    <img class="img-fluid w-100 h-100" src="{{asset('storage/' . $item->gambar ) }}" style="object-fit: cover;">
                                    <div class="overlay">
                                    <div class="mb-2">
                                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="/portalberita/{{$item->judul}}">News</a>
                                        {{-- <a class="text-white" href=""><small>Jan 01, 2045</small></a> --}}
                                    </div>
                                    <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/portalberita/{{$item->judul}}">{{ $item->judul }}</a>
                                </div>
                            </a>

                            </div>
                        </div>
                    @endforeach

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
                            @foreach ($data as $item)
                            <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="/portalberita/{{$item->judul}}">{{$item->judul}}</a></div>
                            @endforeach
                        </div>
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid pt-5 mb-5">
        <div class="container">
            <div class="section-title">
                <h4 class="m-0 text-uppercase font-weight-bold">news</h4>
            </div>
            <div class="owl-carousel news-carousel carousel-item-4 position-relative">


                @foreach ( $data as $item )
                    
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid h-100" src="{{asset('storage/' . $item->gambar ) }}" style="object-fit: cover; padding:10px;">
                    <div class="overlay">
                        <div class="mb-2">
                            {{-- <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                            href="">{{ $item->judul}}</a> <br> --}}
                            {{-- <a class="text-white" href=""><small>{{ $item->keterangan}}</small></a> --}}
                        </div>
                        <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="/portalberita/{{$item->judul}}">{{$item->judul}}</a>
                    </div>
                </div>
                
                @endforeach

            </div>
        </div>
    </div>

    <br>
{{-- <p>fjnfdjbnf</p> --}}
        
    </section>


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}


  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
   
    {{-- ------------------------------------------------------------------------------ --}}
    {{-- ------------------------------------------------------------------------------ --}}
    {{-- ------------------------------------------------------------------------------ --}}

    {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}
  {{-- ------------------------------------------------------------------------------------------ --}}

    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}





@include('frontend.00_atas.footer1')

    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
    {{-- ------------------------------------------------------------------------------- --}}
@include('frontend.00_atas.footer2')