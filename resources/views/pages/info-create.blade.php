@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Tambah Info</div>
            <div class="card-body">
                <form action="{{ route('info.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="title">Info</label>
                            <select name="id_tournament" required class="form-control">
                                <option value="">--Pilih Tournament--</option>
                                @foreach($tournament as $tournaments)
                                    <option value="{{ $tournaments->id }}">
                                        {{ $tournaments->nama }}
                                    </option>
                                @endforeach
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Discord</label>
                        <input type="text" class="form-control" name="discord" placeholder="Discord" value="{{ old('discord') }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Price" value="{{ old('price') }}">
                    </div>
                   
                    <div class="form-group">
                        <label for="title">Rules</label>
                        <input type="text" class="form-control" name="rules" placeholder="Rules" value="{{ old('rules') }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Banner</label>
                        <br>
                        <input type="file" name="banner" placeholder="Banner" value="{{ old('banner') }}">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
            </div>
     


        </div>

@endsection
