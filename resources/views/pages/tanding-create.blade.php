@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Tambah Pertandingan</div>
            <div class="card-body">
                <form action="{{ route('tanding.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group">
                        <label for="title">Tournament</label>
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
                        <label for="title">Team</label>
                            <select name="id_team" required class="form-control">
                                <option value="">--Pilih Team--</option>
                                @foreach($team as $teams)
                                    <option value="{{ $teams->id }}">
                                        {{ $teams->nama }}
                                    </option>
                                @endforeach
                            </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
            </div>
     


        </div>

@endsection
