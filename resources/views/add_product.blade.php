<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .account-container {
            margin-top: 60px;
        }
        .form-container {
            background: #fff;
            padding: 50px;
            border-radius: 16px;
            box-shadow: 0 0 100px rgba(0,0,0,0.05);
        }
        .form-btn span {
            font-weight: 600;
            color: #333;
            font-size: 1.2rem;
        }
        .form-btn hr {
            margin-top: 5px;
            height: 3px;
            border: none;
            background: #007bff;
        }
        .form-container input {
            margin-bottom: 15px;
        }
        .btn-primary {
            width: 100%;
        }
        img {
            max-width: 100%;
        }
        .admin-header {
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            padding: 20px 0;
            margin-bottom: 30px;
        }
        .admin-header .nav-link {
            color: #333;
            font-weight: 500;
            margin-right: 20px;
            transition: color 0.2s;
        }
        .admin-header .nav-link:hover {
            color: #007bff;
        }
        .admin-header .btn-danger {
            margin-left: 20px;
        }
    </style>
</head>
<body>
    <nav class="admin-header navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Admin Panel</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Storage</a>
                    </li>
                </ul>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container account-container">
        <div class="row justify-content-center align-items-center">
            <div class="col-xs-8">
                <div class="row">
                    @foreach($returnProducts as $product)
                        <div class="col-xs-4" style="padding: 10px;">
                            <img src="{{asset($product['image'])}}" height="200" width="150">
                            <h4> {{$product['name']}}</h4>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p>{{$product['price']}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-container">
                    <div class="form-btn">
                        <span>Add Product</span>
                    </div>
                    <hr>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="/products" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="name" class="form-control" placeholder="Product Name" required>
                        <input type="text" name="price" class="form-control" placeholder="Price" required>
                        <input type="text" name="amount" class="form-control" placeholder="Amount" required>
                        <input type="file" name="images[]" class="form-control" multiple>
                        <button type="submit" class="btn btn-primary mt-2">Add Product</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>