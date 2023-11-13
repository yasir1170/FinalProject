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
        .container button {
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

          /* Modal styles */

          .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1;
            text-align: center;
            padding: 10px;
        }
        
        .modal-content {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            display: inline-block;
            text-align: center;
            max-width: 400px; /* Set a maximum width for the modal content */
            margin: 50px auto; /* Center the modal vertically */
        }
        
        .modal-content img {
            max-width: 100%;
        }
        
        .modal-content p {
            font-size: 16px;
            margin: 20px 0;
        }
        .modal-content button {
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
        <h1><b>TOYOTA COROLLA</b></h1>
        <h2 id="itemTitle">Brake Pads</h2>
        <p>ASUKI Advanced technology disc brake pads</p>
        <img src="/assets/images/corolla/brakeshoe-corolla.jpg" alt="img"><br>
        <button id="buyButton">Buy It</button>
    </div>

     <!-- Modal dialog -->
     <div id="purchaseModal" class="modal">
        <div class="modal-content">
            <img src="/assets/images/corolla/brakeshoe-corolla.jpg" alt="img"><br>
            <p id="confirmationMessage">Are you sure you want to purchase this item?</p>
            <button id="confirmPurchase">Confirm</button>
            <button id="cancelPurchase">Cancel</button>
        </div>
    </div>

    <script>
        const itemTitle = document.getElementById('itemTitle');
        const purchaseModal = document.getElementById('purchaseModal');
        const confirmationMessage = document.getElementById('confirmationMessage');
        const confirmPurchase = document.getElementById('confirmPurchase');
        const cancelPurchase = document.getElementById('cancelPurchase');

        document.getElementById('buyButton').addEventListener('click', function() {
            confirmationMessage.textContent = 'Are you sure you want to purchase ' + itemTitle.textContent + '?';
            purchaseModal.style.display = 'block';
        });

        confirmPurchase.addEventListener('click', function() {
            // Handle the purchase logic here
            // window.location.href = '/purchase/' + itemTitle.textContent;
            purchaseModal.style.display = 'none';// this line closes the dialog box when confirm button is pressed
        });

        cancelPurchase.addEventListener('click', function() {
            purchaseModal.style.display = 'none';// this line closes the dialog box when cancel button is pressed
        });
    </script>
</body>
</html>