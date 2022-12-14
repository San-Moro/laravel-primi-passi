<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        header {
            width: 100%;
            height: 100px;
            background-color: gray;
        }
        header a {
            color: white;
            text-decoration: none;
            text-transform: uppercase;
            padding-left: 1em;
        }
    </style>
</head>
<body>
    <header class="d-flex align-items-center mb-4">
        <div class="container d-flex justify-content-end">
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('about') }}">About</a>
            <a href="{{ route('services') }}">Services</a>
            <a href="{{ route('contacts') }}">Contacts</a>
        </div>
    </header>
    <main>
        <div class="container">
            <h1>{{ $pageTitle }}</h1>
            <p>{{ $description }}</p>
        </div>
    </main>
</body>
</html>