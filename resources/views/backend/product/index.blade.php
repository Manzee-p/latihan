@extends('layouts.backend')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Data Produk
                    <a href="{{ route('product.create') }}" class="btn btn-info" style="float: right;">
                        Tambah
                    </a>
                </div>
                <div class="card-body">
                    <table class="table" id="dataProduct">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Produk</th>
                                <th>Slug</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->slug }}</td>
                                <td>{{ Str::limit($data->description, 30) }}</td>
                                <td>{{ number_format($data->price, 0, ',', '.') }}</td>
                                <td>{{ $data->stock }}</td>
                                <td>{{ $data->category->name ?? '-' }}</td>
                                <td>
                                    <a href="{{ route('product.edit', $data->id) }}" class="btn btn-sm btn-success">Edit</a> |
                                    <a href="{{ route('product.show', $data->id) }}" class="btn btn-sm btn-warning">Show</a> |
                                    <a href="{{ route('product.destroy', $data->id) }}" class="btn btn-sm btn-danger" data-confirm-delete="true">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#dataProduct');
</script>
@endpush
