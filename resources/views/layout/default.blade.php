<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("page_title")</title>
    @include("partials.header_scripts")
</head>

<body>
    @include("partials.navbar")
    <main>
        @include("partials.jumbotron")
        @yield("content")
        @include("partials.blue_bar")
    </main>
    <footer>
        @include("partials.footer_link")
        @include("partials.footer_social")
    </footer>
</body>

</html>