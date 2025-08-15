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

<div class="container py-5">
    <h1 class="mb-4">All Sales</h1>

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>#</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Purchased At</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($sales as $sale)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sale->product_id }}</td>
                <td>{{ $sale->quantity }}</td>
                <td>${{ number_format($sale->price, 2) }}</td>
                <td>${{ number_format($sale->total, 2) }}</td>
                <td>{{ $sale->created_at->format('d M Y, H:i') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No sales yet.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>