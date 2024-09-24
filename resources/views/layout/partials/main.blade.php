<main>
    <div class="bg-jumbotron position-relative">
        <span class="badge position-absolute rounded-0">CURRENT SERIES</span>
    </div>
    <div class="bg-grey p-5">
        <div class="container">
            <div class="row content-grey d-flex">
                @foreach ($comics as $comic)
                    <div class="col-2 d-flex">
                        <div class="card border-0 bg-transparent w-100 mx-3">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}" class="card-img-top img-fluid">
                            <div>
                                <h5 class="text-white text-center pt-2">{{ $comic['series'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="text-center">
                    <button class="btn btn-primary w-auto px-5 rounded-0"><strong>LOAD MORE</strong></button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-primary p-5">
        <div class="container">
            <div class="row content-primary justify-content-between">
                <div class="col">
                    <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="digital-comics">
                    <p>DIGITAL COMICS</p>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="merch">
                    <p>DC MERCHANDISE</p>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="sub">
                    <p>SUBSCRIPTION</p>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="locator">
                    <p>COMIC SHOP LOCATOR</p>
                </div>
                <div class="col">
                    <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="visa">
                    <p>DC POWER VISA</p>
                </div>
            </div>
        </div>
    </div>
</main>