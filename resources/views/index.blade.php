<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>youneedthis</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav class="d-flex flex-column justify-content-center align-items-center choose-application">

        <div class="img-fluid mb-4">
            <img class="logo" src="{{ asset('images/logo.png') }}" alt="logo">
        </div>

        <a href="{{ route('categories') }}" class="text-lg text-uppercase">knowledge</a>
        <a class="text-lg text-uppercase">messager</a>

        <div class="d-flex mt-4">
            <div class="text-sm text-uppercase">
                login via
            </div>
            <div class="git">
                <img src="{{ asset('images/git.svg') }}" alt="git">
            </div>
        </div>

    </nav>
</body>
</html>
