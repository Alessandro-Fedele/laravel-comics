@extends("layout.default")

@section("page_title", "Dettagli | " . $comic["title"])

@section("content")

@php
$artists = $comic["artists"];
$writers = $comic["writers"];
@endphp
<div class="b-bar position-relative">
    <div class="position-absolute comic-img">
        <img src="{{ $comic['thumb']}}" alt="{{$comic['series']}}">
    </div>
</div>
<div class="container detail-cont">
    <div class="row">
        <div class="col col-7">
            <h1>{{ $comic["title"] }}</h1>
            <div>
                <h6>U.S. Price: {{ $comic["price"] }}</h6>
            </div>
            <div>
                <p>{{ $comic["description"] }}</p>
            </div>
        </div>
        <div class="col col-5 text-end">
            <h6>ADVERTISEMENT</h6>
            <img src="{{asset('images/advertisement.jpg')}}" alt="adv">
        </div>
    </div>
</div>
<div class="grey-cont">
    <div class="container">
        <div class="row">
            <div class="col col-6">
                <div class="bbg pb-4">
                    <h2>Talent</h2>
                </div>
                <div class="d-flex bbg py-2">
                    <div>Art by:</div>
                    <div>
                        @foreach ($artists as $artist)
                        <span>
                            <a href="#">
                                {{$artist}}
                            </a>,
                        </span>
                        @endforeach
                    </div>
                </div>
                <div class="d-flex bbg py-2">
                    <div>Written by:</div>
                    <div>
                        @foreach ($writers as $writer)
                        <span>
                            <a href="#">
                                {{$writer}}
                            </a>,
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col col-6">
                <div class="bbg pb-4">
                    <h2>Specs</h2>
                </div>
                <div class="d-flex bbg py-2">
                    <div>Series:</div>
                    <div>
                        <a href="#">
                            {{ $comic["series"] }}
                        </a>
                    </div>
                </div>
                <div class="d-flex bbg py-2">
                    <div>U.S. Price:</div>
                    <div>
                        {{ $comic["price"] }}
                    </div>
                </div>
                <div class="d-flex bbg py-2">
                    <div>On Sale Date:</div>
                    <div>
                        {{ $comic["sale_date"] }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection