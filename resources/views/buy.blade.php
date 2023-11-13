<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <div class="container">
        <h1><b>HONDA CIVIC</b></h1>
        <h2>Front Bumper</h2>
        <p>ASUKI Advanced technology disc brake pads</p>
        <img src="/assets/images/civic/honda-civic-front-bumper.webp" alt="img"><br>
        <button id="buyButton">Buy It</button>
    </div>

    <script>
        document.getElementById('buyButton').addEventListener('click', function() {
            if (confirm('Are you sure you want to purchase this item?')) {
                // Handle the purchase logic here, e.g., redirect to a purchase page
                // window.location.href = '/purchase'; // Update the URL accordingly
            }
        });
    </script>
</body>
</html>
