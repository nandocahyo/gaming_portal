@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Tambah Team</div>
            <div class="card-body">
                <form action="{{ route('team.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group col-6 float-left">
                        <label for="title">Nama Team</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama Team" value="{{ old('nama') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">Discord</label>
                        <input type="text" class="form-control" name="discord" placeholder="Discord" value="{{ old('discord') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">No HP</label>
                        <input type="text" class="form-control" name="no_hp" placeholder="No HP" value="{{ old('no_hp') }}">
                    </div>

                    <div class="form-group col-12 float-left">
                        <label for="title">Logo</label>
                        <br>
                        <input type="file" name="logo" placeholder="Logo" value="{{ old('logo') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">Player 1</label>
                        <input type="text" class="form-control" name="player1" placeholder="Player 1" value="{{ old('player1') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">Level 1</label>
                        <input type="text" class="form-control" name="level1" placeholder="Level 1" value="{{ old('level1') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">Player 2</label>
                        <input type="text" class="form-control" name="player2" placeholder="Player 2" value="{{ old('player2') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">Level 2</label>
                        <input type="text" class="form-control" name="level2" placeholder="Level 2" value="{{ old('level2') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">Player 3</label>
                        <input type="text" class="form-control" name="player3" placeholder="Player 3" value="{{ old('player3') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">Level 3</label>
                        <input type="text" class="form-control" name="level3" placeholder="Level 3" value="{{ old('level3') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">Player 4</label>
                        <input type="text" class="form-control" name="player4" placeholder="Player 4" value="{{ old('player4') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">Level 4</label>
                        <input type="text" class="form-control" name="level4" placeholder="Level 4" value="{{ old('level4') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">Player 5</label>
                        <input type="text" class="form-control" name="player5" placeholder="Player 5" value="{{ old('player5') }}">
                    </div>

                    <div class="form-group col-6 float-left">
                        <label for="title">Level 5</label>
                        <input type="text" class="form-control" name="level5" placeholder="Level 5" value="{{ old('level5') }}">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Simpan
                    </button>
                </form>
            </div>
            </div>
     


        </div>

@endsection
