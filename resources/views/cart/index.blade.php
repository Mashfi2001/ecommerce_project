@extends('layout.master')

@section('title', 'Shopping Cart - TechStore')

@section('content')
<div class="container py-4">
    <h2>Shopping Cart</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(count($cart) > 0)
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price (৳)</th>
                <th>Quantity</th>
                <th>Total (৳)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $grandTotal = 0; @endphp
            @foreach($cart as $id => $item)
                @php $total = $item['price'] * $item['quantity']; $grandTotal += $total; @endphp
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ number_format($item['price'], 2) }}</td>
                    <td>
                        <form action="{{ route('cart.decrease') }}" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <button type="submit" class="btn btn-sm btn-secondary">-</button>
                        </form>

                        <span class="mx-2">{{ $item['quantity'] }}</span>

                        <form action="{{ route('cart.increase') }}" method="POST" class="d-inline">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <button type="submit" class="btn btn-sm btn-secondary">+</button>
                        </form>
                    </td>
                    <td>{{ number_format($total, 2) }}</td>
                    <td>
                        <form action="{{ route('cart.remove') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <button type="submit" class="btn btn-danger btn-sm">Remove</button>
                        </form>
                    </td>
                    <form action="{{ route('cart.checkout') }}" method="POST" class="mt-3">
                        @csrf
                        <button type="submit" class="btn btn-success">Proceed to Payment</button>
                    </form>
                </tr>
            @endforeach
            <tr>
                <td colspan="3" class="text-end"><strong>Grand Total:</strong></td>
                <td colspan="2"><strong>৳ {{ number_format($grandTotal, 2) }}</strong></td>
            </tr>
        </tbody>
    </table>
    @else
        <div class="alert alert-warning">Your cart is empty.</div>
    @endif
</div>
@endsection
