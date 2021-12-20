@php
$buyCards = [
[
"text" => "Digital Comics",
"imgUrl" => "images/buy-comics-digital-comics.png"
],
[
"text" => "Dc Merchandise",
"imgUrl" => "images/buy-comics-merchandise.png"
],
[
"text" => "Subscription",
"imgUrl" => "images/buy-comics-subscriptions.png"
],
[
"text" => "Comic Shop Locator",
"imgUrl" => "images/buy-comics-shop-locator.png"
],
[
"text" => "dc Power Visa",
"imgUrl" => "images/buy-dc-power-visa.svg"
],
]
@endphp

<div class="container-fluid blue-bar">
    <div class="container">
        <div class="my-card-container">
            @foreach ($buyCards as $card)
            <div class="my-card">
                <img src="{{ asset($card['imgUrl']) }}" alt="{{ $card['text'] }}" />
                <span>{{ $card['text'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</div>