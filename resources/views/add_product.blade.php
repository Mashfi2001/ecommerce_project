@include('layout.admin_head')
<body>
    
    <nav class="admin-header navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/admin_products">Admin Panel</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/sales">Sales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/storage">Storage</a>
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
