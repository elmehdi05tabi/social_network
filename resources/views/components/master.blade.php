<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Social Network | {{$title}}</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        @include('parties.nav')
    </header>
    @include('parties.flashbag')
    <section>
        {{$slot}}
    </section>
    @include('parties.footer')
</body>
</html>