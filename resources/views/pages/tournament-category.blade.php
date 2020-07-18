@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Tournament Category</div>
            <div class="card-body">
                <a href="{{route('tournament-category.create')}}" class="btn btn-primary mb-2" id="create-new-post">Tambah Tournament Category</a> 
            <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><span id="laravel_crud"></span>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody id="posts-crud">
                    @foreach($items as $item)
                    <tr>
                      <td>{{ $item->id }}</td>
                      <td>{{ $item->nama }}</td>
                      <td>
                            <a href="{{ route('tournament-category.edit', $item->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('tournament-category.destroy', $item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>


        </div>

@endsection
