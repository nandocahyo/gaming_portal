@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Team</div>
            <div class="card-body">
                <a href="{{route('team.create')}}" class="btn btn-primary mb-2" id="create-new-post">Tambah Team</a> 
            <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><span id="laravel_crud"></span>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Team</th>
                      <th>Email</th>
                      <th>Discord</th>
                      <th>No HP</th>
                      <th>Logo</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody id="posts-crud">
                    @foreach($items as $item)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $item->teams->nama }}</td>
                      <td>{{ $item->teams->email }}</td>
                      <td>{{ $item->teams->discord }}</td>
                      <td>{{ $item->teams->no_hp }}</td>
                      <td>
                      <img src="{{ URL::to('/') }}/gambar-team/{{ $item->teams->logo }}" alt="" style="width: 100px" 
                            class="img-thumbnail" />
                      </td>
                      <td>
                            <a href="{{ route('team.edit', $item->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('team.destroy', $item->id) }}" method="post" class="d-inline">
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
