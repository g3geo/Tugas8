@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Produk Baru</h2>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="name" value="{{ old('name') }}"><br><br>

        <label>Deskripsi:</label><br>
        <textarea name="description">{{ old('description') }}</textarea><br><br>

        <label>Harga:</label><br>
        <input type="number" name="price" value="{{ old('price') }}"><br><br>

        <button type="submit">Simpan</button>
        <a href="{{ route('products.index') }}">Batal</a>
    </form>
</div>
@endsection
