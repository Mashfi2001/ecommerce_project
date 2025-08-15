@extends('layout.master')

@section('title', 'Home - TechStore')

@section('content')
    
    <div class="container py-4">
        <div class="row mb-4 align-items-center">
            <div class="col-md-8">
                <h2 class="fw-bold">All Products</h2>
            </div>
            <div class="col-md-4 text-end">
                <form method="GET" action="{{ url('/products') }}" class="d-flex">
                    <input type="text" name="search" class="form-control me-2" placeholder="Search products..." value="{{ request('search') }}">
                    <button type="submit" class="btn btn-outline-primary">Search</button>
                </form>
                
            </div>
        </div>
        <div class="row mb-4 align-items-center">
            <div class="col-md-12 text-end">
                <select class="form-select w-auto d-inline-block">
                    <option>Default Sort</option>
                    <option>Sort By Price</option>
                    <option>Sort By Popularity</option>
                    <option>Sort By Rating</option>
                    <option>Sort By Sale</option>
                </select>
            </div>
        </div>
        <div class="row g-4">
            @forelse($products as $product)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset(explode('|', $product->image)[0]) }}" class="card-img-top" alt="{{ $product->name }}" style="height:200px;object-fit:cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title mb-2">{{ $product->name }}</h5>
                            <div class="mb-2">
                                <span class="text-warning">
                                    @for($i = 1; $i <= 4; $i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                    <i class="fa fa-star-o"></i>
                                </span>
                            </div>
                            <p class="card-text fw-bold mb-2">৳ {{ $product->price }}</p>
                            <span class="badge bg-secondary mb-2">Stock: {{ $product->amount }}</span>
                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary mt-auto">View Details</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12">
                    <div class="alert alert-info">No products found.</div>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center mt-4">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>
    </div>
@endsection