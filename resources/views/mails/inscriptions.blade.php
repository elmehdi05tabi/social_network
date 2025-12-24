<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <img src="{{ asset("logo.png") }}" alt="logo" width="100px" height="100px">
    <h2>Confirme Your Account</h2>
    <h1>Hello{{ $last_name }} / {{$email }} </h1>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex excepturi provident repellat commodi a. Ex, assumenda. Eos placeat iste magnam.
    </p>
    <a href="{{$href}}" style="background:blue;text-transform:none;color:white;padding:5px">Confirm Your Email</a>
</body>
</html>