@extends('layouts.main')
@section('content')

<main>
    <div class="blu_section mb-2"></div>

    {{-- descrizione e prezzo --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-9">
                <h1>{{$elem['title']}}</h1>

                <div class="row price_area">
                    <div class="col-lg-8 price_section">
                        <h4 class="my_clr_green">U.S. Price <p class="text-white d-inline">{{$elem['price']}}</p></h4>
                        <h4 class="my_clr_green">AVAILABLE</h4>
                        
                    </div>
                    <div class="col-lg-4 available_section">
                        <h4> <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Check Availability
                        </a></h4>
                    </div>
                </div>

                <h5 class="text-secondary">{{$elem['description']}}</h5>
            </div>

            <div class="col-lg-3">
                <h5>ADVERTISEMENT</h5>
                <div class="adv_section"
                style="background-image: url({{ asset('/storage/assets/adv.jpg') }})">
                </div>               
            </div>
        </div>
    </div>

    {{-- informazioni varie --}}


    <div class="info_area">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <h3 class="mt-3 mb-3">Talent</h3>
                    <hr>
                    <h5>Art By: 
                        <p class="text-primary d-inline">
                            @foreach ($elem['artists'] as $art)
                            {{$art}}                                
                            @endforeach
                        </p>
                    </h5>
                    <hr>
                    <h5>Writen by: 
                        <p class="text-primary d-inline">
                            @foreach ($elem['writers'] as $wrt)
                            {{$wrt}}                                
                            @endforeach
                        </p>
                    </h5>                    
                </div>

                <div class="col-lg-6">
                    <h3 class="mt-3 mb-3">Specs</h3>
                    <hr>

                    <h5>Series:
                    <p class="text-primary d-inline">
                            {{$elem['series']}}
                    </p> 
                    </h5>
                    <hr>

                    <h5>U.S. Price: {{$elem['price']}}</h5>
                    <hr>

                    <h5>On Sale Date: {{$elem['sale_date']}}</h5>

                </div>
            </div>
        </div>
    </div>


    <div class="container mb-5">
        <div class="row justify-content-center">
            <a class="btn btn-primary" href="{{route('home')}}" role="button">TORNA ALLA HOME</a>
        </div>
    </div>

</main>






@endsection
