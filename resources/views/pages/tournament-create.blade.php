@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Tambah Tournament</div>
            <div class="card-body">
                <form action="{{ route('tournament.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{ old('nama') }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Tournament Kategori</label>
                            <select name="id_category" required class="form-control">
                                <option value="">--Pilih Kategori--</option>
                                @foreach($tournament_category as $tournament_categories)
                                    <option value="{{ $tournament_categories->id }}">
                                        {{ $tournament_categories->nama }}
                                    </option>
                                @endforeach
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" placeholder="Tanggal" value="{{ old('tanggal') }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Logo</label>
                        <br>
                        <input type="file" name="logo" placeholder="Image" value="{{ old('logo') }}">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
            </div>
     


        </div>

@endsection
