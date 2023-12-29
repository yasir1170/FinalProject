<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Yasir Autos</title>
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
            max-width: 100%;
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
            color: #007bff;
            /* Blue color */
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

        .dropdown {
            float: right;
            margin-right: 30px;

        }

        .btn {
            border: 0px;
            margin: 10px 0px;
            box-shadow: none !important;
        }

        .dropdown .dropdown-menu {
            padding: 20px;
            top: 30px !important;
            width: 350px !important;
            left: -110px !important;
            box-shadow: 0px 5px 30px black;
        }

        .cart-detail {
            padding: 15px 0px;
        }

        .cart-detail-img img {
            width: 100%;
            height: 100%;
            padding-left: 15px;
        }

        .cart-detail-product p {
            margin: 0px;
            color: #000;
            font-weight: 500;
        }

        .cart-detail .price {
            font-size: 12px;
            margin-right: 10px;
            font-weight: 500;
        }

        .cart-detail .count {
            color: #000;
        }

        .checkout {
            border-top: 1px solid #d2d2d2;
            padding-top: 15px;
        }

        .checkout .btn-primary {
            border-radius: 50px;

        }

        .dropdown-menu:before {
            content: " ";
            position: absolute;
            top: -20px;
            right: 50px;
            border: 10px solid transparent;
            border-bottom-color: #fff;
        }

        .productlist {
            box-shadow: 0px 10px 30px rgb(0 0 0 / 10%);
            border-radius: 10px;
            height: 100%;
            overflow: hidden;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-end mb-3">
            <form action="{{ route('search') }}" method="GET" class="form-inline">
                <div class="form-group">
                    <input type="text" name="query" class="form-control" placeholder="Search Parts">
                </div>
                <button type="submit" class="btn btn-primary ml-2">Search</button>
            </form>
        </div>
        <div class="row">

            <div class="col-lg-12 col-sm-12 col-12">
                <div class="dropdown">
                    <button type="button" class="btn btn-primary" data-toggle="dropdown">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart 
                        <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            
                    </button>

                    <div class="dropdown-menu">
                        <div class="row total-header-section">
                            @php $total = 0 @endphp
                            @foreach ((array) session('cart') as $id => $details)
                                @php $total += $details['price'] * $details['quantity'] @endphp
                            @endforeach
                            <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                                <p>Total: <span class="text-info">Rs. {{ $total }}</span></p>
                            </div>
                        </div>
                        @if (session('cart'))
                            @foreach (session('cart') as $id => $details)
                                <div class="row cart-detail">
                                    <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                        <img src="{{ $details['photo'] }}" />
                                    </div>
                                    <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                        <p>{{ $details['product_name'] }}</p>
                                        <span class="price text-info"> ${{ $details['price'] }}</span> <span
                                            class="count">
                                            Quantity:{{ $details['quantity'] }}</span>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                            </div>
                        </div>
                    </div>
                </div>

                <h1><b>Yasir Autos</b></h1>
                <h2>Available Parts</h2>
                <p>We carry the limited stocks of all parts</p>
                <div class="row">
                    @foreach ($data as $part)
                        <div class="col-xs-18 col-sm-6 col-md-4" style="margin-top:10px;">
                            <div class="img_thumbnail productlist">
                                <img src="{{ $part->photo }}" class="img-fluid">
                       
                                <div class="caption">
                                    <h4>{{ $part->parts_name }}</h4>
                                    <p>{{ $part->parts_description }}</p>
                                    <p><strong>Price: </strong> Rs{{ $part->price }}</p>
                        
                                    @if($part->stock_qty > 0)
                                        <p class="btn-holder">
                                            <a href="{{ route('add_to_cart', $part->id) }}" class="btn btn-primary btn-block text-center" role="button">
                                                Add to cart
                                            </a>
                                        </p>
                                    @else
                                        <p class="btn-holder">
                                            <button class="btn btn-danger btn-block text-center" disabled>
                                                Out of Stock
                                            </button>
                                        </p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>


    <div class="container">
        @if (session('success'))
            <div class="alert alert-success" id="alert-div">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
    @yield('scripts')

</body>

</html>
