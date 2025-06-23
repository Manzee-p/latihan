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
                    Data kategori
                    <a href="{{ route('category.create') }}" class="btn btn-info" style="float: right;">
                        Tambah
                    </a>
                </div>
                <div class="card-body">
                    <table class="table" id="dataCategory">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama kategory</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <thead>
                            <tbody>
                                @foreach($category as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->name}}</td>
                                    <td>{{ $data->slug }}</td>
                                    <td>
                                        <a href="{{ route('category.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a> |
                                        <a href="{{ route('category.destroy', $data->id) }}" class="btn btn-sm btn-danger" data-confirm-delete="true">Delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </thead>
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
    new DataTable('#dataCategory');
</script>
@endpush