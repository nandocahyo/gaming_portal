@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Tambah Tournament Category</div>
            <div class="card-body">
                <form action="{{ route('tournament-category.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="title">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Kategori" value="{{ old('nama') }}">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
            </div>
     


        </div>

@endsection
