@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Produk</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Nama:</label><br>
        <input type="text" name="name" value="{{ $product->name }}"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="description">{{ $product->description }}</textarea><br><br>

        <label>Harga:</label><br>
        <input type="number" name="price" value="{{ $product->price }}"><br><br>

        <button type="submit">Update</button>
        <a href="{{ route('products.index') }}">Batal</a>
    </form>
</div>
@endsection
