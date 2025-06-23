@extends('layouts.backend')
@section('styles')
@endsection

@section('content')
<div class="cntainer-fluid">
    <div class="row">
        <div class="card">
            <div class="car-header">Tambah kategori</div>
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="post">
                    @csrf 
                    <div class="mb-2">
                        <label for="">Nama Kategori</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feeback" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <button type="submit" class="btn btn-sm btn outline-primary">Simpan</button>
                        <button type="submit" class="btn btn-sm btn outline-warning">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@endpush