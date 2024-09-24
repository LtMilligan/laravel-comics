<main>
    <div class="bg-jumbotron position-relative">
        <span class="badge position-absolute rounded-0">CURRENT SERIES</span>
    </div>
    @include('layout.partials.comics')
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