<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Confirm Account</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 50px 20px;
        }

        img {
            margin-bottom: 20px;
        }

        h2 {
            color: #007BFF;
            margin-bottom: 10px;
        }

        h1 {
            margin-bottom: 20px;
            font-size: 1.5rem;
        }

        p {
            max-width: 500px;
            text-align: center;
            margin-bottom: 30px;
            line-height: 1.5;
        }

        a.confirm-btn {
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }

        a.confirm-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <img src="{{ asset('logo.png') }}" alt="logo" width="100" height="100">
    <h2>Confirm Your Account</h2>
    <h1>Hello {{ $last_name }}</h1>
    <p>
        Thank you for creating an account with us.

Please confirm your email address by clicking the button below:

If you did not create this account, you can safely ignore this email.

Best regards,
The Team
    </p>
    <a href="{{ $href }}" class="confirm-btn">Confirm Your Email</a>
</body>
</html>
