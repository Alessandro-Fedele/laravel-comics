<div class="container-fluid  comics-section">
    <div class="container">
        <div class="row row-cols-2 row-cols-md-6 g-4">
            @foreach ($comics as $comic)
            <div class="col">
                <a class="card" href="{{ route('comics.details', ['id' => $loop->index]) }}">
                    <img src="{{ $comic['thumb']}}" class="card-img-top" alt="{{$comic['series']}}">
                    <h3>{{$comic['series']}}</h3>
                    <div class="overlay">
                        <p>{{$comic['title']}}</p>
                        <p>{{$comic['price']}}</p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="current-series">
            <button>Current Series</button>
        </div>
        <div class="btn-container">
            <button>Load More</button>
        </div>
    </div>
</div>