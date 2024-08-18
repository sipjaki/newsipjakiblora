<div class="section-title">
    <h4 class="m-0 text-uppercase font-weight-bold">
        <img src="/assets/icon/sipjakikbb.png" alt="/assets/icon/sipjakikbb.png" style="width:40px;">
        Layanan Kami</h4>
</div>

<div class="owl-carousel news-carousel carousel-item-4 position-relative">

    @foreach ( $data_layanankami as $item )
        
    <div class="position-relative overflow-hidden" style="height: 300px;">
        <a href="/">
            <img class="img-fluid h-300" src="{{$item->gambar}}" style="object-fit: cover; padding:10px; cursor:pointer">
            <div class="overlay">
                <div class="">
                    <button class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2"
                    href="/">{{ $item->program}}</button> <br>
                    <p class="text-white" href=""><small>{{$item->keterangan}}</small></p>
                </div>
                {{-- <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="">Lorem ipsum dolor sit amet elit...</a> --}}
            </div>
        </a>
    </div>
    
    @endforeach

    
</div>
