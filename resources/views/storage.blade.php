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

    <div class="container my-5">
        <h1 class="text-primary text-center">📦 Storage Inventory</h1>
        <div class="row">
            @php
                use App\Models\Product;
                $products = Product::all();
            @endphp
            @foreach($products as $product)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card shadow-sm">
                        <img src="{{ asset($product->image) }}" class="card-img-top" style="height: 250px; object-fit: cover;">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="text-muted">Quantity: {{ $product->amount }}</p>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this product?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

@include('layout.footer')
</body>
</html>

