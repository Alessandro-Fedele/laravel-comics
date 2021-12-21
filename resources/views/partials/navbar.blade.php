@php
$linkNav = [
[
"linkText" => "Characters",
"href" => "homepage.index"
],
[
"linkText" => "Comics",
"href" => "comics"
],
[
"linkText" => "Movies",
"href" => "pages.index"
],
[
"linkText" => "TV",
"href" => "pages.index"
],
[
"linkText" => "Games",
"href" => "pages.index"
],
[
"linkText" => "Collectibles",
"href" => "pages.index"
],
[
"linkText" => "Videos",
"href" => "pages.index"
],
[
"linkText" => "Fans",
"href" => "pages.index"
],
[
"linkText" => "News",
"href" => "pages.index"
],
[
"linkText" => "Shop",
"href" => "pages.index"
],
];

$routeName = Request::route()->getName();
@endphp

<header>
    <div class="container-fluild top">
        <div class="container text-end">
            <a href="#">DC POWER VISA</a>
            <a href="#">ADDITIONAL DC SITES</a>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{asset('images/dc-logo.png')}}" alt="Dc-logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    @foreach ($linkNav as $link)
                    <li class="nav-item">
                        <a class="nav-link {{ $routeName === $link['href'] ? 'active' : ''}}" href="{{ route($link['href']) }}">{{ $link['linkText'] }}</a>
                    </li>
                    @endforeach
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
</header>