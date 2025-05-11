@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Produk</h2>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <a href="{{ route('products.create') }}">Tambah Produk</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>Rp{{ number_format($product->price, 0, ',', '.') }}</td>
                <td>
                    <a href="{{ route('products.edit', $product) }}">Edit</a> |
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus produk ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr><td colspan="4">Belum ada produk.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
