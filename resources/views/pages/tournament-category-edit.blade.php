@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Edit Tournament Category</div>
            <div class="card-body">
                <form action="{{ route('tournament-category.update', $item->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Nama Kategori</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Kategori" value="{{ $item->nama }}">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
            </div>
     


        </div>

@endsection
