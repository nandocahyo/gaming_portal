@extends('layouts.admin')

@section('content')
<div class="container-fluid">

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Info</div>
            <div class="card-body">
                <a href="{{route('info.create')}}" class="btn btn-primary mb-2" id="create-new-post">Tambah Info</a> 
            <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0"><span id="laravel_crud"></span>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Tournament</th>
                      <th>Discord</th>
                      <th>Price</th>
                      <th>Rules</th>
                      <th>Banner</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  
                  <tbody id="posts-crud">
                    @foreach($items as $item)
                    <tr>
                      <td>{{  $loop->iteration }}</td>
                      <td>{{ $item->tournaments->nama }}</td>
                      <td>{{ $item->discord }}</td>
                      <td>{{ $item->price }}</td>
                      <td>{{ $item->rules }}</td>
                      <td>
                      <img src="{{ URL::to('/') }}/gambar-banner/{{ $item->banner }}" alt="" style="width: 100px" 
                            class="img-thumbnail" />
                      </td>
                      <td>
                            <a href="{{ route('info.edit', $item->id) }}" class="btn btn-info">
                                <i class="fa fa-pencil-alt"></i>
                            </a>
                            <form action="{{ route('info.destroy', $item->id) }}" method="post" class="d-inline">
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
