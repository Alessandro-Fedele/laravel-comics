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
            <span>ADVERTISEMENT</span>
            <img src="{{asset('images/advertisement.jpg')}}" alt="adv">
        </div>
    </div>
    <div class="">
        <div class="row">
            <div class="col col-6">
                <div>
                    <h2>Talent</h2>
                </div>
                <div class="d-flex">
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
                <div class="d-flex">
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
                <div>
                    <h2>Specs</h2>
                </div>
                <div class="d-flex">
                    <div>Series:</div>
                    <div>
                        <a href="#">
                            {{ $comic["series"] }}
                        </a>
                    </div>
                </div>
                <div class="d-flex">
                    <div>U.S. Price:</div>
                    <div>
                        {{ $comic["price"] }}
                    </div>
                </div>
                <div class="d-flex">
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