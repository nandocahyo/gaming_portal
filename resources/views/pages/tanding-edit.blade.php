@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Edit Tanding</div>
            <div class="card-body">
                <form action="{{ route('tanding.store', $item->id) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="title">Status</label>
                        <input type="text" class="form-control" name="status" placeholder="Status" value="{{ $item->status }}">
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        Ubah
                    </button>
                </form>
            </div>
            </div>
     


        </div>

@endsection
