@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Edit Tournament</div>
            <div class="card-body">
                <form action="{{ route('info.update', $item->id ) }}" method="post">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                        <label for="title">Tournament</label>
                            <select name="id_tournament" class="form-control">
                                <option value="{{ $item->id_tournament }}">--Pilih Tournament--</option>
                                @foreach($tournament as $tournaments)
                                    <option value="{{ $tournaments->id }}">
                                        {{ $tournaments->nama }}
                                    </option>
                                @endforeach
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Discord</label>
                        <input type="text" class="form-control" name="discord" placeholder="Discord" value="{{ $item->discord }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Price</label>
                        <input type="text" class="form-control" name="price" placeholder="Price" value="{{ $item->price }}">
                    </div>

                    <div class="form-group">
                        <label for="title">Rules</label>
                        <input type="text" class="form-control" name="rules" placeholder="Rules" value="{{ $item->rules }}">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
            </div>
     


        </div>

@endsection
