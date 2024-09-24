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