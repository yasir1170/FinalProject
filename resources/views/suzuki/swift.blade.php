<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 80%;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }
        .container h1 {
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
        }
        .container h2 {
            font-size: 24px;
            color: #007bff; /* Blue color */
        }
        .container p {
            font-size: 16px;
            margin: 20px 0;
        }
        .container img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }
        .container a {
            display: block;
            margin: 20px auto;
            background-color: #1aff00;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><b>SUZUKI SWIFT</b></h1>
        <h2>Available Parts</h2>
        <p>Click on the item name to proceed further</p>
        <img src="/assets/images/swift/Swift.webp" alt="img"><br>      
        <a href="{{ route('swift_fws') }}" class="btn btn-primary btn-sm">Windshield Front</a>
        <a href="{{ route('swift_rws') }}" class="btn btn-primary btn-sm">Windshield Rear</a>
        <a href="{{ route('swift_fb') }}" class="btn btn-primary btn-sm">Front Bumper</a>
        <a href="{{ route('swift_rb') }}" class="btn btn-primary btn-sm">Rear Bumper</a>
        <a href="{{ route('swift_of') }}" class="btn btn-primary btn-sm">Oil Filter</a>
        <a href="{{ route('swift_bp') }}" class="btn btn-primary btn-sm">Brake Pads</a>
    </div>
</body>
</html>