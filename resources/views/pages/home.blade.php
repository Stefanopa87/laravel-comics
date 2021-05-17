@extends('layouts.main')
@section('content')
<main>
    <div class="cards_area">
        <div class="container">
            <div class="row">
                @foreach ($data as $elem)
                    <div class="col-lg-2">
    
                        <div class="card">
                            <img src="{{$elem['thumb']}}" alt="">
                            <p>{{$elem['title']}}</p>
                        </div>
                            
                    </div>
                @endforeach
        
        
        
            </div>
        </div>
    </div>

    <div class="sponsors_area">

        <div class="container">
            <div class="row justify-content-between">
                <a href="">
                    <img src="{{ asset('/storage/assets/buy-comics-digital-comics.png') }}" alt="" height="70px">
                    DIGITAL COMICS
                </a>
                <a href="">
                    <img src="{{ asset('/storage/assets/buy-comics-merchandise.png') }}" alt="" height="70px">
                    DC MERCHANDISE
                </a>
                <a href="">
                    <img src="{{ asset('/storage/assets/buy-comics-subscriptionS.png') }}" alt="" height="70px">
                    SUBSCRIPTION
                </a>
                <a href="">
                    <img src="{{ asset('/storage/assets/buy-comics-shop-locator.png') }}" alt="" height="70px">
                    COMIC SHOP LOCATOR
                </a>
                <a href="">
                    <img src="{{ asset('/storage/assets/buy-dc-power-visa.svg') }}" alt="" height="50px">
                    DC POWER VISA
                </a>
            </div>
        </div>
    </div>
</main>



@endsection
