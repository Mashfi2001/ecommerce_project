@extends('layout.master')

@section('title', $product->name . ' - TechStore')

@section('content')
<div class="container py-4">
    <div class="row">
        <!-- Image Section -->
        <div class="col-md-6">
            @php
                $images = explode('|', $product->image);
            @endphp
            <img src="{{ asset($images[0]) }}" class="img-fluid rounded shadow-sm mb-3" alt="{{ $product->name }}">
            
            @if(count($images) > 1)
                <div class="d-flex gap-2">
                    @foreach($images as $img)
                        <img src="{{ asset($img) }}" style="width:70px;height:70px;object-fit:cover;" class="border rounded">
                    @endforeach
                </div>
            @endif
        </div>

        
        <div class="col-md-6">
            <h2 class="fw-bold">{{ $product->name }}</h2>
            <div class="mb-2 text-warning">
                @for($i = 1; $i <= 4; $i++)
                    <i class="fa fa-star"></i>
                @endfor
                <i class="fa fa-star-o"></i>
            </div>
            <h4 class="text-primary fw-bold">৳ {{ number_format($product->price, 2) }}</h4>
            <p class="badge bg-secondary">Stock: {{ $product->amount }}</p>
            <p class="mt-3">{{ $product->description ?? 'No description available.' }}</p>

            @if($product->amount > 0)
            <form action="{{ route('cart.add') }}" method="POST" class="mt-3">
                @csrf
                <input type="hidden" name="id" value="{{ $product->id }}">
                <input type="hidden" name="name" value="{{ $product->name }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
                <div class="d-flex">
                    <input type="number" name="quantity" value="1" min="1" max="{{ $product->amount }}" class="form-control w-25 me-2">
                    <button type="submit" class="btn btn-success">Add to Cart</button>
                </div>
            </form>
            @else
                <div class="alert alert-warning mt-3">This product is out of stock.</div>
            @endif
        </div>
    </div>
</div>
@endsection
