@extends('layouts.backend')

@section('content')
<div class="container-fluid mt-3">
    <div class="card">
        <div class="card-header">
            <h5>Detail Produk</h5>
        </div>
        <div class="card-body">

            {{-- Row 1 --}}
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Nama Produk:</strong>
                    <div>{{ $product->name }}</div>
                </div>
                <div class="col-md-4">
                    <strong>Harga:</strong>
                    <div>Rp {{ number_format($product->price, 0, ',', '.') }}   </div>
                </div>
                <div class="col-md-4">
                    <strong>Stok:</strong>
                    <div>{{ $product->stock }}</div>
                </div>
            </div>

            {{-- Row 2 --}}
            <div class="row mb-3">
                <div class="col-md-4">
                    <strong>Kategori:</strong>
                    <div>{{ $product->category->name ?? '-' }}</div>
                </div>
                <div class="col-md-8">
                    <strong>Gambar Produk:</strong><br>
                    @if ($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" width="180" class="rounded border mt-2">
                    @else
                        <div class="text-muted mt-2">Tidak ada gambar</div>
                    @endif
                </div>
            </div>

            {{-- Deskripsi --}}
            <div class="mb-3">
                <strong>Deskripsi:</strong>
                <p class="mt-1">{{ $product->description }}</p>
            </div>

            <a href="{{ route('product.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
